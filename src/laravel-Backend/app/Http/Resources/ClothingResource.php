<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClothingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->clothing->id,
            "name" => $this->clothing->name,
            "type" => $this->clothing->type,
            "color" => $this->clothing->color,
            "price" => $this->clothing->price
        ];
    }
}
