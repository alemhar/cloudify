@extends('layouts')
@section('content')
        <div style="background: linear-gradient(-60deg, yellow, red)" class="flex flex-col items-center h-screen pt-10">
                <div class="flex justify-center mb-10  mt-10">
                    
                    <a href="http://surebol.com">
                        <img
                            src="{{ '/images/' . $game['ball_club']['logo'] }}"
                            alt="{{ $game['ball_club']['name'] }}"
                            style="
                                height: 160px;
                                border-radius: 50%;
                                border: 1px solid gray;
                            "
                        />
                    </a>

                </div>
            
                    <h3 class="font-bold text-center mb-2" style="font-size: xx-large;">
                        PLAYER OF THE GAME
                    </h3>
                    <div class="mx-auto">
                        <img
                            class="object-cover"
                            src="{{ $game['player_of_the_game']['photo'] ? "/storage/images/{$game['player_of_the_game']['player']['ball_club_id']}/{$game['player_of_the_game']['photo']}" : '/images/potg' . rand(1, 8) . '.png' }}"
                            alt=""
                            style="object-position: top"
                        />
                    </div>
                    <div class="mx-auto mt-5 mb-10">
                            <h3 class="text-5xl font-bold text-center">
                                {{ strtoupper($game['player_of_the_game']['player']['name']) }}
                                #{{ $game['player_of_the_game']['player']['jersey_number'] }}
                            </h3>
                        <ul class="mt-2 text-3xl">
                            
                            <li class="font-bold text-center">
                                {{ $game['match'][0]['team']['name'] }}
                                ({{ $game['match'][0]['final_score'] }}) vs
                                {{ $game['match'][1]['team']['name'] }}
                                ({{ $game['match'][1]['final_score'] }})
                            </li>
                            @if($game['player_of_the_game']['total_points'])
                                <li class="text-center">
                                    POINTS: <b>{{ $game['player_of_the_game']['total_points'] }}</b>
                                </li>
                            @endif
                            @if($game['player_of_the_game']['rebounds'])
                                <li class="text-center">
                                    REBOUNDS: <b>{{ $game['player_of_the_game']['rebounds'] }}</b>
                                </li>
                            @endif
                            @if($game['player_of_the_game']['assists'])
                                <li class="text-center">
                                    ASSIST: <b>{{ $game['player_of_the_game']['assists'] }}</b>
                                </li>
                            @endif
                            @if($game['player_of_the_game']['steals'])
                                <li class="text-center">
                                    STEALS: <b>{{ $game['player_of_the_game']['steals'] }}</b>
                                </li>
                            @endif
                            @if($game['player_of_the_game']['blocks'])
                                <li class="text-center">
                                    BLOCKS: <b>{{ $game['player_of_the_game']['blocks'] }}</b>
                                </li>
                            @endif
                        </ul>

                    </div>

                    <div
                    class="w-full text-center content-center text-sm text-gray-500 dark:text-gray-400 sm:text-end sm:ms-0"
                    >
                        <ul class="text-center text-3xl mb-5">
                            <li>
                                <a
                                    href="#"
                                    class="hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                                >
                                    Ateneo Daddy's Cup 2023
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                                >
                                    ThinkerHut &copy; 2023
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
@endsection