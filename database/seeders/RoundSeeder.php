<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ballClub = \App\Models\BallClub::where('alias', 'ateaneo-daddys-cup')->firstOrFail();
        $rounds = [
            [
                'name' => 'Round 1',
                'ball_club_id' => $ballClub->id,
                'date' => '2023-09-24 00:00:00',
                'description' => 'Round 1',
            ],
            [
                'name' => 'Round 2',
                'ball_club_id' => $ballClub->id,
                'date' => '2023-10-01 00:00:00',
                'description' => 'Round 2',
            ],
            [
                'name' => 'Round 3',
                'ball_club_id' => $ballClub->id,
                'date' => '2023-10-08 00:00:00',
                'description' => 'Round 3',
            ],
            [
                'name' => 'Round 4',
                'ball_club_id' => $ballClub->id,
                'date' => '2023-10-15 00:00:00',
                'description' => 'Round 4',
            ],
            [
                'name' => 'Round 5',
                'ball_club_id' => $ballClub->id,
                'date' => '2023-10-22 00:00:00',
                'description' => 'Round 5',
            ],
            [
                'name' => 'Round 6',
                'ball_club_id' => $ballClub->id,
                'date' => '2023-11-05 00:00:00',
                'description' => 'Round 6',
            ],
            [
                'name' => 'Round 7',
                'ball_club_id' => $ballClub->id,
                'date' => '2023-11-12 00:00:00',
                'description' => 'Round 7',
            ]
            // [
            //     'name' => 'Round 8',
            //     'ball_club_id' => $ballClub->id,
            //     'date' => '2023-11-19 00:00:00',
            //     'description' => 'Round 8',
            // ],
            // [
            //     'name' => 'Round 9',
            //     'ball_club_id' => $ballClub->id,
            //     'date' => '2023-11-26 00:00:00',
            //     'description' => 'Round 9',
            //     'is_current' => true,
            // ],
            // [
            //     'name' => 'Round 10',
            //     'ball_club_id' => $ballClub->id,
            //     'date' => '2023-12-03 00:00:00',
            //     'description' => 'Round 10',
            // ],
            // [
            //     'name' => 'Round 11',
            //     'ball_club_id' => $ballClub->id,
            //     'date' => '2023-12-10 00:00:00',
            //     'description' => 'Round 11',
            // ]
        ];

        foreach ($rounds as $round) {
            \App\Models\Round::create($round);
        }
    }
}
