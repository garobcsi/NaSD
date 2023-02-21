<?php

namespace App\Models;

use http\Encoding\Stream\Debrotli;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creature extends Model
{
    protected $table = "creature";
    protected $fillable = ["user_id","money","hunger","health","mood","energy","cleanness"];
    public $timestamps = true;
    public function food() {
        return $this->hasMany(CreatureFood::class,'creature_id','id');
    }
    public function creatureclothing() {
        return $this->hasMany(CreatureClothing::class,'creature_id','id');
    }
    public function user() {
        return $this->hasOne(User::class,'id','user_id');
    }
}
