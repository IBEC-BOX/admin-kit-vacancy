<?php

use AdminKit\Vacancy\UI\API\Controllers\VacancyController;
use Illuminate\Support\Facades\Route;

Route::get('/vacancy', [VacancyController::class, 'showFirst']);
