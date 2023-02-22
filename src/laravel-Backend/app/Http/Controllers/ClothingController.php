<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClothingRequest;
use App\Http\Resources\AllClothingResource;
use App\Http\Resources\ClothingResource;
use App\Models\Clothing;
use App\Models\Creature;
use App\Models\CreatureClothing;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ClothingController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $findCreatureId = Creature::all()->where('user_id',auth('sanctum')->user()->id)->firstOrFail()->id;
        $data = CreatureClothing::all()->where('creature_id',$findCreatureId);
        if ($data->isEmpty()) return response()->json([
            "data" => ["message" => "Nem találtunk adatot !"]
        ],404);
        return ClothingResource::collection($data);
    }

    /**
     * @param $id
     * @return ClothingResource|JsonResponse
     */
    public function show($id)
    {
        $findCreatureId = Creature::all()->where('user_id',auth('sanctum')->user()->id)->firstOrFail()->id;
        $data = CreatureClothing::all()->where('creature_id',$findCreatureId)->where('clothing_id',$id);
        if ($data->isEmpty()) return response()->json([
            "data" => ["message" => "Nem találtunk adatot !"]
        ],404);
        return new ClothingResource($data->first());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreClothingRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreClothingRequest $request)
    {
        $data = $request->validated();
        $findClothing = Clothing::all()->where('id',$data["clothing_id"]);
        if ($findClothing->isEmpty()) {
            return response()->json([
                "data" => ["message" => "Ez az adat nem létezik !"]
            ],404);
        }
        $findUserId = auth('sanctum')->user()->id;
        $findCreatureId = Creature::all()->where('user_id',$findUserId)->firstOrFail()->id;
        $findData = CreatureClothing::all()->where('creature_id',$findCreatureId);
        if ($findData->isNotEmpty()) {
            $mydata = $findData->where('clothing_id',$data["clothing_id"]);
            if ($mydata->isNotEmpty()) return response()->json([
                "data" => ["message" => "Ez az adat már létezik !"]
            ],403);
        }

        CreatureClothing::create([
            "creature_id" => $findCreatureId,
            "clothing_id" => $data["clothing_id"],
        ]);
        return response()->json([
            "data" => ["message" => "Adat sikeresen létrehozva !"]
        ],201);
    }
}
