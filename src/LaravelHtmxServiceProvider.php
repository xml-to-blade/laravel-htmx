<?php

namespace XmlBlade\LaravelHtmx;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use XmlBlade\LaravelHtmx\Commands\LaravelHtmxCommand;

class LaravelHtmxServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('htmx')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_htmx_table')
            ->hasCommand(LaravelHtmxCommand::class);
    }
}
