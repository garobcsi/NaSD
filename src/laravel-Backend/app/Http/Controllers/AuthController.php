<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthenticateRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * @param AuthenticateRequest $request
     * @return JsonResponse|void
     */
    public function authenticate(AuthenticateRequest $request) {
        if (!$request->wantsJson()) return;
        if(Auth::attempt($request->validated())) {
            $user = Auth::user();
            //$user->tokens()->where('tokenable_id', $user->id)->delete(); //Generate token and delete old one
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json([
                "data" => [ "token" => $token ]
            ],200);
        }
        else {
            return response()->json(["data"=> ["message" => "Sikertelen belépés"]],401);
        }
    }
}
