<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'id',
        'clue',
        'sheriff',
        'madmate',
        'impostor',
        'community_id',
        'color',
    ];
    
    public function communities()
    {
        return $this->belongsToMany('App\Community');
    }
    
    public function players()
    {
        return $this->hasMany('App\Player');
    }
}
