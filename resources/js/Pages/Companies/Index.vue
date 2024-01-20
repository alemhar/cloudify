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

const testButton = (value = "test") => {
    console.log("test button: " + value);
};

const appName = import.meta.env.VITE_APP_NAME;
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-bold text-xl leading-tight justify-center flex">
                <div class="flex justify-center">
                    <h1
                        class="text-2xl font-semibold text-gray-900 dark:text-white"
                    >
                        Companies/Partners
                    </h1>
                </div>
            </h2>
        </template>

        <div class="m-6 p-6 border-2 bg-white rounded-lg">
            <div class="flex">
                <form class="w-full">
                    <div class="mb-4">
                        <!-- <label
                            for="company-name"
                            class="block text-gray-700 text-sm font-bold mb-2"
                            >Company Name:</label
                        > -->
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
                </form>
            </div>

            <table
                class="table-auto w-full"
                style="height: 400px; overflow-y: scroll"
            >
                <!-- <thead>
                    <tr class="border">
                        <th class="px-4 py-2">#</th>
                        <th class="border px-4 py-2">Name</th>0
                        
                    </tr>
                </thead> -->
                <tbody
                    class=""
                    style="display: block; height: 60vh; overflow: auto"
                >
                    <tr class="">
                        <td class="px-4 py-2 flex justify-end">
                            <button @click="testButton('create')">
                                <i
                                    class="pi pi-plus text-blue-500 text-sm pt-1"
                                ></i>
                            </button>
                        </td>
                        <td class="px-4 py-2">
                            <button @click="testButton('create')">
                                <div class="text-blue-500">
                                    Create new company
                                </div>
                            </button>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="px-4 py-2">12345</td>

                        <td class="px-4 py-2">
                            <div>Company A B C D</div>
                            <div class="text-sm text-gray-500 italic">
                                Address A
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="px-4 py-2">22345</td>
                        <td class="px-4 py-2">
                            <div>Company B</div>
                            <div class="text-sm text-gray-500 italic">
                                Address B
                            </div>
                        </td>
                        <!-- <td class="px-4 py-2 flex justify-center items-center">
                            <button
                                @click="testButton('select')"
                                class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded inline-flex items-center mr-3"
                            >
                                <i class="pi pi-check"></i>
                            </button>
                            <button
                                @click="testButton('view')"
                                class="bg-gray-300 hover:bg-gray-500 font-bold py-2 px-4 rounded inline-flex items-center mr-3"
                            >
                                <i class="pi pi-eye"></i>
                            </button>
                        </td> -->
                    </tr>
                    <tr class="">
                        <td class="px-4 py-2">32345</td>
                        <td class="px-4 py-2">
                            <div>Company C</div>
                            <div class="text-sm text-gray-500 italic">
                                Address C
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="px-4 py-2">42345</td>
                        <td class="px-4 py-2">
                            <div>Company D</div>
                            <div class="text-sm text-gray-500 italic">
                                Address D
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="px-4 py-2">52345</td>
                        <td class="px-4 py-2">
                            <div>Company E</div>
                            <div class="text-sm text-gray-500 italic">
                                Address E
                            </div>
                        </td>
                    </tr>

                    <tr class="">
                        <td class="px-4 py-2">52345</td>
                        <td class="px-4 py-2">
                            <div>Company E</div>
                            <div class="text-sm text-gray-500 italic">
                                Address E
                            </div>
                        </td>
                    </tr>

                    <tr class="">
                        <td class="px-4 py-2">52345</td>
                        <td class="px-4 py-2">
                            <div>Company E</div>
                            <div class="text-sm text-gray-500 italic">
                                Address E
                            </div>
                        </td>
                    </tr>

                    <tr class="">
                        <td class="px-4 py-2">52345</td>
                        <td class="px-4 py-2">
                            <div>Company E</div>
                            <div class="text-sm text-gray-500 italic">
                                Address E
                            </div>
                        </td>
                    </tr>

                    <tr class="">
                        <td class="px-4 py-2">52345</td>
                        <td class="px-4 py-2">
                            <div>Company E</div>
                            <div class="text-sm text-gray-500 italic">
                                Address E
                            </div>
                        </td>
                    </tr>

                    <tr class="">
                        <td class="px-4 py-2">52345</td>
                        <td class="px-4 py-2">
                            <div>Company E</div>
                            <div class="text-sm text-gray-500 italic">
                                Address E
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </AuthenticatedLayout>
</template>
