<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
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
            <h2 class="font-bold text-xl leading-tight justify-center flex">
                <span class="text-gray-400 mr-1">CLOUD</span>
                <span class="text-gray-600 mr-1">BASE</span>
                <span class="text-blue-400">BOOK</span>
            </h2>
        </template>
        <!-- <div class="flex justify-center mb-10">
            <h1
                class="text-2xl font-semibold text-gray-900 dark:text-white mt-5"
            >
                Quick Links
            </h1>
        </div> -->
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
            <div class="flex justify-between">
                <span>
                    <h2 class="text-xl font-semibold">
                        <span class="text-black"> In Transit </span>
                        <span
                            class="ml-3 bg-blue-500 text-white rounded-full px-2 py-1"
                        >
                            ₱ 21,000.00
                        </span>
                    </h2>
                </span>

                <span>
                    <i class="pi pi-angle-right" style="font-size: 2rem"></i>
                </span>
            </div>
        </div>

        <div class="m-6 p-6 border-2 bg-blue-200 rounded-lg">
            <div class="flex justify-between">
                <span>
                    <h2 class="text-xl font-semibold">
                        <span class="text-black"> Delivered </span>
                        <span
                            class="ml-3 bg-blue-500 text-white rounded-full px-2 py-1"
                        >
                            ₱ 3,125,000.00
                        </span>
                    </h2>
                </span>

                <span>
                    <i class="pi pi-angle-right" style="font-size: 2rem"></i>
                </span>
            </div>
        </div>

        <div class="m-6 p-6 bg-green-200 rounded-lg">
            <div class="flex justify-between">
                <span>
                    <h2 class="text-xl font-semibold">
                        <span class="text-black"> New </span>
                    </h2>
                </span>

                <span>
                    <Link :href="route('new')">
                        <i
                            class="pi pi-angle-right"
                            style="font-size: 2rem"
                        ></i>
                    </Link>
                </span>
            </div>
        </div>
        <!-- <div class="py-12"> -->
        <!-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> -->
        <!-- <div
                    class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"
                > -->

        <!-- </div> -->
        <!-- <div
                    class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"
                >
                    <div
                        class="p-6 text-gray-900 dark:text-gray-100 text-center"
                    >
                        &copy; {{ new Date().getFullYear() }}
                        {{ appName }}
                    </div>
                </div> -->
        <!-- </div> -->
        <!-- </div> -->
    </AuthenticatedLayout>
</template>
