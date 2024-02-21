<?php

declare(strict_types=1);

namespace AdminKit\Vacancy\UI\API\Controllers;

use AdminKit\Vacancy\Models\Vacancy;
use AdminKit\Vacancy\UI\API\Resources\VacancyResource;

class VacancyController extends Controller
{
    public function showFirst(): VacancyResource
    {
        $vacancies = Vacancy::query()
            ->first();

        return new VacancyResource($vacancies);
    }
}
