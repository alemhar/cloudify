<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use App\Models\Player;
use Illuminate\Http\Request;

class TeamPlayerController extends Controller
{
    public function index($id)
    {
        $teams = Team::where('ball_club_id', $id)->get();
        return $teams->load('players');
        // $team_ids = $teams->pluck('id');
        // return User::whereIn('team_id', $team_ids)->get()->load('team');
    }
}
