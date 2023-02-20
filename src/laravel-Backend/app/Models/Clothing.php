<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clothing extends Model
{
    public function Creature() {
        $this->belongsToMany(Creature::class)->using(CreatureClothing::class);
    }
}
