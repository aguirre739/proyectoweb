<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function Payment(){
        return $this->hasOne('App\Payment'); //tiene uno
    }

    public function User(){
        return $this->belongsTo('App\User'); //es el unico que puede hacer asociate
    }

    public function Origin(){
        return $this->belongsTo('App\Origin');
    }
}
