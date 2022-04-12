<?php

namespace App\Http\Controllers;

use App\Community;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function index(Community $community)
    {
        return view('communities/index')->with(['communities' => $community->get()]);  
    }
}
?>