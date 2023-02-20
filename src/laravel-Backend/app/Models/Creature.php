<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creature extends Model
{
    protected $fillable = ["user_id","money","health","mood","energy","cleanness"];
    public function food() {
        $this->hasMany(Food::class,'creature_id','id');
    }
    public function clothing() {
        $this->belongsToMany(Clothing::class)->using(CreatureClothing::class);
    }
}
