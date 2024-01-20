<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ballClub = \App\Models\BallClub::first();

        $teams = [
                'Brown Team',
                'Red Team',
                'Orange Team',
                'Yellow Team',
                'Green Team',
                'Dark Blue Team',
                'Purple Team',
                'Pink Team',
                'Black Team',
                'White Team',
                'Gray Team',
                'Light Blue Team',
            ];

        foreach ($teams as $team) {
            $ballClub->teams()->create([
                'name' => $team,
                'ball_club_id' => $ballClub->id,
            ]);
        }    
        // \App\Models\Team::create();

    }
}
