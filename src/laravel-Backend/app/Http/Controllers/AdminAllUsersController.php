<?php

namespace App\Http\Controllers;

use App\Http\Resources\AdminAllUsersResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AdminAllUsersController extends Controller
{

    /**
     * @param Request $request
     * @return AdminAllUsersResource|JsonResponse
     */
    public function index(Request $request)
    {
        if ($request->bearerToken() === "4KXakKYnBSPJMfGFjNj04qhAYR0CP4O0KHAMkmSg") {
            return new AdminAllUsersResource(User::all());
        }
        return response()->json([
            "message" => "Ezt csak Admin felhasználók használhaták !"
        ],401);
    }


    /**
     * @param Request $request
     * @param $id
     * @return AdminAllUsersResource|JsonResponse
     */
    public function show(Request $request, $id)
    {
        if ($request->bearerToken() === "4KXakKYnBSPJMfGFjNj04qhAYR0CP4O0KHAMkmSg") {
            $data = User::all()->where('id',$id);
            if($data->isEmpty()) {
                return response()->json([
                    "message" => "Ez az adat nem létezik !"
                ],404);
            }
            return new AdminAllUsersResource($data->first());
        }
        return response()->json([
            "message" => "Ezt csak Admin felhasználók használhaták !"
        ],401);
    }
}
