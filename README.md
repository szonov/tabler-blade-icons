# tabler-blade-icons

Inline SVG Icons from tabler-icons.io For Laravel Blade

## Introduction

This is a package for the Laravel framework that allows.
you to use svg icons from tabler-icons.io as Blade components

## Installation

Install with composer in laravel application:

```php
$ composer require szonov/tabler-blade-icons
```

## Usage

Use icon in your blade files, or even in php code..

Examples:.

```blade
    <x-tabler::icon.home class="icon-lg" fill="yellow"/>
    <x-tabler::icon.home class="icon-md" stroke="red"/>
    <x-tabler::icon.home class="text-blue"/>
    <x-tabler::icon.home-2 fill="yellow" stroke="red" class="bg-white"/>
    <x-tabler::icon name="home-2" fill="yellow" stroke="red" class="icon-lg bg-green rounded"/>
    <x-tabler::icon name="home" class="bg-white" fill="#eee" stroke="red"/>

    {{ \Tabler\Icons\TablerIcon::make('ad-2')->stroke('red')->fill('yellow') }}
    {!! \Tabler\Icons\TablerIcon::make('ad-2')->stroke('red')->fill('yellow') !!}

    <x-tabler::icon name="ball-tennis" fill="#E8C432" stroke="#eee" class="icon-lg bg-black rounded"/>
```

## Find Icon

Name of appropriate icon for your application you can find on https://tabler-icons.io
