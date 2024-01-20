<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function show($id)
    {
        $team = Team::find($id);
        return $team->players->load('team');
    }

    public function index(Request $request)
    {
        $teams = Team::where('ball_club_id', $request->ball_club_id)->get();
        $team_ids = $teams->pluck('id');
        return User::whereIn('team_id', $team_ids)->get()->load('team');
    }
}
