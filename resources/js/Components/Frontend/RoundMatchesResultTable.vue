<script setup>
import { ref, onMounted, watch, computed } from "vue";
import { Inertia } from "@inertiajs/inertia";
import axios from "axios";

const props = defineProps({
    round_id: {
        type: [Number, null],
        required: true,
    },
});

let roundMatches = ref(null);

const fetchRoundMatches = async () => {
    if (props.round_id) {
        const response = await axios.get(
            `/api/round-match/${props.round_id}/teams`
        );
        console.log("fetchRoundMatches", response.data);
        roundMatches.value = response.data;
    }
};

onMounted(() => {
    fetchRoundMatches();
});

watch(() => props.round_id, fetchRoundMatches);
</script>
<template>
    <div>
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">Team</th>
                    <th class="px-4 py-2">Score</th>
                    <!-- <th class="px-4 py-2"></th> -->
                    <th class="px-4 py-2">Score</th>
                    <th class="px-4 py-2">Team</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(round, index) in roundMatches" :key="index">
                    <td class="border px-4 py-2 text-center text-sm">
                        {{ round.team_matches[0].team.name }}
                    </td>
                    <td
                        class="border px-4 py-2 text-center"
                        :class="
                            round.team_matches[0].winner
                                ? 'text-orange-400 font-bold'
                                : ''
                        "
                    >
                        {{ round.team_matches[0].final_score }}
                    </td>
                    <!-- <td class="border px-4 py-2 text-center">-</td> -->
                    <td
                        class="border px-4 py-2 text-center"
                        :class="
                            round.team_matches[1].winner
                                ? 'text-orange-400 font-bold'
                                : ''
                        "
                    >
                        {{ round.team_matches[1].final_score }}
                    </td>
                    <td class="border px-4 py-2 text-center text-sm">
                        {{ round.team_matches[1].team.name }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
