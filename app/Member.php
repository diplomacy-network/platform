<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function game(){
       return $this->belongsTo('App\Game', 'game_id');
    }

    public function country_template(){
        return $this->belongsTo('App\CountryTemplate', 'country_template_id');
    }
}
