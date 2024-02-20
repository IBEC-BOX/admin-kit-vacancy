<?php

namespace AdminKit\Vacancy;

use AdminKit\Vacancy\UI\Filament\Resources\VacancyResource;
use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-plugin-admin-kit-vacancy';
    }

    public function register(Panel $panel): void
    {
        $panel->resources([
            VacancyResource::class,
        ]);
    }

    public function boot(Panel $panel): void
    {
    }

    public static function make(): static
    {
        return app(static::class);
    }
}
