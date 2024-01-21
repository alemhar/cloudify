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

const emit = defineEmits(["itemSelected"]);

const itemInitial = {
    name: "",
    description: "",
    model: "",
    sku: "",
    thumbnail: "",
    price: "",
};

const items = reactive([]);
const item = reactive(itemInitial);

const getItems = async () => {
    const response = await axios.get(`/api/items`, {
        headers: {
            Authorization: `Bearer ${localStorage.getItem("access_token")}`,
        },
    });
    Object.assign(items, response.data);
};

const currentRound = ref(null);

const showModal = ref(false);

const saveCompany = () => {
    if (!item.name) {
        notify("Please enter company name!", "error");
        return;
    }

    Inertia.post("/items", item);
    item = itemInitial;
    showModal.value = false;
};

// const message = ref(props.flash.message);

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

onMounted(async () => {
    // console.log(props.selectMode);
    // if (props.access_token) {
    //     localStorage.setItem("access_token", props.access_token);
    // }
    if (props.flash && props.flash.message) {
        notify(props.flash.message);
    }
    await getItems();
});

const selectItem = (item) => {
    if (props.selectMode) {
        emit("itemSelected", item);
    } else {
        Inertia.visit(`/items/${item.id}`);
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
                        <div class="relative flex items-center justify-end">
                            <input
                                type="text"
                                id="item-name"
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
                                <div class="text-blue-500">Add new item</div>
                            </button>
                        </td>
                    </tr>
                    <tr class="">
                        <br />
                    </tr>
                    <tr v-for="item in items" :key="item.id" class="">
                        <td class="px-4 py-2">{{ item.id }}</td>

                        <td class="px-4 py-2" @click="selectItem(item)">
                            <div>{{ item.name }}</div>
                            <div class="text-sm text-gray-500 italic">
                                {{ item.description }}
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
                            Add new item
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
                                    >Item Name:</label
                                >
                                <input
                                    type="text"
                                    id="company-name"
                                    v-model="item.name"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                />
                            </div>
                            <div class="mb-4">
                                <label
                                    for="address"
                                    class="block text-gray-700 text-sm font-bold mb-2"
                                    >Description:</label
                                >
                                <input
                                    type="text"
                                    v-model="item.description"
                                    id="address"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                />
                            </div>
                            <div class="mb-4">
                                <label
                                    for="address"
                                    class="block text-gray-700 text-sm font-bold mb-2"
                                    >Model #:</label
                                >
                                <input
                                    type="text"
                                    v-model="item.model"
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
                                @click="saveItem"
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
