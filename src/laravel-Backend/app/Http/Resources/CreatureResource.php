<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\PersonalAccessToken;

class CreatureResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $user = auth('sanctum')->user();
        return [
            "user" => [
                "name" => $user->name,
                "email" => $user->email,
                "last_login" => PersonalAccessToken::all()->where('id',$user->id)->first()->last_used_at,
            ],
            "creature" => [
                "money" => $this->money,
                "health" => $this->health,
                "mood" => $this->mood,
                "energy" => $this->energy,
                "cleanness" => $this->cleanness
            ],
            

        ];
    }
}
