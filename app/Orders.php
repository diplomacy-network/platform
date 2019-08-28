<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
    public function phase(){
        return $this->belongsTo('App\Phase', 'phase_id');
    }

    public function member(){
        return $this->belongsTo('App\User', 'member_id');
    }
}
