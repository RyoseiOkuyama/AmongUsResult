<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'id',
        'community_id',
        'regulation_id',
        'winner'
    ];
        
    public function players()
    {
        return $this->belongsToMany('App\Player');
    }
    
    public function community()
    {
        return $this->belongsTo('App\Community');
    }
    
    public function regulation()
    {
        return $this->belongsTo('App\Regulation');
    }
    
    public function player_results()
    {
        return $this->hasMany('App\Player_result');
    }
}
