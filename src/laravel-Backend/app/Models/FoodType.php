<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodType extends Model
{
    public function food() {
        $this->hasMany(Food::class,'food_type_id','id');
    }
}
