<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $round = \App\Models\Round::where('name', 'Round 8')->firstOrFail();
        // $matches = [
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '07:30:00',
        //         'time_slot_end' => '09:00:00',
        //         'description' => 'First match',
        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '09:00:00',
        //         'time_slot_end' => '10:30:00',
        //         'description' => 'Second match',
        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '10:30:00',
        //         'time_slot_end' => '12:00:00',
        //         'description' => 'Third match',

        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '12:00:00',
        //         'time_slot_end' => '13:30:00',
        //         'description' => 'Fourth match',
        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '13:30:00',
        //         'time_slot_end' => '15:00:00',
        //         'description' => 'Fifth match',
        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '15:00:00',
        //         'time_slot_end' => '16:30:00',
        //         'description' => 'Sixth match',
        //     ]
        // ];
        
        // foreach ($matches as $match) {
        //     \App\Models\RoundMatch::create($match);
        // }

        // $round = \App\Models\Round::where('name', 'Round 9')->firstOrFail();
        // $matches = [
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '07:30:00',
        //         'time_slot_end' => '09:00:00',
        //         'description' => 'First match',
        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '09:00:00',
        //         'time_slot_end' => '10:30:00',
        //         'description' => 'Second match',
        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '10:30:00',
        //         'time_slot_end' => '12:00:00',
        //         'description' => 'Third match',

        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '12:00:00',
        //         'time_slot_end' => '13:30:00',
        //         'description' => 'Fourth match',
        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '13:30:00',
        //         'time_slot_end' => '15:00:00',
        //         'description' => 'Fifth match',
        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '15:00:00',
        //         'time_slot_end' => '16:30:00',
        //         'description' => 'Sixth match',
        //     ]
        // ];
        
        // foreach ($matches as $match) {
        //     \App\Models\RoundMatch::create($match);
        // }


        $round = \App\Models\Round::where('name', 'Round 1')->firstOrFail();
        $matches = [
            [
                'round_id' => $round->id,
                'time_slot_start' => '07:30:00',
                'time_slot_end' => '09:00:00',
                'description' => 'First match',
            ],
            [
                'round_id' => $round->id,
                'time_slot_start' => '09:00:00',
                'time_slot_end' => '10:30:00',
                'description' => 'Second match',
            ],
            [
                'round_id' => $round->id,
                'time_slot_start' => '10:30:00',
                'time_slot_end' => '12:00:00',
                'description' => 'Third match',

            ],
            [
                'round_id' => $round->id,
                'time_slot_start' => '12:00:00',
                'time_slot_end' => '13:30:00',
                'description' => 'Fourth match',
            ],
            [
                'round_id' => $round->id,
                'time_slot_start' => '13:30:00',
                'time_slot_end' => '15:00:00',
                'description' => 'Fifth match',
            ],
            [
                'round_id' => $round->id,
                'time_slot_start' => '15:00:00',
                'time_slot_end' => '16:30:00',
                'description' => 'Sixth match',
            ]
        ];
        
        foreach ($matches as $match) {
            \App\Models\RoundMatch::create($match);
        }

        $round = \App\Models\Round::where('name', 'Round 2')->firstOrFail();
        $matches = [
            [
                'round_id' => $round->id,
                'time_slot_start' => '07:30:00',
                'time_slot_end' => '09:00:00',
                'description' => 'First match',
            ],
            [
                'round_id' => $round->id,
                'time_slot_start' => '09:00:00',
                'time_slot_end' => '10:30:00',
                'description' => 'Second match',
            ],
            [
                'round_id' => $round->id,
                'time_slot_start' => '10:30:00',
                'time_slot_end' => '12:00:00',
                'description' => 'Third match',

            ],
            [
                'round_id' => $round->id,
                'time_slot_start' => '12:00:00',
                'time_slot_end' => '13:30:00',
                'description' => 'Fourth match',
            ],
            [
                'round_id' => $round->id,
                'time_slot_start' => '13:30:00',
                'time_slot_end' => '15:00:00',
                'description' => 'Fifth match',
            ],
            [
                'round_id' => $round->id,
                'time_slot_start' => '15:00:00',
                'time_slot_end' => '16:30:00',
                'description' => 'Sixth match',
            ]
        ];
        
        foreach ($matches as $match) {
            \App\Models\RoundMatch::create($match);
        }

        // $round = \App\Models\Round::where('name', 'Round 3')->firstOrFail();
        // $matches = [
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '07:30:00',
        //         'time_slot_end' => '09:00:00',
        //         'description' => 'First match',
        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '09:00:00',
        //         'time_slot_end' => '10:30:00',
        //         'description' => 'Second match',
        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '10:30:00',
        //         'time_slot_end' => '12:00:00',
        //         'description' => 'Third match',

        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '12:00:00',
        //         'time_slot_end' => '13:30:00',
        //         'description' => 'Fourth match',
        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '13:30:00',
        //         'time_slot_end' => '15:00:00',
        //         'description' => 'Fifth match',
        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '15:00:00',
        //         'time_slot_end' => '16:30:00',
        //         'description' => 'Sixth match',
        //     ]
        // ];
        
        // foreach ($matches as $match) {
        //     \App\Models\RoundMatch::create($match);
        // }
        
        // $round = \App\Models\Round::where('name', 'Round 4')->firstOrFail();
        // $matches = [
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '07:30:00',
        //         'time_slot_end' => '09:00:00',
        //         'description' => 'First match',
        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '09:00:00',
        //         'time_slot_end' => '10:30:00',
        //         'description' => 'Second match',
        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '10:30:00',
        //         'time_slot_end' => '12:00:00',
        //         'description' => 'Third match',

        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '12:00:00',
        //         'time_slot_end' => '13:30:00',
        //         'description' => 'Fourth match',
        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '13:30:00',
        //         'time_slot_end' => '15:00:00',
        //         'description' => 'Fifth match',
        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '15:00:00',
        //         'time_slot_end' => '16:30:00',
        //         'description' => 'Sixth match',
        //     ]
        // ];
        
        // foreach ($matches as $match) {
        //     \App\Models\RoundMatch::create($match);
        // }

        // $round = \App\Models\Round::where('name', 'Round 5')->firstOrFail();
        // $matches = [
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '07:30:00',
        //         'time_slot_end' => '09:00:00',
        //         'description' => 'First match',
        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '09:00:00',
        //         'time_slot_end' => '10:30:00',
        //         'description' => 'Second match',
        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '10:30:00',
        //         'time_slot_end' => '12:00:00',
        //         'description' => 'Third match',

        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '12:00:00',
        //         'time_slot_end' => '13:30:00',
        //         'description' => 'Fourth match',
        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '13:30:00',
        //         'time_slot_end' => '15:00:00',
        //         'description' => 'Fifth match',
        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '15:00:00',
        //         'time_slot_end' => '16:30:00',
        //         'description' => 'Sixth match',
        //     ]
        // ];
        
        // foreach ($matches as $match) {
        //     \App\Models\RoundMatch::create($match);
        // }

        // $round = \App\Models\Round::where('name', 'Round 6')->firstOrFail();
        // $matches = [
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '07:30:00',
        //         'time_slot_end' => '09:00:00',
        //         'description' => 'First match',
        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '09:00:00',
        //         'time_slot_end' => '10:30:00',
        //         'description' => 'Second match',
        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '10:30:00',
        //         'time_slot_end' => '12:00:00',
        //         'description' => 'Third match',

        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '12:00:00',
        //         'time_slot_end' => '13:30:00',
        //         'description' => 'Fourth match',
        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '13:30:00',
        //         'time_slot_end' => '15:00:00',
        //         'description' => 'Fifth match',
        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '15:00:00',
        //         'time_slot_end' => '16:30:00',
        //         'description' => 'Sixth match',
        //     ]
        // ];
        
        // foreach ($matches as $match) {
        //     \App\Models\RoundMatch::create($match);
        // }

        // $round = \App\Models\Round::where('name', 'Round 7')->firstOrFail();
        // $matches = [
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '07:30:00',
        //         'time_slot_end' => '09:00:00',
        //         'description' => 'First match',
        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '09:00:00',
        //         'time_slot_end' => '10:30:00',
        //         'description' => 'Second match',
        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '10:30:00',
        //         'time_slot_end' => '12:00:00',
        //         'description' => 'Third match',

        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '12:00:00',
        //         'time_slot_end' => '13:30:00',
        //         'description' => 'Fourth match',
        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '13:30:00',
        //         'time_slot_end' => '15:00:00',
        //         'description' => 'Fifth match',
        //     ],
        //     [
        //         'round_id' => $round->id,
        //         'time_slot_start' => '15:00:00',
        //         'time_slot_end' => '16:30:00',
        //         'description' => 'Sixth match',
        //     ]
        // ];
        
        // foreach ($matches as $match) {
        //     \App\Models\RoundMatch::create($match);
        // }


        $round = \App\Models\Round::where('name', 'Round 10')->firstOrFail();
        $matches = [
            [
                'round_id' => $round->id,
                'time_slot_start' => '07:30:00',
                'time_slot_end' => '09:00:00',
                'description' => 'First match',
            ],
            [
                'round_id' => $round->id,
                'time_slot_start' => '09:00:00',
                'time_slot_end' => '10:30:00',
                'description' => 'Second match',
            ],
            [
                'round_id' => $round->id,
                'time_slot_start' => '10:30:00',
                'time_slot_end' => '12:00:00',
                'description' => 'Third match',

            ],
            [
                'round_id' => $round->id,
                'time_slot_start' => '12:00:00',
                'time_slot_end' => '13:30:00',
                'description' => 'Fourth match',
            ],
            [
                'round_id' => $round->id,
                'time_slot_start' => '13:30:00',
                'time_slot_end' => '15:00:00',
                'description' => 'Fifth match',
            ],
            [
                'round_id' => $round->id,
                'time_slot_start' => '15:00:00',
                'time_slot_end' => '16:30:00',
                'description' => 'Sixth match',
            ]
        ];
        
        foreach ($matches as $match) {
            \App\Models\RoundMatch::create($match);
        }

        $round = \App\Models\Round::where('name', 'Round 11')->firstOrFail();
        $matches = [
            [
                'round_id' => $round->id,
                'time_slot_start' => '07:30:00',
                'time_slot_end' => '09:00:00',
                'description' => 'First match',
            ],
            [
                'round_id' => $round->id,
                'time_slot_start' => '09:00:00',
                'time_slot_end' => '10:30:00',
                'description' => 'Second match',
            ],
            [
                'round_id' => $round->id,
                'time_slot_start' => '10:30:00',
                'time_slot_end' => '12:00:00',
                'description' => 'Third match',

            ],
            [
                'round_id' => $round->id,
                'time_slot_start' => '12:00:00',
                'time_slot_end' => '13:30:00',
                'description' => 'Fourth match',
            ],
            [
                'round_id' => $round->id,
                'time_slot_start' => '13:30:00',
                'time_slot_end' => '15:00:00',
                'description' => 'Fifth match',
            ],
            [
                'round_id' => $round->id,
                'time_slot_start' => '15:00:00',
                'time_slot_end' => '16:30:00',
                'description' => 'Sixth match',
            ]
        ];
        
        foreach ($matches as $match) {
            \App\Models\RoundMatch::create($match);
        }
    }
}
