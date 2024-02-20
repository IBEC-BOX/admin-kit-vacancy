<?php

use Illuminate\Support\Facades\Route;
use AdminKit\Vacancy\UI\API\Controllers\VacancyController;

Route::get('/vacancy', [VacancyController::class, 'index']);
Route::get('/vacancy/{id}', [VacancyController::class, 'show']);
