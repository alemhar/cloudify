<script setup>
import { ref, onMounted, watch, computed } from "vue";
import { Inertia } from "@inertiajs/inertia";
import axios from "axios";

const props = defineProps({
    ball_club_id: {
        type: [Number, null],
    },
});

let players = ref(null);
let teams = ref(null);
let currentTeamId = ref(null);

const setCurrentTeam = (teamId) => {
    currentTeamId.value = teamId;
};

const fetchPlayers = async () => {
    if (currentTeamId.value) {
        const response = await axios.get(
            `/api/teams/${currentTeamId.value}/players`
        );
        players.value = response.data;
    } else {
        const response = await axios.get(
            `/api/players?ball_club_id=${props.ball_club_id}`
        );
        players.value = response.data;
    }
};

const fetchTeams = async () => {
    if (props.ball_club_id) {
        const response = await axios.get(
            `/api/ball-club/${props.ball_club_id}/teams`
        );
        teams.value = response.data;
    }
};

onMounted(() => {
    fetchTeams();
    fetchPlayers();
});

watch(currentTeamId, fetchPlayers);
</script>
<template>
    <h1 class="text-xl font-bold mb-4">Teams</h1>
    <select
        @change="setCurrentTeam($event.target.value)"
        class="form-select block w-full mt-1 rounded-md mb-5"
    >
        <option value="">Select Team</option>
        <option v-for="team in teams" :key="team.id" :value="team.id">
            {{ team.name }}
        </option>
    </select>
    <h1 class="text-xl font-bold mb-4">Players</h1>
    <table class="table-auto border-collapse w-full">
        <thead>
            <tr class="rounded-lg text-sm font-medium text-gray-700 text-left">
                <th class="px-4 py-2 bg-gray-200">Name</th>
                <th class="px-4 py-2 bg-gray-200">Nickname</th>
                <th class="px-4 py-2 bg-gray-200">Number</th>
                <th class="px-4 py-2 bg-gray-200">Team</th>
            </tr>
        </thead>
        <tbody class="text-sm font-normal text-gray-700">
            <tr
                v-for="(player, index) in players"
                :key="player.id"
                class="hover:bg-gray-100 py-4 px-6"
            >
                <td
                    class="py-4 text-center"
                    :class="{ 'bg-gray-100': index % 2 === 0 }"
                >
                    {{ player.name }}
                </td>
                <td
                    class="py-4 text-center"
                    :class="{ 'bg-gray-100': index % 2 === 0 }"
                >
                    {{ player.nickname }}
                </td>
                <td
                    class="py-4 text-center"
                    :class="{ 'bg-gray-100': index % 2 === 0 }"
                >
                    {{ player.jersey_number }}
                </td>
                <td
                    class="py-4 text-center"
                    :class="{ 'bg-gray-100': index % 2 === 0 }"
                >
                    {{ player.team.name }}
                </td>
            </tr>
        </tbody>
    </table>
</template>
