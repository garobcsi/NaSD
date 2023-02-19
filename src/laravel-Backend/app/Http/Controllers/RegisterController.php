<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request) {
        if (!$request->wantsJson()) return;
        $data = $request->validated();
        $data["password"] = Hash::make($data["password"]);
        User::create($data);
        return response()->json(["data" => ["message" => "Sikeres Regisztráció"]],200);
    }
}
