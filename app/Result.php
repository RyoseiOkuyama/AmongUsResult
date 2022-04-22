<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'id',
        'community_id',
        'used_regulation',
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
}
