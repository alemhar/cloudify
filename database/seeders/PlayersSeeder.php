<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ballClub = \App\Models\BallClub::find(1);
        // $team_brown = \App\Models\Team::where('name', 'Brown Team')->firstOrFail();        
        // $team_brown_players = [
        //     [
        //         'name' => 'Benjie Cavita',
        //         'nickname' => 'Ben',
        //         'jersey_number' => '33',
        //     ],
        //     [
        //         'name' => 'Pascual Jason Monfort',
        //         'nickname' => 'PJ',
        //         'jersey_number' => '14',
        //     ],
        //     [
        //         'name' => 'Edwin Suelan',
        //         'nickname' => 'Bong',
        //         'jersey_number' => '26',
        //     ],
        //     [
        //         'name' => 'Alemhar Salihuddin',
        //         'nickname' => 'Zorro',
        //         'jersey_number' => '23',
        //     ],
        //     [
        //         'name' => 'Alfonso Dela Victoria',
        //         'nickname' => 'Al',
        //         'jersey_number' => '19',
        //     ],
        //     [
        //         'name' => 'Ronnie Margas',
        //         'nickname' => 'Ezekelle',
        //         'jersey_number' => '10',
        //     ],
        //     [
        //         'name' => 'Dondon De Guzman',
        //         'nickname' => 'Dondon',
        //         'jersey_number' => '7',
        //     ],
        //     [
        //         'name' => 'Julius Alderite',
        //         'nickname' => 'Julz',
        //         'jersey_number' => '8',
        //     ],
        //     [
        //         'name' => 'Jude Enriquez',
        //         'nickname' => 'Jude',
        //         'jersey_number' => '77',
        //     ],
        //     [
        //         'name' => 'Anthony Delos Santos',
        //         'nickname' => 'Anton',
        //         'jersey_number' => '24',
        //     ],
        //     [
        //         'name' => 'Alvin Sañano',
        //         'nickname' => 'Vin',
        //         'jersey_number' => '99',
        //     ],
        //     [
        //         'name' => 'Francis De Vera',
        //         'nickname' => 'Francis',
        //         'jersey_number' => '22',
        //     ],
        //     [
        //         'name' => 'Rainero Gomez',
        //         'nickname' => 'Rene',
        //         'jersey_number' => '55',
        //     ]
        // ];

        // foreach ($team_brown_players as $player) {
        //     $team_brown->players()->create([
        //         'name' => $player['name'],
        //         'jersey_number' => $player['jersey_number'],
        //         'nickname' => $player['nickname'],
        //         'password' => bcrypt('ateneo!123'),
        //         'role' => 'player',
        //         'ball_club_id' => $ballClub->id,
        //         'email' => strtolower(explode(' ', $player['name'])[0]).$player['jersey_number'].'.'. 'brown' . '@adc.com',
        //     ]);
        // }   

        
        // $team_pink = \App\Models\Team::where('name', 'Pink Team')->firstOrFail();

        // $team_pink_players = [
        //     [
        //         'name' => 'Roger D. Gultiano',
        //         'nickname' => 'Tito Goltz',
        //         'jersey_number' => '15',
        //     ],
        //     [
        //         'name' => 'Christian R. Sequiña',
        //         'nickname' => 'Christian',
        //         'jersey_number' => '21',
        //     ],
        //     [
        //         'name' => 'Boyet Katigbak',
        //         'nickname' => 'Boyet',
        //         'jersey_number' => '7',
        //     ],
        //     [
        //         'name' => 'Alexander Honrade',
        //         'nickname' => 'Alex',
        //         'jersey_number' => '23',
        //     ],
        //     [
        //         'name' => 'Ariel Silva',
        //         'nickname' => 'Aye',
        //         'jersey_number' => '29',
        //     ],
        //     [
        //         'name' => 'Chris Labor',
        //         'nickname' => 'Cris',
        //         'jersey_number' => '19',
        //     ],
        //     [
        //         'name' => 'Raymund Pascual',
        //         'nickname' => 'RokkoRokko',
        //         'jersey_number' => '24',
        //     ],
        //     [
        //         'name' => 'Jecle M. Rosales',
        //         'nickname' => 'Jecle',
        //         'jersey_number' => '12',
        //     ],
        //     [
        //         'name' => 'Vanz Geraldo',
        //         'nickname' => 'Vanz',
        //         'jersey_number' => '4',
        //     ],
        //     [
        //         'name' => 'Marvin V. Rico',
        //         'nickname' => 'Marvin',
        //         'jersey_number' => '78',
        //     ],
        //     [
        //         'name' => 'James Michael Jatico',
        //         'nickname' => 'James',
        //         'jersey_number' => '13',
        //     ],
        //     [
        //         'name' => 'Eric John Cortez',
        //         'nickname' => 'Eric',
        //         'jersey_number' => '2',
        //     ],
        //     [
        //         'name' => 'Walter Bero',
        //         'nickname' => 'Walter',
        //         'jersey_number' => '17',
        //     ],
        // ];

        // foreach ($team_pink_players as $player) {
        //     $team_pink->players()->create([
        //         'name' => $player['name'],
        //         'jersey_number' => $player['jersey_number'],
        //         'nickname' => $player['nickname'],
        //         'password' => bcrypt('ateneo!123'),
        //         'role' => 'player',
        //         'ball_club_id' => $ballClub->id,
        //         'email' => strtolower(explode(' ', $player['name'])[0]).$player['jersey_number'].'.'. 'pink' . '@adc.com',
        //     ]);
        // }
        

        // $team_yellow = \App\Models\Team::where('name', 'Yellow Team')->firstOrFail();
        // $team_yellow_players = [
        //     [
        //         'name' => 'Rodel Castro',
        //         'nickname' => 'Rodel',
        //         'jersey_number' => '9',
        //     ],
        //     [
        //         'name' => 'Prudente Jr. Valverde',
        //         'nickname' => 'Cocoy',
        //         'jersey_number' => '17',
        //     ],
        //     [
        //         'name' => 'Englo Namuag',
        //         'nickname' => 'Engz',
        //         'jersey_number' => '24',
        //     ],
        //     [
        //         'name' => 'Ernesto Jr Macasaet',
        //         'nickname' => 'Jhong',
        //         'jersey_number' => '30',
        //     ],
        //     [
        //         'name' => 'Dennis Aquino',
        //         'nickname' => 'Dencio',
        //         'jersey_number' => '6',
        //     ],
        //     [
        //         'name' => 'Roy Estrella',
        //         'nickname' => 'Roy',
        //         'jersey_number' => '24',
        //     ],
        //     [
        //         'name' => 'Ronald Dela Peña',
        //         'nickname' => 'Ronald D',
        //         'jersey_number' => '8',
        //     ],
        //     [
        //         'name' => 'Joel Padillo',
        //         'nickname' => 'Jong',
        //         'jersey_number' => '86',
        //     ],
        //     [
        //         'name' => 'Allan Olbez',
        //         'nickname' => 'Allan',
        //         'jersey_number' => '13',
        //     ],
        //     [
        //         'name' => 'Eric Malinao',
        //         'nickname' => 'EJM',
        //         'jersey_number' => '12',
        //     ],
        //     [
        //         'name' => 'Christian Sia',
        //         'nickname' => 'Ian',
        //         'jersey_number' => '17',
        //     ],
        //     [
        //         'name' => 'Gabriel Guino-o',
        //         'nickname' => 'Yoyong',
        //         'jersey_number' => '27',
        //     ],
        //     [
        //         'name' => 'Kim Villarmea',
        //         'nickname' => 'Kim',
        //         'jersey_number' => '22',
        //     ],
        // ];

        // foreach ($team_yellow_players as $player) {
        //     $team_yellow->players()->create([
        //         'name' => $player['name'],
        //         'jersey_number' => $player['jersey_number'],
        //         'nickname' => $player['nickname'],
        //         'password' => bcrypt('ateneo!123'),
        //         'role' => 'player',
        //         'ball_club_id' => $ballClub->id,
        //         'email' => strtolower(explode(' ', $player['name'])[0]).$player['jersey_number'].'.'. 'yellow' . '@adc.com',
        //     ]);
        // }

        // $team_dark_blue = \App\Models\Team::where('name', 'Dark Blue Team')->firstOrFail();
        // $team_dark_blue_players = [
        //     [
        //         'name' => 'Jeffrey Mamburam',
        //         'nickname' => 'Jepoy',
        //         'jersey_number' => '52',
        //     ],
        //     [
        //         'name' => 'Daryl Dacumos',
        //         'nickname' => 'Daryl',
        //         'jersey_number' => '18',
        //     ],
        //     [
        //         'name' => 'AL-Raiz D. Ututalum',
        //         'nickname' => 'AL',
        //         'jersey_number' => '15',
        //     ],
        //     [
        //         'name' => 'Winnie Jamelano',
        //         'nickname' => 'Winnie',
        //         'jersey_number' => '24',
        //     ],
        //     [
        //         'name' => 'Ian Arabejo',
        //         'nickname' => 'Ian',
        //         'jersey_number' => '21',
        //     ],
        //     [
        //         'name' => 'Hans Grayson Amable',
        //         'nickname' => 'Hans',
        //         'jersey_number' => '3',
        //     ],
        //     [
        //         'name' => 'Francis Brion',
        //         'nickname' => 'Isko',
        //         'jersey_number' => '9',
        //     ],
        //     [
        //         'name' => 'Ramon Paolo Escalona',
        //         'nickname' => 'Paolo',
        //         'jersey_number' => '1',
        //     ],
        //     [
        //         'name' => 'Roy Buenacosa',
        //         'nickname' => 'Roy',
        //         'jersey_number' => '2',
        //     ],
        //     [
        //         'name' => 'Millae Daham',
        //         'nickname' => 'Millae',
        //         'jersey_number' => '6',
        //     ],
        //     [
        //         'name' => 'Rhod Castillo',
        //         'nickname' => 'Rhod',
        //         'jersey_number' => '4',
        //     ],
        //     [
        //         'name' => 'Leonard Bryan Cua',
        //         'nickname' => 'Bryan',
        //         'jersey_number' => '12',
        //     ],
        //     [
        //         'name' => 'John Joseph Calitas',
        //         'nickname' => 'Yong',
        //         'jersey_number' => '17',
        //     ],
        // ];

        // foreach ($team_dark_blue_players as $player) {
        //     $team_dark_blue->players()->create([
        //         'name' => $player['name'],
        //         'jersey_number' => $player['jersey_number'],
        //         'nickname' => $player['nickname'],
        //         'password' => bcrypt('ateneo!123'),
        //         'role' => 'player',
        //         'ball_club_id' => $ballClub->id,
        //         'email' => strtolower(explode(' ', $player['name'])[0]).$player['jersey_number'].'.'. 'darkblue' . '@adc.com',
        //     ]);
        // }

        
        $team_orange = \App\Models\Team::where('name', 'Orange Team')->firstOrFail();
        $team_orange_players = [
            [
                'name' => 'John Mondale Marquez',
                'nickname' => 'JM',
                'jersey_number' => '31'
            ],
            [
                'name' => 'Rhasmil Tagadaya',
                'nickname' => 'Bong',
                'jersey_number' => '75'
            ],
            [
                'name' => 'Rey jay Dorado',
                'nickname' => 'Jay',
                'jersey_number' => '21'
            ],
            [
                'name' => 'Alfredo Jr. Rivera',
                'nickname' => 'Jay R',
                'jersey_number' => '10'
            ],
            [
                'name' => 'Paolo Loreto',
                'nickname' => 'Pao',
                'jersey_number' => '0'
            ],
            [
                'name' => 'Julius Robert Maglanoc',
                'nickname' => 'Julius',
                'jersey_number' => '07'
            ],
            [
                'name' => 'Arnel Labucay',
                'nickname' => 'Arnel',
                'jersey_number' => '15'
            ],
            [
                'name' => 'Norman Palo',
                'nickname' => 'Man',
                'jersey_number' => '28'
            ],
            [
                'name' => 'Karlo Dacanay',
                'nickname' => 'Dacs',
                'jersey_number' => '15'
            ],
            [
                'name' => 'Joel Bustamante',
                'nickname' => 'Joel',
                'jersey_number' => '9'
            ],
            [
                'name' => 'Brian Birrey',
                'nickname' => 'Lucas',
                'jersey_number' => '16'
            ],
            [
                'name' => 'Arman Añana',
                'nickname' => 'Rman',
                'jersey_number' => '8'
            ]
        
            // [
            //     'name' => 'Kenny Guibay',
            //     'nickname' => 'Kenny',
            //     'jersey_number' => '18'
            // ]
        ];

        foreach ($team_orange_players as $player) {
            $team_orange->players()->create([
                'name' => $player['name'],
                'jersey_number' => $player['jersey_number'],
                'nickname' => $player['nickname'],
                'password' => bcrypt('ateneo!123'),
                'role' => 'player',
                'ball_club_id' => $ballClub->id,
                'email' => strtolower(explode(' ', $player['name'])[0]).$player['jersey_number'].'.'. 'orange' . '@adc.com',
            ]);
        }


        // $team_light_blue = \App\Models\Team::where('name', 'Light Blue Team')->firstOrFail();
        // $team_light_blue_players = [
        //     [
        //         'name' => 'Mago',
        //         'nickname' => 'Mago',
        //         'jersey_number' => '26'
        //     ]
        // ];

        // foreach ($team_light_blue_players as $player) {
        //     $team_light_blue->players()->create([
        //         'name' => $player['name'],
        //         'jersey_number' => $player['jersey_number'],
        //         'nickname' => $player['nickname'],
        //         'password' => bcrypt('ateneo!123'),
        //         'role' => 'player',
        //         'ball_club_id' => $ballClub->id,
        //         'email' => strtolower(explode(' ', $player['name'])[0]).$player['jersey_number'].'.'. 'lightblue' . '@adc.com',
        //     ]);
        // }


        // $team_green = \App\Models\Team::where('name', 'Green Team')->firstOrFail();
        // $team_green_players = [
        //     [
        //         'name' => 'Christopher Abella',
        //         'nickname' => 'Bongbong',
        //         'jersey_number' => '2'
        //     ],
        //     [
        //         'name' => 'Lelito C. Consuegra Jr.',
        //         'nickname' => 'Jingkoy',
        //         'jersey_number' => '19'
        //     ],
        //     [
        //         'name' => 'Eduardo Labial',
        //         'nickname' => 'koi',
        //         'jersey_number' => '13'
        //     ],
        //     [
        //         'name' => 'Ryan Pichon',
        //         'nickname' => 'Ryan',
        //         'jersey_number' => '18'
        //     ],
        //     [
        //         'name' => 'Gener Rubio',
        //         'nickname' => 'net',
        //         'jersey_number' => '8'
        //     ],
        //     [
        //         'name' => 'Palma Emmanuel',
        //         'nickname' => 'Pogi',
        //         'jersey_number' => '15'
        //     ],
        //     [
        //         'name' => 'Dennison Albert',
        //         'nickname' => 'Aldens',
        //         'jersey_number' => '14'
        //     ],
        //     [
        //         'name' => 'Manzano, Gio',
        //         'nickname' => 'Gì',
        //         'jersey_number' => '5'
        //     ],
        //     [
        //         'name' => 'Dela Cruz Jimmy',
        //         'nickname' => 'Jhimskie',
        //         'jersey_number' => '1'
        //     ],
        //     [
        //         'name' => 'Ruel Rubia',
        //         'nickname' => 'wel',
        //         'jersey_number' => '04'
        //     ],
        //     [
        //         'name' => 'Michael Daniel',
        //         'nickname' => 'Miko',
        //         'jersey_number' => '16'
        //     ],
        //     [
        //         'name' => 'Hedilizo Gamale',
        //         'nickname' => 'Junjun',
        //         'jersey_number' => '00'
        //     ],
        //     [
        //         'name' => 'Sendrijas Michael Laurence',
        //         'nickname' => 'lykmyk',
        //         'jersey_number' => '27'
        //     ]
        // ];

        // foreach ($team_green_players as $player) {
        //     $team_green->players()->create([
        //         'name' => $player['name'],
        //         'jersey_number' => $player['jersey_number'],
        //         'nickname' => $player['nickname'],
        //         'password' => bcrypt('ateneo!123'),
        //         'role' => 'player',
        //         'ball_club_id' => $ballClub->id,
        //         'email' => strtolower(explode(' ', $player['name'])[0]).$player['jersey_number'].'.'. 'green' . '@adc.com',
        //     ]);
        // }


        // $team_purple = \App\Models\Team::where('name', 'Purple Team')->firstOrFail();
        // $team_purple_players = [
        //     [
        //         'name' => 'Arman Acosta',
        //         'nickname' => 'Arman',
        //         'jersey_number' => '14'
        //     ],
        //     [
        //         'name' => 'Idok Villaver',
        //         'nickname' => 'Idok',
        //         'jersey_number' => '7'
        //     ]
        // ];

        // foreach ($team_purple_players as $player) {
        //     $team_purple->players()->create([
        //         'name' => $player['name'],
        //         'jersey_number' => $player['jersey_number'],
        //         'nickname' => $player['nickname'],
        //         'password' => bcrypt('ateneo!123'),
        //         'role' => 'player',
        //         'ball_club_id' => $ballClub->id,
        //         'email' => strtolower(explode(' ', $player['name'])[0]).$player['jersey_number'].'.'. 'purple' . '@adc.com',
        //     ]);
        // }

        // $team_white = \App\Models\Team::where('name', 'White Team')->firstOrFail();
        // $team_white_players = [
        //     [
        //         'name' => 'Mark Moises',
        //         'nickname' => 'Coy',
        //         'jersey_number' => '99'
        //     ],
        //     [
        //         'name' => 'Irvin Gales',
        //         'nickname' => 'Biboy',
        //         'jersey_number' => '32'
        //     ],
        //     [
        //         'name' => 'Mark Malibiran',
        //         'nickname' => 'Mark',
        //         'jersey_number' => '3'
        //     ],
        //     [
        //         'name' => 'Paul John Concepcion',
        //         'nickname' => 'Paul',
        //         'jersey_number' => '24'
        //     ],
        //     [
        //         'name' => 'Aaron Bernas',
        //         'nickname' => 'Aron',
        //         'jersey_number' => '13'
        //     ],
        //     [
        //         'name' => 'Louel Zambrano',
        //         'nickname' => 'Wewe',
        //         'jersey_number' => '1'
        //     ],
        //     [
        //         'name' => 'Micaelo Cortezano',
        //         'nickname' => 'Micoy',
        //         'jersey_number' => '29'
        //     ],
        //     [
        //         'name' => 'Noel Telewik',
        //         'nickname' => 'Noel',
        //         'jersey_number' => '26'
        //     ],
        //     [
        //         'name' => 'Mike Ravelo',
        //         'nickname' => 'Mike',
        //         'jersey_number' => '5'
        //     ],
        //     [
        //         'name' => 'Nelson Zata',
        //         'nickname' => 'Tong It\'s',
        //         'jersey_number' => '6'
        //     ],
        //     [
        //         'name' => 'Gerard Arañes',
        //         'nickname' => 'Gee',
        //         'jersey_number' => '16'
        //     ],
        //     [
        //         'name' => 'Roel B Araña',
        //         'nickname' => 'Wing',
        //         'jersey_number' => '88'
        //     ],
        //     [
        //         'name' => 'Roliie Abajero',
        //         'nickname' => 'RoAb',
        //         'jersey_number' => '20'
        //     ],
        // ];

        // foreach ($team_white_players as $player) {
        //     $team_white->players()->create([
        //         'name' => $player['name'],
        //         'jersey_number' => $player['jersey_number'],
        //         'nickname' => $player['nickname'],
        //         'password' => bcrypt('ateneo!123'),
        //         'role' => 'player',
        //         'ball_club_id' => $ballClub->id,
        //         'email' => strtolower(explode(' ', $player['name'])[0]).$player['jersey_number'].'.'. 'white' . '@adc.com',
        //     ]);
        // }




        // $team_red = \App\Models\Team::where('name', 'Red Team')->firstOrFail();
        // $team_red_players = [
        //     [
        //         'name' => 'Charlito Joy Alcoberes',
        //         'nickname' => 'Alcoy',
        //         'jersey_number' => '16'
        //     ],
        //     [
        //         'name' => 'Franklin A. Navaja',
        //         'nickname' => 'Francoi',
        //         'jersey_number' => '27'
        //     ],
        //     [
        //         'name' => 'Dan Michael Cruz',
        //         'nickname' => 'Dan',
        //         'jersey_number' => '21'
        //     ],
        //     [
        //         'name' => 'Roger P. Sarcena',
        //         'nickname' => 'Rian',
        //         'jersey_number' => '78'
        //     ],
        //     [
        //         'name' => 'Constantino V. Ilog III',
        //         'nickname' => 'Tanti',
        //         'jersey_number' => '11'
        //     ],
        //     [
        //         'name' => 'Christian Philip F. Betinol',
        //         'nickname' => 'Christian',
        //         'jersey_number' => '7'
        //     ],
        //     [
        //         'name' => 'Ariel C Necesito',
        //         'nickname' => 'Nice',
        //         'jersey_number' => '28'
        //     ],
        //     [
        //         'name' => 'Benjamin B Rosalita',
        //         'nickname' => 'Benjie',
        //         'jersey_number' => '47'
        //     ],
        //     [
        //         'name' => 'Rodelo T. Corpuz',
        //         'nickname' => 'Boyax',
        //         'jersey_number' => '13'
        //     ],
        //     [
        //         'name' => 'Salvador Z.Uy III',
        //         'nickname' => 'Guapo',
        //         'jersey_number' => '34'
        //     ],
        //     [
        //         'name' => 'Firpo Eman',
        //         'nickname' => 'Man',
        //         'jersey_number' => '11'
        //     ],
        //     [
        //         'name' => 'Michael Niedo',
        //         'nickname' => 'Mike',
        //         'jersey_number' => '31'
        //     ]
        // ];

        // foreach ($team_red_players as $player) {
        //     $team_red->players()->create([
        //         'name' => $player['name'],
        //         'jersey_number' => $player['jersey_number'],
        //         'nickname' => $player['nickname'],
        //         'password' => bcrypt('ateneo!123'),
        //         'role' => 'player',
        //         'ball_club_id' => $ballClub->id,
        //         'email' => strtolower(explode(' ', $player['name'])[0]).$player['jersey_number'].'.'. 'red' . '@adc.com',
        //     ]);
        // }

        // $team_gray = \App\Models\Team::where('name', 'Gray Team')->firstOrFail();
        // $team_black = \App\Models\Team::where('name', 'Black Team')->firstOrFail();

    }
}
