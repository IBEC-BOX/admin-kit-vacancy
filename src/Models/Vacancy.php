<?php

namespace AdminKit\Vacancy\Models;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use AdminKit\Core\Abstracts\Models\AbstractModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use AdminKit\Vacancy\Database\Factories\VacancyFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class Vacancy extends AbstractModel implements HasMedia
{
    use HasFactory;
    use HasTranslations;
    use InteractsWithMedia;

    protected $table = 'admin_kit_vacancy';

    protected $fillable = [
        'title',
        'subtitle',
        'action_title',
        'action_link',
    ];

    protected $casts = [
        //
    ];

    protected $translatable = [
        'title',
        'subtitle',
        'action_title',
        'action_link',
    ];

    protected static function newFactory(): VacancyFactory
    {
        return new VacancyFactory();
    }

    public function gallery(): HasMany
    {
        return $this->hasMany(VacancyGallery::class);
    }
}
