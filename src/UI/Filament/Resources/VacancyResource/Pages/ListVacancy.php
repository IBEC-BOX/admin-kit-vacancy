<?php

namespace AdminKit\Vacancy\UI\Filament\Resources\VacancyResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use AdminKit\Vacancy\UI\Filament\Resources\VacancyResource;

class ListVacancy extends ListRecords
{
    protected static string $resource = VacancyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
