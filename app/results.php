<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class results extends Model
{
    public function players()
    {
        return $this->belongsToMany('App\players');
    }
}
