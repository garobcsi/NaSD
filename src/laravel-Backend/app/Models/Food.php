<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = "food";
    public $timestamps = false;
    protected $fillable = ["name","health_amount","energy_amount","hunger_amount"];
    public function food() {
        return $this->hasMany(CreatureFood::class,'food_id','id');
    }
}
