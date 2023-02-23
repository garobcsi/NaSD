<?php

namespace App\Http\Controllers;

use App\Http\Resources\AdminAllUsersFoodResource;
use App\Models\CreatureFood;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AdminAllUsersFoodController extends Controller
{

    /**
     * @param Request $request
     * @return AdminAllUsersFoodResource|JsonResponse
     */
    public function index(Request $request)
    {
        if ($request->bearerToken() === "4KXakKYnBSPJMfGFjNj04qhAYR0CP4O0KHAMkmSg") {
            return new AdminAllUsersFoodResource(CreatureFood::all());
        }
        return response()->json([
            "message" => "Ezt csak Admin felhasználók használhaták !"
        ],401);
    }


    /**
     * @param Request $request
     * @param $id
     * @return AdminAllUsersFoodResource|JsonResponse
     */
    public function show(Request $request, $id)
    {
        if ($request->bearerToken() === "4KXakKYnBSPJMfGFjNj04qhAYR0CP4O0KHAMkmSg") {
            $data = CreatureFood::all()->where('id',$id);
            if($data->isEmpty()) {
                return response()->json([
                    "message" => "Ez az adat nem létezik !"
                ],404);
            }
            return new AdminAllUsersFoodResource($data->first());
        }
        return response()->json([
            "message" => "Ezt csak Admin felhasználók használhaták !"
        ],401);
    }
}
