<?php

namespace App\Http\Resources\Admins;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ImageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'uuid' => $this->uuid,
            'name' => $this->name,
            'alt' => $this->alt,
            'url' => $this->url,
            'size' => $this->size,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
