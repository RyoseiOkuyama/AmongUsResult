<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'id',
        'name',
        'color',
        'community_id',
        'user_id',
    ];
    
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
    
    public function player_results()
    {
        return $this->hasMany('App\Player_result');
    }
}
