<?php

namespace AdminKit\Vacancy;

use AdminKit\Vacancy\Commands\VacancyCommand;
use AdminKit\Vacancy\Providers\RouteServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class VacancyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('admin-kit-vacancy')
            ->hasConfigFile()
            ->hasViews()
            ->hasTranslations()
            ->hasMigration('create_admin_kit_vacancy_table')
            ->hasCommand(VacancyCommand::class);
    }

    public function registeringPackage()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
