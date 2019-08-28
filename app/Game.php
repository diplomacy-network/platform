<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //
    public function noAdjudications(){
        $this->hasMany('App\NoAdjudation');
    }
}
