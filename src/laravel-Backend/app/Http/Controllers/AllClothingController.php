<?php

namespace App\Http\Controllers;

use App\Http\Resources\AllClothingResource;
use App\Models\Clothing;
use Illuminate\Http\Request;

class AllClothingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index() {
        return AllClothingResource::collection(Clothing::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return AllClothingResource|\Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $i = Clothing::find($id);
        if ($i == null) return response()->json([
            "data" => [
                "message" => "Ez az adat nem létezik !"
            ]
        ],404);
        return new AllClothingResource($i);
    }
}
