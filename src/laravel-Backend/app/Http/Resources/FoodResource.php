<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FoodResource extends JsonResource
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
            "id" => $this->food->id,
            "name" => $this->food->name,
            "type" => $this->food->type,
            "health_amount" => $this->food->health_amount,
            "energy_amount" => $this->food->energy_amount,
            "hunger_amount" => $this->food->hunger_amount,
            "price" => $this->food->price,
            "amount" => $this->amount
        ];
    }
}
