<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'id',
        'name',
        'body',
        'image',
    ];
    
    public function players()
    {
        return $this->hasMany('App\Player');
    }
    
    public function users()
    {
        return $this->belongsToMany('APP\User');
    }
    
    public function results()
    {
        return $this->hasMany('App\Result');
    }
}
