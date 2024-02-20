<?php

namespace AdminKit\Vacancy\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AdminKit\Vacancy\Vacancy
 */
class Vacancy extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AdminKit\Vacancy\Vacancy::class;
    }
}
