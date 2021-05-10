<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Federation extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'created_at',
        'updated_at',
        'state_id'
    ];
    
    public function state(){
        return $this->belongsTo(State::class);
    }

    public function enterprises(){
        return $this->hasMany(Enterprise::class);
    }
}