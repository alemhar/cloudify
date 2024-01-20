<script setup>
import { ref, onMounted, watch } from "vue";
import { Inertia } from "@inertiajs/inertia";
import axios from "axios";
import Modal from "@/Components/Modal.vue";
import Swal from "sweetalert2";

const props = defineProps({
    round_id: {
        type: [Number, null],
        required: true,
    },
});

let roundMatches = ref(null);
let modalTeamMatch = ref(null);
// let modalRoundMatch = ref(null);
let teamPlayers = ref(null);
let playerOfTheGame = ref({
    user_id: null,
    total_points: null,
    rebounds: null,
    assists: null,
    blocks: null,
    steals: null,
    photo: null,
});
let roundMatchId = ref(null);
let selectedFile = ref(null);
let round = ref(null);
let showModalRound = ref(false);

const onFileChange = (e) => {
    if (e.target.files[0].size <= 4194304) {
        selectedFile.value = e.target.files[0];
    } else {
        e.target.value = null; // Clear the input file
        Swal.fire({
            title: "File Size Limit",
            text: "File size should not exceed 4MB.",
            icon: "error",
            confirmButtonColor: "#3085d6",
        });
    }
};

const upload = async () => {
    let formData = new FormData();
    formData.append("file", selectedFile.value);
    formData.append("user_id", playerOfTheGame.value.user_id);

    try {
        const response = await axios.post("/api/upload/potg", formData, {
            headers: {
                "Content-Type": "multipart/form-data",
                Authorization: `Bearer ${localStorage.getItem("access_token")}`,
            },
        });
        if (response && response.data && response.data.filename) {
            playerOfTheGame.value.photo = response.data.filename;
        }
    } catch (err) {
        console.error(err);
    }
};

const fetchRoundMatches = async () => {
    if (props.round_id) {
        const response = await axios.get(
            `/api/round-match/${props.round_id}/teams`
        );
        roundMatches.value = response.data;
    }
};

const fetchRound = async () => {
    if (props.round_id) {
        const response = await axios.get(`/api/round/${props.round_id}`);
        round.value = response.data;
    }
};

const fetchTeamPlayers = async (team_id) => {
    const response = await axios.get(`/api/teams/${team_id}/players`);
    return response.data;
};

const updateTeamMatch = (teamMatch) => {
    modalTeamMatch.value = teamMatch;
    showModal.value = true;
};

const addPlayerOfTheGame = async (teamMatch) => {
    playerOfTheGame.value = {
        user_id: null,
        total_points: null,
        rebounds: null,
        assists: null,
        blocks: null,
        steals: null,
        photo: null,
    };

    const winner = await teamMatch.filter((team) => team.winner === 1);

    if (winner.length === 0) {
        Swal.fire({
            title: "Required",
            text: "Please select a winner first.",
            icon: "warning",
            confirmButtonColor: "#3085d6",
        });

        return;
    }

    roundMatchId.value = winner[0].round_match_id;

    teamPlayers.value = await fetchTeamPlayers(winner[0].team_id);

    showModalPlayer.value = true;
};

const showModal = ref(false);
const showModalPlayer = ref(false);

const updateTeamScore = async (score, team_id) => {
    modalTeamMatch.value = await modalTeamMatch.value.map((team) => {
        if (team.team.id === team_id) {
            team.final_score = score;
        }
        return team;
    });
};

const updateTeamWinner = async (winner, team_id) => {
    modalTeamMatch.value = await modalTeamMatch.value.map((team) => {
        if (team.team.id === team_id) {
            team.winner = true;
        } else {
            team.winner = false;
        }
        return team;
    });
};

const setPlayerOfTheGame = (key, value) => {
    playerOfTheGame.value[key] = value;
};

const saveTeamMatch = async () => {
    const response = await axios.put(
        `/api/round-match-team`,
        modalTeamMatch.value,
        {
            headers: {
                Authorization: `Bearer ${localStorage.getItem("access_token")}`,
            },
        }
    );
    fetchRoundMatches();
    showModal.value = false;
};

