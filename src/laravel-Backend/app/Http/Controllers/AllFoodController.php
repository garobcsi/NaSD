<?php

namespace App\Http\Controllers;

use App\Http\Resources\AllFoodResource;
use App\Models\Food;
use Illuminate\Http\Request;

class AllFoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AllFoodResource
     */
    public function index()
    {
        return new AllFoodResource(Food::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return AllFoodResource|\Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $i = Food::find($id);
        if ($i == null) return response()->json([
            "data" => [
                "message" => "Ez az adat nem létezik !"
            ]
        ],404);
        return new AllFoodResource($i);
    }
}
