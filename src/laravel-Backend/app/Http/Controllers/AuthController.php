<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthenticateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function authenticate(AuthenticateRequest $request) {
        if (!$request->wantsJson()) return;
        if(Auth::attempt($request->validated())) {
            $user = Auth::user();
            $user->tokens()->where('tokenable_id', $user->id)->delete();
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
