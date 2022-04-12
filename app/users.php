<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    public function communities(){
        return $this->belongsToMany('App\communities');
    }
}
