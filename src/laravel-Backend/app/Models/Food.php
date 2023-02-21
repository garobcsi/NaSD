<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = "food";
    public $timestamps = false;
    protected $fillable = ["name","health_amount","energy_amount","nutritious_amount"];
    public function food() {
        $this->hasMany(CreatureFood::class,'food_type_id','id');
    }
}
