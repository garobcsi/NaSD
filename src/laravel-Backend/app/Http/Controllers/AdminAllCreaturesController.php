<?php

namespace App\Http\Controllers;

use App\Http\Resources\AdminAllCreatureResources;
use App\Models\Creature;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AdminAllCreaturesController extends Controller
{

    /**
     * @param Request $request
     * @return AdminAllCreatureResources|JsonResponse
     */
    public function index(Request $request)
    {
        if ($request->bearerToken() === "4KXakKYnBSPJMfGFjNj04qhAYR0CP4O0KHAMkmSg") {
            return new AdminAllCreatureResources(Creature::all());
        }
        return response()->json([
            "message" => "Ezt csak Admin felhasználók használhaták !"
        ],401);
    }

    /**
     * @param Request $request
     * @param $id
     * @return AdminAllCreatureResources|JsonResponse
     */
    public function show(Request $request, $id)
    {
        if ($request->bearerToken() === "4KXakKYnBSPJMfGFjNj04qhAYR0CP4O0KHAMkmSg") {
            $data = Creature::all()->where('id',$id);
            if($data->isEmpty()) {
                return response()->json([
                    "message" => "Ez az adat nem létezik !"
                ],404);
            }
            return new AdminAllCreatureResources($data->first());
        }
        return response()->json([
            "message" => "Ezt csak Admin felhasználók használhaták !"
        ],401);
    }
}
