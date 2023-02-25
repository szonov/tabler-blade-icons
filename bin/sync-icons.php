#!/usr/bin/env php
<?php

$root_dir  = dirname(__DIR__);
$blade_dir = $root_dir . '/resources/views/components/icon';
is_dir($blade_dir) || mkdir(directory: $blade_dir, recursive: true);

chdir($root_dir);

$version_file = __DIR__ . '/version.txt';
$current_version = file_exists($version_file) ? file_get_contents($version_file) : '-none-';

$info = json_decode(`curl -L -s https://api.github.com/repos/tabler/tabler-icons/releases/latest`, true);
$download_url = $info['assets'][0]['browser_download_url'] ?? die("ERROR: download_url is not detected\n");
$new_version = basename($download_url);

echo "\n===========================\n";
echo "OLD: {$current_version}\nNEW: {$new_version}";
echo "\n===========================\n\n";

($new_version !== $current_version) || die("OK: already latest version\nDONE\n");

is_file("tabler-icons.zip") && unlink("tabler-icons.zip");
passthru("curl -L -o tabler-icons.zip " . escapeshellarg($download_url));

is_dir("icons") && passthru("rm -r icons");
passthru("unzip -q tabler-icons.zip 'svg/*.svg'");
rename('svg', 'icons');

foreach (glob("icons/*.svg") as $file)
{
    makeIcon($file, $blade_dir . "/" . basename($file, '.svg') . '.blade.php');
}

echo "\n";

is_dir("icons") && passthru("rm -r icons");
file_put_contents($version_file, $new_version);

echo "DONE\n";

function makeIcon($source_svg, $destination_blade): void
{
    $content = file_get_contents($source_svg);

    $content = preg_replace_callback('/<svg[^>]+>/', function ($matches) {

        if (!preg_match_all('/([\w-]+)="([^"]+)"/', $matches[0], $regs)) {
            return $matches[0];
        }

        $props = [];
        $attributes = [];
        $isAttributesAdded = false;

        foreach ($regs[1] as $index => $attribute)
        {
            $value = $regs[2][$index];

            if (in_array($attribute, ['stroke', 'fill']))
            {
                $props[] = "'{$attribute}' => '{$value}'";
                $attributes[] = "{$attribute}={{ \${$attribute} }}";
                continue;
            }

            if ($attribute === 'class') {
                $isAttributesAdded = true;
                $attributes[] = '{{ $attributes->merge([\'class\' => \'' . $value . '\']) }}';
                continue;
            }

            $attributes[] = "$attribute=\"{$value}\"";
        }

        if (!$isAttributesAdded)
        {
            $attributes[] = '{{ $attributes }}';
        }

        return '@props([' . join(',', $props) . '])' . "\n\n" . '<svg ' . join(" ", $attributes) . ">";

    }, $content);

    file_put_contents($destination_blade, $content);

//    echo "ICON: " . basename($source_svg) . " --> " . basename($destination_php) . "\n";
    echo ".";
}

