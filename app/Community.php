<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    public function players()
    {
        return $this->hasMany('App\players');
    }
    
    public function users(){
        return $this->belongsToMany('APP\users');
    }
}