const savePlayerOfTheGame = async () => {
    if (playerOfTheGame.value.user_id === null) {
        Swal.fire({
            title: "Required",
            text: "Please select a player first.",
            icon: "warning",
            confirmButtonColor: "#3085d6",
        });
        return;
    }
    if (selectedFile.value) {
        try {
            Swal.fire({
                title: "Uploading...",
                allowOutsideClick: false,
                showConfirmButton: false,
            });
            Swal.showLoading();
            await upload();
            Swal.close();
        } catch (err) {
            Swal.close();
            Swal.fire({
                title: "And error occured",
                text: "Please contact you service provider.",
                icon: "error",
                confirmButtonColor: "#3085d6",
            });
            return;
        }
    }

    const response = await axios.post(
        `/api/round-match/${roundMatchId.value}/player`,
        playerOfTheGame.value,
        {
            headers: {
                Authorization: `Bearer ${localStorage.getItem("access_token")}`,
            },
        }
    );

    fetchRoundMatches();
    playerOfTheGame.value = {
        user_id: null,
        total_points: null,
        rebounds: null,
        assists: null,
        blocks: null,
        steals: null,
        photo: null,
    };
    selectedFile.value = null;
    roundMatchId.value = null;
    showModalPlayer.value = false;
};

function setRound(round_id) {
    console.log("token", localStorage.getItem("access_token"));
    axios.put(
        `/api/round/${round_id}/current`,
        {},
        {
            headers: {
                Authorization: `Bearer ${localStorage.getItem("access_token")}`,
            },
        }
    );
    fetchRound();
}

function updateRound() {
    showModalRound.value = true;
}

function saveRound() {
    axios.put(
        `/api/round/${round.value.id}`,
        {
            date: round.value.date,
        },
        {
            headers: {
                Authorization: `Bearer ${localStorage.getItem("access_token")}`,
            },
        }
    );
    showModalRound.value = false;
}

function resetRound() {
    showModalRound.value = false;
    fetchRound();
}

onMounted(fetchRoundMatches, fetchRound);

