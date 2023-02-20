<?php

namespace App\Http\Controllers;

use App\Http\Resources\CreatureResource;
use App\Models\Creature;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CreatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
}
