<?php

namespace FastofiCorp\FilamentDiagrams;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentDiagramsServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-diagrams';

    protected array $beforeCoreScripts = [
        'plugin-filament-diagrams' => 'https://unpkg.com/bpmn-js@13.2.0/dist/bpmn-modeler.development.js',
    ];

    protected array $styles = [
        'plugin-filament-diagrams-bpmn-js' => 'https://unpkg.com/bpmn-js@13.2.0/dist/assets/bpmn-js.css',
        'plugin-filament-diagrams-diagram-js' => 'https://unpkg.com/bpmn-js@13.2.0/dist/assets/diagram-js.css',
        'plugin-filament-diagrams-bpmn-font' => 'https://unpkg.com/bpmn-js@13.2.0/dist/assets/bpmn-font/css/bpmn.css',
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
