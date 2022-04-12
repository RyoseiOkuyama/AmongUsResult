<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class players extends Model
{
    public function community()
    {
        return $this->belongTo('App\communities');
    }
    
    public function results()
    {
        return $this->belongsToMany('App\results');
    }
}
