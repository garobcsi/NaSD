<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creature extends Model
{
    public function food() {
        $this->hasMany(Food::class,'creature_id','id');
    }
}
