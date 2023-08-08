<?php

namespace Inly\GithubActions;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class GithubActionsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('github-actions');
    }


    public function bootingPackage()
    {
        $this->publishes([
            $this->package->basePath('/../stubs') => base_path('/'),
        ]); 
    }
}
