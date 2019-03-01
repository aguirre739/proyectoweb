<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public function Cadet(){
        return $this->belongsTo('App\Cadet');
    }
}
