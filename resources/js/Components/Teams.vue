//
<script setup>
// import { ref, onMounted, watch, computed } from "vue";
// import { Inertia } from "@inertiajs/inertia";
// import axios from "axios";

// const props = defineProps({
//     ball_club_id: {
//         type: [Number, null],
//     },
// });

// let teams = ref(null);

// const fetchTeams = async () => {
//     if (props.ball_club_id) {
//         const response = await axios.get(
//             `/api/ball-club/${props.ball_club_id}/teams`
//         );
//         console.log("fetchTeams", response.data);
//         teams.value = response.data;
//     }
// };

// onMounted(() => {
//     fetchTeams();
// });

// // watch(() => props.round_match_id, fetchPlayer);
//
</script>
//
<template>
    //
    <select>
        //
        <option v-for="team in teams" :key="team.id" :value="team.id">
            // {{ team.name }} //
        </option>
        //
    </select>
    //
</template>
