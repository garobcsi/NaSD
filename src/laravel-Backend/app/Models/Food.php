<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    public function foodtype() {
        $this->hasOne(FoodType::class,'id','food_type_id');
    }
    public function creature() {
        $this->hasOne(Creature::class,'id','creature_id');
    }
}
