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
                    <th class="px-4 py-2">Team 1</th>
                    <th class="px-4 py-2">Team 2</th>
                    <th class="px-4 py-2">Time Slot</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(round, index) in roundMatches" :key="index">
                    <td
                        class="border px-4 py-2 text-center text-sm"
                        v-for="(team_match, index_tm) in round.team_matches"
                        :key="index_tm"
                    >
                        {{ team_match.team.name }}
                    </td>
                    <td class="border px-4 py-2 text-center text-sm">
                        {{ round.time_slot_start }} -
                        {{ round.time_slot_end }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
