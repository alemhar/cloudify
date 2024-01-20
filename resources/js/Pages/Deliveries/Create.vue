<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import { Inertia } from "@inertiajs/inertia";
import { reactive, ref, onMounted } from "vue";
import { toast } from "vue3-toastify";
import "vue3-toastify/dist/index.css";
import TeamMatchesTable from "@/Components/TeamMatchesTable.vue";
import Players from "@/Components/Players.vue";

const props = defineProps({
    ballClub: Object,
    rounds: Array,
    flash: Object,
    round_matches: Array,
    access_token: String,
});

const currentRound = ref(null);

const message = ref(props.flash.message);

const activeTab = ref("Teams");

const notify = (message) => {
    toast(message, {
        position: "top-right",
        duration: 5000,
        closeOnClick: true,
        pauseOnHover: true,
        pauseOnFocusLoss: true,
        transition: "bounce",
        type: "success",
    });
};

const setRoundId = (roundId) => {
    if (roundId === null) {
        return;
    } else if (roundId === currentRound.value) {
        return;
    }

    currentRound.value = parseInt(roundId);
};

const updateTeam = (newRank, teamId, field) => {
    let data = {};
    data[field] = newRank;
    Inertia.put(`/teams/${teamId}`, data);
};

onMounted(() => {
    if (props.flash && props.flash.message) {
        notify(props.flash.message);
    }
    if (props.access_token) {
        localStorage.setItem("access_token", props.access_token);
    }
});

const appName = import.meta.env.VITE_APP_NAME;
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-center">
                <h1
                    class="text-2xl font-semibold text-gray-900 dark:text-white"
                >
                    New Delivery
                </h1>
            </div>
        </template>

        <!-- scale-100  
        dark:bg-gray-800/50 
        dark:bg-gradient-to-bl 
        from-gray-700/50 via-transparent 
        dark:ring-1 
        dark:ring-inset
        dark:ring-white/5 
        rounded-lg 
        shadow-2xl 
        shadow-gray-500/20 
        dark:shadow-none
        motion-safe:hover:scale-[1.01]
        transition-all duration-250
        focus:outline focus:outline-2 focus:outline-red-500
        -->
        <div class="m-6 p-6 border-2 bg-white rounded-lg">
            <div class="flex">
                <form class="w-full">
                    <!-- <div class="mb-4">
                        <label
                            for="customer-number"
                            class="block text-gray-700 text-sm font-bold mb-2"
                            >Customer #:</label
                        >
                        <input
                            type="text"
                            id="customer-number"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        />
                    </div> -->
                    <div class="mb-4">
                        <label
                            for="company-name"
                            class="block text-gray-700 text-sm font-bold mb-2"
                            >Company Name:</label
                        >
                        <div class="relative flex items-center justify-end">
                            <input
                                type="text"
                                id="company-name"
                                class="shadow appearance-none border rounded w-full py-2 px-3 pr-8 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            />
                            <i
                                class="pi pi-search absolute pr-2 text-gray-400"
                                style="font-size: 1.2rem"
                            ></i>
                        </div>
                    </div>
                    <!-- <div class="mb-4">
                        <label
                            for="address"
                            class="block text-gray-700 text-sm font-bold mb-2"
                            >Address:</label
                        >
                        <input
                            type="text"
                            id="address"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        />
                    </div> -->
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
