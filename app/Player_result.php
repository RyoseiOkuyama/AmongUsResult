<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player_result extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'player_id',
        'result_id',
        'role',
    ];
    
    public function player()
    {
        return $this->belongsTo('App\Player');
    }
    
    public function result()
    {
        return $this->belongsTo('App\Result');
    }
}
