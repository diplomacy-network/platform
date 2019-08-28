<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CountryTemplate extends Model
{
    //
    public function variant(){
        return $this->belongsTo('App\Variant', 'variant_id');
    }
}
