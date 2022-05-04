<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\DB;
>>>>>>> origin/master

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
    
    public function getResults($role, int $playerid)
    {
        return DB::table('players')
            ->rightJoin('player_result', 'players.id', '=', 'player_result.player_id')
            ->leftJoin('results', 'player_result.result_id', '=', 'results.id')
            ->where('players.id', $playerid)->whereIn('player_result.role', $role);
    }
    
    public function getResult(string $role, int $playerid)
    {
        return DB::table('players')
            ->rightJoin('player_result', 'players.id', '=', 'player_result.player_id')
            ->leftJoin('results', 'player_result.result_id', '=', 'results.id')
            ->where('players.id', $playerid)->where('player_result.role', $role);
    }
}
