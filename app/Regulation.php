<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regulation extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'id',
        'allnumber',
        'cluenumber',
        'sheriffnumber',
        'madmatenumber',
        'impostornumber',
        'community_id',
    ];
    
    public function results()
    {
        return $this->hasMany('App\Result');
    }
    
    public function community()
    {
        return $this->belongsTo('App\Community');
    }
}
