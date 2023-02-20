<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreatureClothing extends Pivot
{
    use HasFactory;
    protected $table = "creature_clothing";
    public $timestamps = false;
}
