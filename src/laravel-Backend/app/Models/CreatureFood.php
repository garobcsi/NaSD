<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreatureFood extends Model
{
    protected $table = "creature_food";
    public $timestamps = false;
    protected $fillable = ["creature_id","food_id","amount"];
    public function foodtype() {
        $this->hasOne(Food::class,'id','food_id');
    }
    public function creature() {
        $this->hasOne(Creature::class,'id','creature_id');
    }
}
