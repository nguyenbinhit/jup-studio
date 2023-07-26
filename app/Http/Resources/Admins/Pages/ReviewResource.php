<?php

namespace App\Http\Resources\Admins\Pages;

use App\Http\Resources\Admins\ImageResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
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
            'customer_name' => $this->customer_name,
            'customer_email' => $this->customer_email,
            'image' => new ImageResource($this->image),
            'comment' => $this->comment,
            'stars' => $this->stars,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
