<?php

namespace GoCPA\HttpApiLog;

use GoCPA\HttpApiLog\Commands\HttpApiLogCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class HttpApiLogServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('http-api-log')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_http-api-log_table')
            ->hasCommand(HttpApiLogCommand::class);
    }
}