watch(
    () => props.round_id,
    () => {
        fetchRoundMatches();
        fetchRound();
    }
);
</script>
<template>
    <div>
        <div>
            <div id="round-matches">
                <h2 class="text-xl font-bold mt-5 text-center">
                    Round Matches
                </h2>
                <h3
                    v-if="round"
                    class="w-full text-md font-semibold text-gray-900 dark:text-white text-center"
                >
                    {{ round.name }} / {{ round.date }}
                </h3>
            </div>
            <div id="round-matches-actions" class="flex justify-center">
                <button
                    v-if="round"
                    class="text-white font-bold py-2 px-4 rounded m-2"
                    :class="
                        !round.is_current
                            ? 'bg-blue-500 hover:bg-blue-700'
                            : 'bg-gray-300'
                    "
                    @click="setRound(round.id)"
                    :disabled="round.is_current"
                >
                    Set as Current
                </button>
                <button
                    v-if="round"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-2"
                    @click="updateRound()"
                >
                    Update
                </button>
            </div>
        </div>
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">Match</th>
                    <th class="px-4 py-2">Time Slot</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody v-if="roundMatches">
                <tr v-for="(round, index) in roundMatches" :key="index">
                    <td
                        v-if="round.team_matches.length === 0"
                        class="border px-4 py-2 text-center"
                        colspan="3"
                    >
                        -
                    </td>
                    <td class="border px-4 py-2 text-center" v-else>
                        {{ round.team_matches[0].team.name }}

                        <span class="font-bold">
                            {{ round.team_matches[0].final_score }}
                        </span>
                        {{
                            round.team_matches[0].winner === 1
                                ? "(W)"
                                : round.team_matches[0].winner === 0
                                ? "(L)"
                                : ""
                        }}
                        vs
                        {{ round.team_matches[1].team.name }}
                        <span class="font-bold">
                            {{ round.team_matches[1].final_score }}
                        </span>
                        {{
                            round.team_matches[1].winner === 1
                                ? "(W)"
                                : round.team_matches[1].winner === 0
                                ? "(L)"
                                : ""
                        }}
                    </td>
                    <td class="border px-4 py-2 text-center">
                        {{ round.time_slot_start }} -
                        {{ round.time_slot_end }}
                    </td>
                    <td class="border px-4 py-2 text-center">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                            @click="updateTeamMatch(round.team_matches)"
                        >
                            Update
                        </button>
                    </td>
                </tr>
            </tbody>
            <tbody v-else>
                <tr>
                    <td class="border px-4 py-2 text-center" colspan="3">
                        No data found.
                    </td>
                </tr>
            </tbody>
        </table>

        <h2 class="text-xl font-bold mt-5 text-center">Player of the Game</h2>
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">Match</th>
                    <th class="px-4 py-2">Player</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody v-if="roundMatches">
                <tr v-for="(round, index) in roundMatches" :key="index">
                    <template v-if="round.team_matches.length === 0">
                        <td class="border px-4 py-2 text-center" colspan="3">
                            -
                        </td>
                    </template>
                    <template v-else>
                        <td class="border px-4 py-2 text-center">
                            {{ round.team_matches[0].team.name }}

                            <span class="font-bold">
                                {{ round.team_matches[0].final_score }}
                            </span>
                            {{
                                round.team_matches[0].winner === 1
                                    ? "(W)"
                                    : round.team_matches[0].winner === 0
                                    ? "(L)"
                                    : ""
                            }}
                            vs
                            {{ round.team_matches[1].team.name }}
                            <span class="font-bold">
                                {{ round.team_matches[1].final_score }}
                            </span>
                            {{
                                round.team_matches[1].winner === 1
                                    ? "(W)"
                                    : round.team_matches[1].winner === 0
                                    ? "(L)"
                                    : ""
                            }}
                        </td>
                    </template>
                    <template v-if="round.team_matches.length === 0">
                        <td class="border px-4 py-2 text-center" colspan="3">
                            -
                        </td>
                    </template>
                    <template v-else>
                        <td class="border px-4 py-2 text-center">
                            <span
                                v-if="
                                    round.player_of_the_game &&
                                    round.player_of_the_game.player &&
                                    round.player_of_the_game.player.name
                                "
                            >
                                {{ round.player_of_the_game.player.name }}
                            </span>
                            <span v-else>-</span>
                        </td>
                    </template>
                    <td class="border px-4 py-2 text-center">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                            @click="addPlayerOfTheGame(round.team_matches)"
                        >
                            Add
                        </button>
                    </td>
                </tr>
            </tbody>
            <tbody v-else>
                <tr>
                    <td class="border px-4 py-2 text-center" colspan="3">
                        No data found.
                    </td>
                </tr>
            </tbody>
        </table>

        <Modal :show="showModal">
            <div>
                <h1>Update</h1>

                <table
                    class="table-auto w-full"
                    v-if="modalTeamMatch && modalTeamMatch.length > 0"
                >
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Team</th>
                            <th class="px-4 py-2">Score</th>
                            <th class="px-4 py-2">Winner</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            v-for="(modalTeam, index_tm) in modalTeamMatch"
                            :key="index_tm"
                        >
                            <!-- <td>{{ team }}</td> -->
                            <td class="border px-4 py-2 text-center">
                                {{ modalTeam.team.name }}
                            </td>
                            <td class="border px-4 py-2 text-center">
                                <input
                                    style="width: 100px"
                                    type="number"
                                    v-model="modalTeam.final_score"
                                    class="text-center rounded"
                                    @change="
                                        updateTeamScore(
                                            $event.target.value,
                                            modalTeam.team.id
                                        )
                                    "
                                />
                            </td>
                            <td class="border px-4 py-2 text-center">
                                <input
                                    type="radio"
                                    v-model="modalTeam.winner"
                                    :value="true"
                                    @change="
                                        updateTeamWinner(
                                            $event.target.value,
                                            modalTeam.team.id
                                        )
                                    "
                                />
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="flex justify-end">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 m-2 px-4 rounded"
                        @click="saveTeamMatch"
                    >
                        Save
                    </button>
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 m-2 px-4 rounded"
                        @click="showModal = false"
                    >
                        Close
                    </button>
                </div>
            </div>
        </Modal>

        <Modal :show="showModalPlayer">
            <div
                class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col"
            >
                <div class="mb-4">
                    <h1 class="block text-grey-darker text-sm font-bold mb-2">
                        Player of the game
                    </h1>
                </div>
                <div class="mb-4">
                    <div class="mb-6">
                        <label
                            class="block text-grey-darker text-sm font-bold mb-2"
                            for="player"
                            >Player</label
                        >
                        <select
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                            id="player"
                            @change="
                                setPlayerOfTheGame(
                                    'user_id',
                                    $event.target.value
                                )
                            "
                        >
                            <option value="">Please select a Player...</option>
                            <option
                                v-for="(player, index) in teamPlayers"
                                :key="index"
                                :value="player.id"
                            >
                                {{ player.name }} #{{ player.jersey_number }}
                            </option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <label
                            class="block text-grey-darker text-sm font-bold mb-2"
                            for="score"
                            >Score</label
                        >
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                            type="number"
                            id="score"
                            @change="
                                setPlayerOfTheGame(
                                    'total_points',
                                    $event.target.value
                                )
                            "
                        />
                    </div>
                    <div class="mb-6">
                        <label
                            class="block text-grey-darker text-sm font-bold mb-2"
                            for="rebound"
                            >Rebound</label
                        >
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                            type="number"
                            id="rebound"
                            @change="
                                setPlayerOfTheGame(
                                    'rebounds',
                                    $event.target.value
                                )
                            "
                        />
                    </div>
                    <div class="mb-6">
                        <label
                            class="block text-grey-darker text-sm font-bold mb-2"
                            for="assist"
                            >Assist</label
                        >
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                            type="number"
                            id="assist"
                            @change="
                                setPlayerOfTheGame(
                                    'assists',
                                    $event.target.value
                                )
                            "
                        />
                    </div>
                    <div class="mb-6">
                        <label
                            class="block text-grey-darker text-sm font-bold mb-2"
                            for="block"
                            >Block</label
                        >
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                            type="number"
                            id="block"
                            @change="
                                setPlayerOfTheGame(
                                    'blocks',
                                    $event.target.value
                                )
                            "
                        />
                    </div>
                    <div class="mb-6">
                        <label
                            class="block text-grey-darker text-sm font-bold mb-2"
                            for="steal"
                            >Steal</label
                        >
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                            type="number"
                            id="steal"
                            @change="
                                setPlayerOfTheGame(
                                    'steals',
                                    $event.target.value
                                )
                            "
                        />
                    </div>
                    <div>
                        <input
                            type="file"
                            @change="onFileChange"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                        />
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                        @click="savePlayerOfTheGame"
                    >
                        Ok
                    </button>
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                        @click="showModalPlayer = false"
                    >
                        Cancel
                    </button>
                </div>
            </div>
        </Modal>

        <Modal :show="showModalRound">
            <div
                class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col"
            >
                <div class="mb-4">
                    <div class="mb-6">
                        <label
                            class="block text-grey-darker text-sm font-bold mb-2"
                            for="score"
                            >Date</label
                        >
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                            type="date"
                            id="score"
                            v-model="round.date"
                        />
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                        @click="saveRound"
                    >
                        Ok
                    </button>
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                        @click="resetRound"
                    >
                        Cancel
                    </button>
                </div>
            </div>
        </Modal>
    </div>
</template>
