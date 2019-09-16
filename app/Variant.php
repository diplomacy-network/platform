<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    //
    public function games(){
        return $this->hasMany('App\Game');
    }
    
    public function countryTemplates(){
        return $this->hasMany('App\CountryTemplate');
    }
}
