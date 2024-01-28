<script setup>
import Modal from "@/Components/Modal.vue";
import { defineProps, defineEmits } from "vue";
import { Head } from "@inertiajs/vue3";
import { Inertia } from "@inertiajs/inertia";
import { reactive, ref, onMounted } from "vue";
import { toast } from "vue3-toastify";
import "vue3-toastify/dist/index.css";

const props = defineProps({
    selectMode: {
        type: Boolean,
        default: false,
    },
});

const emit = defineEmits(["companySelected"]);

const companyInitial = {
    name: "",
    address1: "",
    address2: "",
    city: "",
    contact_name: "",
    contact_phone: "",
};

const companies = reactive([]);
const company = reactive(companyInitial);

const getCompany = async () => {
    const response = await axios.get(`/api/companies`, {
        headers: {
            Authorization: `Bearer ${localStorage.getItem("access_token")}`,
        },
    });
    Object.assign(companies, response.data);
};

const currentRound = ref(null);

const showModal = ref(false);

const saveCompany = () => {
    if (!company.name) {
        notify("Please enter company name!", "error");
        return;
    }

    Inertia.post("/companies", company);
    Object.assign(company, companyInitial);
    showModal.value = false;
};

// const message = ref(props.flash.message);

const activeTab = ref("Teams");

const notify = (message, type = "success") => {
    toast(message, {
        position: "top-center",
        duration: 3000,
        closeOnClick: true,
        pauseOnHover: true,
        pauseOnFocusLoss: true,
        transition: "bounce",
        type: type,
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

onMounted(async () => {
    // console.log(props.selectMode);
    // if (props.access_token) {
    //     localStorage.setItem("access_token", props.access_token);
    // }
    if (props.flash && props.flash.message) {
        notify(props.flash.message);
    }
    await getCompany();
});

const testButton = (value = "test") => {
    console.log("test button: " + value);
};

const selectCompany = (company) => {
    if (props.selectMode) {
        emit("companySelected", company);
    } else {
        Inertia.visit(`/companies/${company.id}`);
    }
};

const appName = import.meta.env.VITE_APP_NAME;
</script>

<template>
    <div>
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
                <tbody
                    class=""
                    style="display: block; height: 60vh; overflow: auto"
                >
                    <tr class="">
                        <td class="px-4 py-2 flex justify-end">
                            <button @click="showModal = true">
                                <i
                                    class="pi pi-plus text-blue-500 text-sm pt-1"
                                ></i>
                            </button>
                        </td>
                        <td class="px-4 py-2">
                            <button @click="showModal = true">
                                <div class="text-blue-500">
                                    Create new company
                                </div>
                            </button>
                        </td>
                    </tr>
                    <tr class="">
                        <br />
                    </tr>
                    <tr v-for="company in companies" :key="company.id" class="">
                        <td class="px-4 py-2">{{ company.id }}</td>

                        <td class="px-4 py-2" @click="selectCompany(company)">
                            <div>{{ company.name }}</div>
                            <div class="text-sm text-gray-500 italic">
                                {{ company.address1 }} {{ company.address2
                                }}<br />{{ company.city }}
                            </div>
                        </td>
                        <!-- <td class="px-4 py-2 flex justify-center items-center">
                            <button
                                @click="testButton('view')"
                                class="bg-gray-300 hover:bg-gray-500 font-bold py-2 px-4 rounded inline-flex items-center mr-3"
                            >
                                <i class="pi pi-pencil"></i>
                            </button>
                        </td> -->
                    </tr>
                </tbody>
            </table>

            <Modal :show="showModal" @close="showModal = false">
                <div class="bg-white shadow overflow-hidden sm:rounded-lg p-10">
                    <div class="flex justify-between">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Create new company
                        </h3>
                        <div class="ml-4">
                            <button
                                @click="showModal = false"
                                class="bg-gray-100 hover:bg-gray-200 text-gray-600 font-semibold py-2 px-4 rounded inline-flex items-center"
                            >
                                <i class="pi pi-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- <div class="mt-2">
                        <p class="text-sm text-gray-500">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Temporibus, quibusdam accusamus.
                        </p>
                    </div> -->
                    <div class="mt-4">
                        <form>
                            <div class="mb-4">
                                <label
                                    for="company-name"
                                    class="block text-gray-700 text-sm font-bold mb-2"
                                    >Company Name:</label
                                >
                                <input
                                    type="text"
                                    id="company-name"
                                    v-model="company.name"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                />
                            </div>
                            <div class="mb-4">
                                <label
                                    for="address"
                                    class="block text-gray-700 text-sm font-bold mb-2"
                                    >Address:</label
                                >
                                <input
                                    type="text"
                                    v-model="company.address1"
                                    id="address"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                />
                                <input
                                    type="text"
                                    v-model="company.address2"
                                    id="address"
                                    class="mt-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                />
                            </div>
                            <div class="mb-4">
                                <label
                                    for="address"
                                    class="block text-gray-700 text-sm font-bold mb-2"
                                    >City:</label
                                >
                                <input
                                    type="text"
                                    v-model="company.city"
                                    id="address"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                />
                            </div>
                            <div class="mb-4">
                                <label
                                    for="address"
                                    class="block text-gray-700 text-sm font-bold mb-2"
                                    >Contact Person:</label
                                >
                                <input
                                    type="text"
                                    v-model="company.contact_name"
                                    id="address"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                />
                            </div>
                            <div class="mb-4">
                                <label
                                    for="address"
                                    class="block text-gray-700 text-sm font-bold mb-2"
                                    >Contact Number:</label
                                >
                                <input
                                    type="text"
                                    v-model="company.contact_phone"
                                    id="address"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                />
                            </div>
                        </form>
                        <div class="flex justify-between mt-4">
                            <button
                                @click="showModal = false"
                                class="bg-gray-100 hover:bg-gray-200 text-gray-600 font-semibold py-2 px-4 rounded inline-flex items-center"
                            >
                                <i class="pi pi-times"></i>
                                <span>Cancel</span>
                            </button>
                            <button
                                @click="saveCompany"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                            >
                                <i class="pi pi-check"></i>
                                <span>Save</span>
                            </button>
                        </div>
                    </div>
                </div>
            </Modal>
        </div>
    </div>
</template>
