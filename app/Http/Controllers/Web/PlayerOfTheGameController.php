<?php

namespace App\Http\Controllers\Web;

use Inertia\Inertia;
use App\Models\RoundMatch;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PlayerOfTheGame;
use App\Http\Controllers\Controller;

class PlayerOfTheGameController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $potg = PlayerOfTheGame::where('uuid', $request->uuid)->first();
        
        $ball_club = $potg->player->team->load('ballClub')->ballClub;
        $roundMatch = RoundMatch::find($potg->round_match_id);
        $game = [
            'match' => $roundMatch->teamMatches->load('team'),
            'player_of_the_game' => optional($roundMatch->playerOfTheGame)->load('player.team'),
            'ball_club' => $ball_club,
        ]; 
        
        return view('potg', ['game' => $game]);
    }
}
