<script setup>
import { ref, onMounted, watch, computed } from "vue";
import { Inertia } from "@inertiajs/inertia";
import axios from "axios";

const props = defineProps({
    ball_club_id: {
        type: [Number, null],
        required: true,
    },
});

let teams = ref(null);

const fetchTeams = async () => {
    if (props.ball_club_id) {
        const response = await axios.get(
            `/api/ball-club/${props.ball_club_id}/teams/players`
        );
        teams.value = response.data;
    }
};

let container = ref(null);
let scrollAmount = 0;

let scroll = (direction) => {
    const slideTimer = setInterval(() => {
        container.value.scrollLeft += direction * 200;
        scrollAmount += 200;
        if (scrollAmount >= 400) {
            window.clearInterval(slideTimer);
        }
    }, 25);
};

onMounted(() => {
    container.value = document.getElementById("teamCarousel");
    fetchTeams();
});

// watch(() => props.round_match_id, fetchPlayer);
</script>
<template>
    <div>
        <button
            @click="scroll(-1)"
            class="absolute top-0 left-0 mt-5 ml-2 z-10 bg-white p-2 rounded-full shadow-md lg:hidden"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                class="h-6 w-6"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M15 19l-7-7 7-7"
                ></path>
            </svg>
        </button>
        <div
            id="teamCarousel"
            class="relative flex overflow-x-auto scrollbar-show scrollbar-thick scrollbar-thumb-blue-500 scrollbar-track-blue-100"
            style="scroll-behavior: smooth; overflow-x: scroll !important"
        >
            <div class="flex space-x-4">
                <div
                    v-for="team in teams"
                    :key="team.id"
                    class="flex-none w-64 p-4 bg-white rounded-md shadow-md"
                    id="team1"
                >
                    <h1 class="text-xl font-bold mb-4">{{ team.name }}</h1>
                    <div>
                        <p v-for="player in team.players" :key="player.id">
                            {{ player.name }}
                            <span
                                style="
                                    font-weight: bold;
                                    color: lightgray;
                                    font-size: 1.1em;
                                "
                                >#{{ player.jersey_number }}</span
                            >
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <button
            @click="scroll(1)"
            class="absolute top-0 right-0 mt-5 mr-2 z-10 bg-white p-2 rounded-full shadow-md lg:hidden"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                class="h-6 w-6"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 5l7 7-7 7"
                ></path>
            </svg>
        </button>
    </div>
</template>
