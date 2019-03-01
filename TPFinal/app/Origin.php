<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Origin extends Model
{
    //
    public function Package(){
        return $this->hasOne('App\Package');
    }
}
