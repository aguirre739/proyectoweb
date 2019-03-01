<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadet extends Model
{
    //
    public function Vehicle(){
        return $this->hasMany('App\Vehicle');
    }
}
