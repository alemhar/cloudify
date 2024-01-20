<?php

namespace App\Http\Controllers;

use App\Models\TeamMatch;
use Illuminate\Http\Request;

class RoundMatchTeamController extends Controller
{
    public function update(Request $request)
    {

        foreach ($request->all() as $team) {
            $teamMatch = TeamMatch::find($team['id']);
            $teamMatch->final_score = $team['final_score'];
            $teamMatch->winner = $team['winner'];
            $teamMatch->save();
        }
    }
}
