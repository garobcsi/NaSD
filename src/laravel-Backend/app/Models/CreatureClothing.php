<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreatureClothing extends Model
{
    protected $table = "creature_clothing";
    protected $fillable = ["creature_id","clothing_id"];
    public $timestamps = false;
    public function creature() {
        return $this->hasOne(Creature::class,'id','creature_id');
    }
    public function clothing() {
        return $this->hasOne(Clothing::class,'id','clothing_id');
    }
}
