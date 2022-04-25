<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Regulation;
use App\Community;
use App\Player;
use App\Result;


class CommunityController extends Controller
{
    public function index(Community $community)
    {
        return view('communities/community_index')->with(['communities' =>$community->get()]);
    }
    
    public function CreateCommunity(Community $community)
    {
        return view('/communities/community_create');
    }
    
    public function CreatedCommunity(Request $request, Community $community)
    {
        $input = $request['community'];
        $community->fill($input)->save();
        return redirect('/communities/' . $community->id);
    }
    
    public function ShowCommunity(Community $community)
    {
        return view('/communities/community_show')->with(['community' => $community]);
    }
    
    public function CreateRegulation(Community $community)
    {
        return view('/regulations/regulation_create')->with(['community' => $community]);
    }
    
    public function CreatedRegulation(Request $request,Regulation $regulation)
    {
        $input = $request['regulation'];
        $regulation->fill($input)->save();
        return redirect('/regulations/' . $regulation->id);
    }
    
    public function ShowRegulation(Regulation $regulation)
    {
        return view('/regulations/regulation_show')->with(['regulation' => $regulation]);
    }
    
    public function CreatePlayer(Community $community)
    {
        return view('/players/player_create')->with(['community' => $community]);
    }
    
    public function CreatedPlayer(Request $request, Player $player)
    {
        $input = $request['player'];
        $player->fill($input)->save();
        return redirect('/players/' . $player->id);
    }
    
    public function ShowPlayer(Player $player)
    {
        return view('/players/player_show')->with(['player' => $player]);
    }
    
    public function LinkPlayer(Player $player)
    {
        $user_id = Auth::id();
        return view('/players/player_link')->with(['player' => $player, 'user_id' => $user_id]);
    }
    
    public function LinkedPlayer(Request $request, Player $player)
    {
        $input_player = $request['player'];
        $player->fill($input_player)->save();
        return redirect('/players/player_show/' . $player->id);
    }
}

