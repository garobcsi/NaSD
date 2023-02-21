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
     * @return AllClothingResource
     */
    public function show($id)
    {
        return new AllClothingResource(Clothing::findOrFail($id));
    }
}
