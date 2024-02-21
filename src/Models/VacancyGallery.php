<?php

namespace AdminKit\Vacancy\Models;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use AdminKit\Core\Abstracts\Models\AbstractModel;
use AdminKit\Vacancy\Database\Factories\VacancyFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class VacancyGallery extends AbstractModel implements HasMedia
{
    use HasFactory;
    use HasTranslations;
    use InteractsWithMedia;

    protected $table = 'admin_kit_vacancy_gallery';

    protected $fillable = [
        'title',
    ];

    protected $casts = [
        //
    ];

    protected $translatable = [
        'title',
    ];

    protected static function newFactory(): VacancyFactory
    {
        return new VacancyFactory();
    }
}
