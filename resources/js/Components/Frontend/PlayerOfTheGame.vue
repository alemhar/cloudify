<script setup>
import { ref, onMounted, watch, computed } from "vue";
import { Inertia } from "@inertiajs/inertia";
import axios from "axios";
import Swal from "sweetalert2";

const props = defineProps({
    round_match_id: {
        type: [Number, null],
        required: true,
    },
    ball_club_alias: {
        string: [String, null],
        required: true,
    },
});

let game = ref(null);

const fetchPlayer = async () => {
    if (props.round_match_id) {
        const response = await axios.get(
            `/api/round-match/${props.round_match_id}/player`
        );
        game.value = response.data;
    }
};

const copyToClipboard = (url) => {
    navigator.clipboard.writeText(url);

    Swal.fire({
        icon: "success",
        title: "Link copied to clipboard",
        showConfirmButton: false,
        timer: 1500,
    });
};

onMounted(() => {
    fetchPlayer();
});

watch(() => props.round_match_id, fetchPlayer);
</script>
<template>
    <div class="">
        <slot v-if="game && game.player_of_the_game"></slot>
        <div v-if="game && game.player_of_the_game">
            <h3 class="text-xl font-bold text-center mb-6">
                {{ game.match[0].team.name }}
                ({{ game.match[0].final_score }}) vs
                {{ game.match[1].team.name }}
                ({{ game.match[1].final_score }})
            </h3>
            <div class="flex items-center">
                <div
                    class="flex flex-col md:flex-row items-center mx-auto mb-4"
                >
                    <div class="flex-shrink-0 mx-auto">
                        <img
                            class="object-cover w-48 h-48"
                            :src="
                                game.player_of_the_game.photo
                                    ? `/storage/images/${game.player_of_the_game.player.ball_club_id}/${game.player_of_the_game.photo}`
                                    : '/images/' +
                                      [
                                          'potg1.png',
                                          'potg2.png',
                                          'potg3.png',
                                          'potg4.png',
                                          'potg5.png',
                                          'potg6.png',
                                          'potg7.png',
                                          'potg8.png',
                                      ][Math.floor(Math.random() * 8)]
                            "
                            alt=""
                            style="object-position: top"
                        />
                    </div>
                    <div class="flex flex-col items-center md:items-start">
                        <ul>
                            <li
                                class="fond-bold text-2xl text-center"
                                style="font-family: 'Impact'"
                            >
                                {{
                                    game.player_of_the_game.player.name.toUpperCase()
                                }}
                                #{{
                                    game.player_of_the_game.player.jersey_number
                                }}
                            </li>
                            <!-- <li class="text-xl text-center">
                                {{ game.player_of_the_game.player.team.name }}
                            </li> -->

                            <li
                                class="text-center"
                                v-if="game.player_of_the_game.total_points"
                            >
                                POINTS:
                                <b>{{
                                    game.player_of_the_game.total_points
                                }}</b>
                            </li>
                            <li
                                class="text-center"
                                v-if="game.player_of_the_game.rebounds"
                            >
                                REBOUNDS: {{ game.player_of_the_game.rebounds }}
                            </li>
                            <li
                                class="text-center"
                                v-if="game.player_of_the_game.assists"
                            >
                                ASSIST:
                                {{ game.player_of_the_game.assists }}
                            </li>
                            <li
                                class="text-center"
                                v-if="game.player_of_the_game.steals"
                            >
                                STEALS:
                                {{ game.player_of_the_game.steals }}
                            </li>
                            <li
                                class="text-center"
                                v-if="game.player_of_the_game.blocks"
                            >
                                BLOCKS:
                                {{ game.player_of_the_game.blocks }}
                            </li>
                            <li class="text-center mt-2">
                                <button
                                    @click="
                                        copyToClipboard(
                                            `https://surebol.com/ball-club/${ball_club_alias}/potg?uuid=${game.player_of_the_game.uuid}`
                                        )
                                    "
                                    style="
                                        color: gray;
                                        text-decoration: underline;
                                        background: none;
                                        border: none;
                                        cursor: pointer;
                                        font-style: italic;
                                    "
                                >
                                    Copy Link to Share
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
