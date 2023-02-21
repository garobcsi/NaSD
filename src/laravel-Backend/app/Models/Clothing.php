<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clothing extends Model
{
    protected $table = "clothing";
    public $timestamps = false;
    public function creatureclothing() {
        return $this->hasMany(CreatureFood::class,'clothing_id','id');
    }
}
