<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\RoundMatch;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class RoundMatchPlayerController extends Controller
{
    public function show($id)
    {
        $roundMatch = RoundMatch::find($id);
        return [
            'match' => $roundMatch->teamMatches->load('team'),
            'player_of_the_game' => optional($roundMatch->playerOfTheGame)->load('player.team')
        ];   
    }

    public function store(Request $request, $id)
    {

        $roundMatch = RoundMatch::find($id);
        $playerOfTheGame = $roundMatch->playerOfTheGame;



        if ($playerOfTheGame && $playerOfTheGame->photo) {
            Storage::delete('public/' . $playerOfTheGame->photo);
        }

        if ($playerOfTheGame) {
            $playerOfTheGame->update($request->all());
        } else {
            $roundMatch->playerOfTheGame()->create($request->all());
        }
        return response()->json(['message' => 'success']);
        // return response()->json($roundMatch->load(['teamMatches.team', 'playerMatches']));
    }

    public function upload()
    {
        $image = request()->file('file');
        $player = User::find(request()->user_id);
        $filename = strtolower($player->nickname . '_' . now()->timestamp . '.' . $image->getClientOriginalExtension());

        if ($image->getSize() > 1048576) {
            
            $new_image = Image::make($image->getRealPath());
            if($new_image != null){
                $image_width= $new_image->width();
                $image_height= $new_image->height();
                $new_width= $image_width * 0.25;
                $new_height= $image_height * 0.25;
        
                $new_image->resize($new_width, $new_height, function    ($constraint) {
                    $constraint->aspectRatio();
                });
            }
            // $store_image= $new_image->save(public_path('images/' .$filename));
            // Storage::put('images/' .$filename, (string) $image->encode());
            
            $new_image = $new_image->encode($image->getClientOriginalExtension());
            Storage::put('public/images/'. $player->ball_club_id . '/' . $filename , (string) $new_image);
        } else {
            try {
                $image->storeAs('public/images/' . $player->ball_club_id . '/', $filename);
            } catch (\Exception $e) {
                return response()->json(['message' => $e->getMessage()]);
            }
        }

        return response()->json(['filename' => $filename]);
    }
}
