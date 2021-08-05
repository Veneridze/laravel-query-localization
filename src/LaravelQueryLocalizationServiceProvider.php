<?php

namespace Cosnavel\LaravelQueryLocalization;

use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Cosnavel\LaravelQueryLocalization\Http\Livewire\LanguageSelector;

class LaravelQueryLocalizationServiceProvider extends PackageServiceProvider
{
    public function bootingPackage()
    {
        if (class_exists(Livewire::class)) {
            Livewire::component('language-selector', LanguageSelector::class);
        }
    }
    public function packageRegistered()
    {
        $this->app->singleton(LaravelQueryLocalization::class, function () {
            return new LaravelQueryLocalization();
        });

        $this->app->alias(LaravelQueryLocalization::class, 'laravel-query-localization');
    }


    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-query-localization')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('add_language_preference_to_users_table');
    }
}
