<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Regulation;
use App\Community;
use App\Player;
use App\Result;
use App\Player_result;


class ResultController extends Controller
{
    public function index(community $community, result $result, regulation $regulation)
    {
        return view('results/result_index')->with(['communities' => $community->get(), 'results' => $result->get(), 'regulations' => $regulation->get()]);
    }
    
    public function create1(community $community, regulation $regulation)
    {
        return view('results/result_create1')->with(['communities' => $community->get()]);
    }
    
    public function create2(Request $request, Community $community, Regulation $regulation, Result $result, Player $player)
    {
        $select_community = $request['community'];
        
        return view('/results/result_create2')->with(['result' => $result, 'community' => $community, 'regulations' => $regulation->get(), 'select_community' => $select_community, 'players' => $player->get()]);
    
    }
    
    public function create3(Request $request, Player $player, Regulation $regulation)
    {
        $select_regulation = $request['regulation'];
        $select_players = $request->players_array;
        $select_community = $request['community'];
        return view('/results/result_create3')->with(['select_regulation' => $select_regulation, 'select_players' => $select_players, 'select_community' => $select_community, 'players' => $player->get(), 'regulations' => $regulation->get()]);

    }
    
    public function create4(Result $result)
    {
        return view('results/result_create4')->with(['result' => $result]);
    }
    
    public function created(Request $request, Result $result)
    {
        $input_result = $request['result'];
        $input_players = $request->players_array;
        $input_sheriffs = $request->players_sheriffs;
        $input_madmates = $request->players_madmates;
        $input_impostors = $request->players_impostors;
        $result->fill($input_result)->save();
        $result->players()->attach($input_players);
        foreach($input_sheriffs as $sheriff){
            DB::table('player_result')->where('player_id', $sheriff)->where('result_id', $result->id)->update(['role' => 'sheriff']);
        }
        foreach($input_madmates as $madmate){
            DB::table('player_result')->where('player_id', $madmate)->where('result_id', $result->id)->update(['role' => 'madmate']);
        }
        foreach($input_impostors as $impostor){
            DB::table('player_result')->where('player_id', $impostor)->where('result_id', $result->id)->update(['role' => 'impostor']);
        }
        return redirect('/results/' . $result->id);
    }
    
    public function show(Result $result)
    {
        return view('results/result_show')->with(['result' => $result]);
    }


}
