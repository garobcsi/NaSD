<?php

namespace App\Http\Controllers;

use App\Http\Resources\AdminAllUsersClothingResource;
use App\Models\CreatureClothing;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AdminAllUsersClothingController extends Controller
{

    /**
     * @param Request $request
     * @return AdminAllUsersClothingResource|JsonResponse
     */
    public function index(Request $request)
    {
        if ($request->bearerToken() === "4KXakKYnBSPJMfGFjNj04qhAYR0CP4O0KHAMkmSg") {
            return new AdminAllUsersClothingResource(CreatureClothing::all());
        }
        return response()->json([
            "message" => "Ezt csak Admin felhasználók használhaták !"
        ],401);
    }


    /**
     * @param Request $request
     * @param $id
     * @return AdminAllUsersClothingResource|JsonResponse
     */
    public function show(Request $request, $id)
    {
        if ($request->bearerToken() === "4KXakKYnBSPJMfGFjNj04qhAYR0CP4O0KHAMkmSg") {
            $data = CreatureClothing::all()->where('id',$id);
            if($data->isEmpty()) {
                return response()->json([
                    "message" => "Ez az adat nem létezik !"
                ],404);
            }
            return new AdminAllUsersClothingResource($data->first());
        }
        return response()->json([
            "message" => "Ezt csak Admin felhasználók használhaták !"
        ],401);
    }
}
