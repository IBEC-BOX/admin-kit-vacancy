<?php

namespace AdminKit\Vacancy\UI\Filament\Resources\VacancyResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use AdminKit\Vacancy\UI\Filament\Resources\VacancyResource;

class EditVacancy extends EditRecord
{
    protected static string $resource = VacancyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
