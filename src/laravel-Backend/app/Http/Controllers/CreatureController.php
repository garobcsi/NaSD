<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCreatureRequest;
use App\Http\Resources\CreatureResource;
use App\Models\Creature;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CreatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $data = Creature::all()->where('user_id',auth('sanctum')->user()->id);
        return CreatureResource::collection($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateCreatureRequest $request)
    {

        $data = $request->validated();
        $findData = Creature::all()->where('user_id',auth('sanctum')->user()->id)->firstOrFail();
        $findData->money = $data["money"];
        $findData->health = $data["health"];
        $findData->hunger = $data["hunger"];
        $findData->mood = $data["mood"];
        $findData->energy = $data["energy"];
        $findData->cleanness = $data["cleanness"];
        $findData->save();
        return response()->json([
            "data" => ["message" => "Sikeres Adatfrissítés !"]
        ],201);
    }
}
