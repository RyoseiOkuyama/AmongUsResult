<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    
    protected $fillable = [
        'id',
        'name',
        'email',
        'email_varified_at',
        'password',
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    protected $casts = [
        'email_verified_at' => 'datetime',
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