<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Regulation;
use App\Community;
use App\Player;
use App\Result;


class CommunityController extends Controller
{
    public function index(Community $community)
    {
        return view('communities/index')->with(['communities' =>$community->get()]);
    }
    
    public function createcommunity(Community $community)
    {
        return view('/communities/create');
    }
    
    public function CreatedCommunity(Request $request, Community $community)
    {
        $community->fill($input)->save();
        return redirect('/communities/' . $community->id);
    }
    
    public function ShowCommunity(Community $community, Player $player, Result $result,)
    {
        $player_results = DB::table('player_result')->get();
        return view('/communities/show',compact('player_results'))->with(['community' => $community, 'result' => $result]);
    }
    
    public function CreateRegulation(Community $community)
    {
        return view('/regulations/create')->with(['community' =>$community]);
    }
    
    public function CreatedRegulation(Request $request, Community $community, Regulation $regulation)
    {
        $input = $request['regulation'];
        $regulation->fill($input)->save();
        return redirect('/regulations/' . $regulation->id);
    }
    
    public function ShowRegulation(Regulation $regulation)
    {
        return view('/regulations/show')->with(['regulation' => $regulation]);
    }
    
    public function CreatePlayer(Community $community)
    {
        return view('/players/create')->with(['community' => $community]);
    }
    
    public function CreatedPlayer(Request $request, Community $community, Player $player)
    {
        $input = $request['player'];
        $player->fill($input)->save();
        return redirect('/players/' . $player->id);
    }
    
    public function ShowPlayer(Player $player)
    {
        return view('/players/show')->with(['player' => $player]);
    }
}

