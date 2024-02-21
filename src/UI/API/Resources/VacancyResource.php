<?php

namespace AdminKit\Vacancy\UI\API\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VacancyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'background' => $this->getFirstMediaUrl('main'),
            'action' => [
                'title' => $this->action_title,
                'link' => $this->action_link,
            ],
            'gallery' => VacancyGalleryResource::collection($this->gallery),
        ];
    }
}
