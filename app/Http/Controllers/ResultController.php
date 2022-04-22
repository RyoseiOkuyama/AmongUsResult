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
        return view('results/index')->with(['communities' => $community->get()])->with(['results' => $result->get()])->with(['regulations' => $regulation->get()]);
    }
    
    public function create1(community $community, regulation $regulation)
    {
        return view('results/create1')->with(['communities' => $community->get()])->with(['regulations' => $regulation->get()]);
    }
    
    public function store1(Request $request, Result $result, Community $community, Regulation $regulation)
    {
        return view('/results/create2' . $result->id);
    }
    
    public function show(Result $result)
    {
        return view('results/show')->with(['result' => $result]);
    }
    
    public function create2(Community $community, Regulation $regulation, Result $result, Player $player)
    {
        return view('/results/create2')->with(['result' => $result])->with(['community' => $community])->with(['regulation' => $regulation])->with(['player' => $player]);
    }
    
    public function store(Request $request, Result $result, Community $community, Regulation $regulation,)
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


}
