<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function states(){
        return $this->hasMany(State::class);
    }

    public function federations(){
        return $this->hasMany(Federation::class);
    }

    public function enterprises(){
        return $this->hasMany(Enterprise::class);
    }
}