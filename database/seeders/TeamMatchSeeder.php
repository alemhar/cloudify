<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamMatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $team_brown = \App\Models\Team::where('name', 'Brown Team')->firstOrFail();        
        $team_red = \App\Models\Team::where('name', 'Red Team')->firstOrFail();
        $team_dark_blue = \App\Models\Team::where('name', 'Dark Blue Team')->firstOrFail();
        $team_green = \App\Models\Team::where('name', 'Green Team')->firstOrFail();
        $team_yellow = \App\Models\Team::where('name', 'Yellow Team')->firstOrFail();
        $team_purple = \App\Models\Team::where('name', 'Purple Team')->firstOrFail();
        $team_orange = \App\Models\Team::where('name', 'Orange Team')->firstOrFail();
        $team_pink = \App\Models\Team::where('name', 'Pink Team')->firstOrFail();
        $team_gray = \App\Models\Team::where('name', 'Gray Team')->firstOrFail();
        $team_black = \App\Models\Team::where('name', 'Black Team')->firstOrFail();
        $team_white = \App\Models\Team::where('name', 'White Team')->firstOrFail();
        $team_light_blue = \App\Models\Team::where('name', 'Light Blue Team')->firstOrFail();

        // $round = \App\Models\Round::where('name', 'Round 1')->firstOrFail();
        // $matches = \App\Models\RoundMatch::where('round_id', $round->id)->orderBy('time_slot_start', 'asc')->get();
        
        // $round_match = $matches[0];
        // \App\Models\TeamMatch::create(['team_id' => $team_red->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_black->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[1];
        // \App\Models\TeamMatch::create(['team_id' => $team_yellow->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_brown->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[2];
        // \App\Models\TeamMatch::create(['team_id' => $team_white->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_orange->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[3];
        // \App\Models\TeamMatch::create(['team_id' => $team_green->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_light_blue->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[4];
        // \App\Models\TeamMatch::create(['team_id' => $team_dark_blue->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_gray->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[5];
        // \App\Models\TeamMatch::create(['team_id' => $team_purple->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_pink->id, 'round_match_id' => $round_match->id]);




        // $round = \App\Models\Round::where('name', 'Round 2')->firstOrFail();
        // $matches = \App\Models\RoundMatch::where('round_id', $round->id)->orderBy('time_slot_start', 'asc')->get();
        
        // $round_match = $matches[0];
        // \App\Models\TeamMatch::create(['team_id' => $team_red->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_gray->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[1];
        // \App\Models\TeamMatch::create(['team_id' => $team_black->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_white->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[2];
        // \App\Models\TeamMatch::create(['team_id' => $team_purple->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_orange->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[3];
        // \App\Models\TeamMatch::create(['team_id' => $team_green->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_pink->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[4];
        // \App\Models\TeamMatch::create(['team_id' => $team_light_blue->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_yellow->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[5];
        // \App\Models\TeamMatch::create(['team_id' => $team_brown->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_dark_blue->id, 'round_match_id' => $round_match->id]);



        // $round = \App\Models\Round::where('name', 'Round 3')->firstOrFail();
        // $matches = \App\Models\RoundMatch::where('round_id', $round->id)->orderBy('time_slot_start', 'asc')->get();
        
        // $round_match = $matches[0];
        // \App\Models\TeamMatch::create(['team_id' => $team_green->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_orange->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[1];
        // \App\Models\TeamMatch::create(['team_id' => $team_purple->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_white->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[2];
        // \App\Models\TeamMatch::create(['team_id' => $team_black->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_gray->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[3];
        // \App\Models\TeamMatch::create(['team_id' => $team_red->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_brown->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[4];
        // \App\Models\TeamMatch::create(['team_id' => $team_light_blue->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_dark_blue->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[5];
        // \App\Models\TeamMatch::create(['team_id' => $team_yellow->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_pink->id, 'round_match_id' => $round_match->id]);



        
        // $round = \App\Models\Round::where('name', 'Round 4')->firstOrFail();
        // $matches = \App\Models\RoundMatch::where('round_id', $round->id)->orderBy('time_slot_start', 'asc')->get();
        
        // $round_match = $matches[0];
        // \App\Models\TeamMatch::create(['team_id' => $team_red->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_orange->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[1];
        // \App\Models\TeamMatch::create(['team_id' => $team_pink->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_gray->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[2];
        // \App\Models\TeamMatch::create(['team_id' => $team_light_blue->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_brown->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[3];
        // \App\Models\TeamMatch::create(['team_id' => $team_black->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_green->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[4];
        // \App\Models\TeamMatch::create(['team_id' => $team_purple->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_yellow->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[5];
        // \App\Models\TeamMatch::create(['team_id' => $team_white->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_dark_blue->id, 'round_match_id' => $round_match->id]);


        // $round = \App\Models\Round::where('name', 'Round 5')->firstOrFail();
        // $matches = \App\Models\RoundMatch::where('round_id', $round->id)->orderBy('time_slot_start', 'asc')->get();
        
        // $round_match = $matches[0];
        // \App\Models\TeamMatch::create(['team_id' => $team_gray->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_orange->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[1];
        // \App\Models\TeamMatch::create(['team_id' => $team_red->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_white->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[2];
        // \App\Models\TeamMatch::create(['team_id' => $team_dark_blue->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_purple->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[3];
        // \App\Models\TeamMatch::create(['team_id' => $team_yellow->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_green->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[4];
        // \App\Models\TeamMatch::create(['team_id' => $team_light_blue->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_black->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[5];
        // \App\Models\TeamMatch::create(['team_id' => $team_brown->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_pink->id, 'round_match_id' => $round_match->id]);


        // $round = \App\Models\Round::where('name', 'Round 6')->firstOrFail();
        // $matches = \App\Models\RoundMatch::where('round_id', $round->id)->orderBy('time_slot_start', 'asc')->get();
        
        // $round_match = $matches[0];
        // \App\Models\TeamMatch::create(['team_id' => $team_yellow->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_red->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[1];
        // \App\Models\TeamMatch::create(['team_id' => $team_green->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_gray->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[2];
        // \App\Models\TeamMatch::create(['team_id' => $team_brown->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_purple->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[3];
        // \App\Models\TeamMatch::create(['team_id' => $team_white->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_light_blue->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[4];
        // \App\Models\TeamMatch::create(['team_id' => $team_orange->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_pink->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[5];
        // \App\Models\TeamMatch::create(['team_id' => $team_black->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_dark_blue->id, 'round_match_id' => $round_match->id]);



        // $round = \App\Models\Round::where('name', 'Round 7')->firstOrFail();
        // $matches = \App\Models\RoundMatch::where('round_id', $round->id)->orderBy('time_slot_start', 'asc')->get();
        
        // $round_match = $matches[0];
        // \App\Models\TeamMatch::create(['team_id' => $team_orange->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_black->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[1];
        // \App\Models\TeamMatch::create(['team_id' => $team_pink->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_white->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[2];
        // \App\Models\TeamMatch::create(['team_id' => $team_light_blue->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_purple->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[3];
        // \App\Models\TeamMatch::create(['team_id' => $team_brown->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_green->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[4];
        // \App\Models\TeamMatch::create(['team_id' => $team_gray->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_yellow->id, 'round_match_id' => $round_match->id]);

        // $round_match = $matches[5];
        // \App\Models\TeamMatch::create(['team_id' => $team_red->id, 'round_match_id' => $round_match->id]);
        // \App\Models\TeamMatch::create(['team_id' => $team_dark_blue->id, 'round_match_id' => $round_match->id]);


        $round = \App\Models\Round::where('name', 'Round 10')->firstOrFail();
        $matches = \App\Models\RoundMatch::where('round_id', $round->id)->orderBy('time_slot_start', 'asc')->get();
        
        $round_match = $matches[0];
        \App\Models\TeamMatch::create(['team_id' => $team_gray->id, 'round_match_id' => $round_match->id]);
        \App\Models\TeamMatch::create(['team_id' => $team_white->id, 'round_match_id' => $round_match->id]);

        $round_match = $matches[1];
        \App\Models\TeamMatch::create(['team_id' => $team_orange->id, 'round_match_id' => $round_match->id]);
        \App\Models\TeamMatch::create(['team_id' => $team_brown->id, 'round_match_id' => $round_match->id]);

        $round_match = $matches[2];
        \App\Models\TeamMatch::create(['team_id' => $team_light_blue->id, 'round_match_id' => $round_match->id]);
        \App\Models\TeamMatch::create(['team_id' => $team_pink->id, 'round_match_id' => $round_match->id]);

        $round_match = $matches[3];
        \App\Models\TeamMatch::create(['team_id' => $team_yellow->id, 'round_match_id' => $round_match->id]);
        \App\Models\TeamMatch::create(['team_id' => $team_black->id, 'round_match_id' => $round_match->id]);

        $round_match = $matches[4];
        \App\Models\TeamMatch::create(['team_id' => $team_green->id, 'round_match_id' => $round_match->id]);
        \App\Models\TeamMatch::create(['team_id' => $team_dark_blue->id, 'round_match_id' => $round_match->id]);

        $round_match = $matches[5];
        \App\Models\TeamMatch::create(['team_id' => $team_red->id, 'round_match_id' => $round_match->id]);
        \App\Models\TeamMatch::create(['team_id' => $team_purple->id, 'round_match_id' => $round_match->id]);


    }
}
