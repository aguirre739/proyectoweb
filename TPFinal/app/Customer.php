<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    public function Package(){
        return $this->hasMany('App\Package');
    }
}
