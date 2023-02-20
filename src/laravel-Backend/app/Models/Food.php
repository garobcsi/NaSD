<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = ["creature_id","food_type","amount"];
    public function foodtype() {
        $this->hasOne(FoodType::class,'id','food_type_id');
    }
    public function creature() {
        $this->hasOne(Creature::class,'id','creature_id');
    }
}
