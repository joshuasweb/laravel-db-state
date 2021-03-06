<?php

namespace Joshuasweb\LaravelDbState;

use Joshuasweb\LaravelDbState\Commands\LaravelDbStateCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelDbStateServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-db-state')
            ->hasConfigFile()
            // ->hasViews()
            // ->hasMigration('create_laravel-db-state_table')
            ->hasCommand(LaravelDbStateCommand::class);
    }
}
