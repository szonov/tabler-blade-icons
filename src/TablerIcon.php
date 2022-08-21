<?php

namespace Tabler\Icons;

use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\View\Component;
use Illuminate\View\Compilers\BladeCompiler;
/**
 * @method self stroke(string $color)
 * @method self fill(string $color)
 * @method self class(string $className)
 */
class TablerIcon extends Component implements Htmlable
{
    public string $name;
    public ?string $stroke = null;
    public ?string $fill = null;

    protected $except = [
        'make',
        'from',
        'withAttribute',
        'toHtml'
    ];

    public function __construct(string $name, ?string $stroke = null, ?string $fill = null)
    {
        $this->name = $name;
        $this->stroke = $stroke ?: null;
        $this->fill = $fill ?: null;
    }

    public static function make(string $name, ?string $stroke = null, ?string $fill = null): self
    {
        return new static($name, $stroke, $fill);
    }

    public static function from($icon): ?TablerIcon
    {
        return match (true)
        {
            $icon instanceof TablerIcon => $icon,
            $icon && is_string($icon)   => static::make($icon),
            default                     => null
        };
    }

    public function __call(string $name, array $arguments): self
    {
        if ($name === 'stroke' || $name === 'fill')
        {
            $this->{$name} = $arguments[0] ?? null;
            return $this;
        }

        return $this->withAttribute($name, $arguments[0] ?? null);
    }

    public function withAttribute(string $name, $value): self
    {
        $this->attributes        ??= $this->newAttributeBag();
        $this->attributes[$name] = $value;

        return $this;
    }

    public function render(): View
    {
        return view('tabler::components.icon.' . $this->name);
    }

    public function toHtml(): string
    {
        return $this->shouldRender() ? BladeCompiler::renderComponent($this) : '';
    }

    public function __toString()
    {
        return $this->toHtml();
    }
}
