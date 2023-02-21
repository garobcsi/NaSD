<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Creature;
use App\Models\CreatureFood;
use App\Models\Food;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * @param RegisterRequest $request
     * @return JsonResponse|void
     */
    public function register(RegisterRequest $request) {
        if (!$request->wantsJson()) return;
        $data = $request->validated();
        $data["password"] = Hash::make($data["password"]);
        User::create($data);
        $userid = User::all()->where('email',$request->email)->first()->id;
        Creature::create([
            "user_id" => $userid,
            "money" => 0,
            "health" =>100,
            "hunger" =>100,
            "mood" => 100,
            "energy" => 100,
            "cleanness" => 100,
        ]);
        $creatureid = Creature::all()->where('user_id',$userid)->first()->id;
        foreach (Food::all() as $i) {
            $id = $i->id;
            CreatureFood::create([
                "creature_id" => $creatureid,
                "food_id" => $id,
                "amount" => 0,
            ]);
        }
        return response()->json(["data" => ["message" => "Sikeres Regisztráció !"]],200);
    }
}
