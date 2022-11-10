<?php

namespace Girishl\Tail;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Girishl\Tail\Commands\TailCommand;

class TailServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-tail-clone')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-tail-clone_table')
            ->hasCommand(TailCommand::class);
    }
}
