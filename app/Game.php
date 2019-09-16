<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //
    protected $fillable = ['title', 'description', 'start_mode', 'start_datetime', 'status', 'eog'];

    // public function noAdjudications(){
    //     $this->hasMany('App\NoAdjudation');
    // }

    // public function members(){
    //     $this->hasMany('App\User');
    // }

    public function variant(){
        return $this->belongsTo('App\Variant', 'variant_id');
    }

    public function scopeJoinable($query){
        $query->where('status', 'pregame');
    }

    
}
