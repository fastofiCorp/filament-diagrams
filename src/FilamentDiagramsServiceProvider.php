<?php

namespace FastofiCorp\FilamentDiagrams;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentDiagramsServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-diagrams';

    protected array $scripts = [
        'plugin-filament-diagrams' => __DIR__ . '/../resources/js/index.js',
    ];




    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name(static::$name)
            ->hasViews();
    }
}
