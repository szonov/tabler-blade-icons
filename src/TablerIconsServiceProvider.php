<?php

namespace Tabler\Icons;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class TablerIconsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(dirname(__DIR__) . '/resources/views', 'tabler');
        Blade::component('tabler::icon', TablerIcon::class);
    }
}
