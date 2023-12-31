<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function state(){
        return $this->hasMany(State::class);
    }

    public function cityState(){
        return $this->hasManyThrough(City::class,State::class);
    }
}
