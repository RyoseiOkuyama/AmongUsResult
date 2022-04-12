<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public function community()
    {
        return $this->belongsTo('App\communitiy');
    }
    
    public function results()
    {
        return $this->belongsToMany('App\Result');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
