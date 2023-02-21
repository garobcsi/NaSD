<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateFoodRequest;
use App\Http\Resources\FoodResource;
use App\Models\Creature;
use App\Models\CreatureFood;
use App\Models\Food;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $findCreatureId = Creature::all()->where('user_id',auth('sanctum')->user()->id)->firstOrFail()->id;
        $data = CreatureFood::all()->where('creature_id',$findCreatureId);
        if ($data->isEmpty()) return response()->json([
            "data" => ["message" => "Nem találtunk adatot !"]
        ],404);
        return FoodResource::collection($data);
    }

//    /**
//     * Display the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function show($id)
//    {
//        //
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateFoodRequest $request
     * @param $id
     * @return JsonResponse
     */
    public function update(UpdateFoodRequest $request,$id)
    {
        $data = $request->validated();
        $findFood = Food::all()->where('id',$id);
        if ($findFood->isEmpty()) {
            return response()->json([
                "data" => ["message" => "Ez az adat nem létezik !"]
            ],404);
        }
        $findUserId = auth('sanctum')->user()->id;
        $findCreatureId = Creature::all()->where('user_id',$findUserId)->firstOrFail()->id;
        $findData = CreatureFood::all()->where('creature_id',$findCreatureId)->where('food_id',$id)->firstOrFail();

        $findData->amount = $data["amount"];
        $findData->save();

        return response()->json([
            "data" => ["message" => "Sikeres Adatfrissítés !"]
        ],201);
    }
}
