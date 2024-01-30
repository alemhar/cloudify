<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Modal from "@/Components/Modal.vue";
import CompanyList from "@/Components/CompanyList.vue";
import ItemList from "@/Components/Items/ItemList.vue";
import { Head } from "@inertiajs/vue3";
import { Inertia } from "@inertiajs/inertia";
import { reactive, ref, onMounted, computed } from "vue";
import { toast } from "vue3-toastify";
import "vue3-toastify/dist/index.css";


const props = defineProps({
    deliveries: Array,
    // flash: Object,
    // access_token: String,
});

// const showCompanyModal = ref(false);
// const showItemModal = ref(false);

// const selectedCompany = reactive({
//     id: null,
//     name: null,
// });

// const items = reactive([]);

// const message = ref(props.flash.message);

// const selectCompany = () => {
//     showCompanyModal.value = true;
// };

const notify = (message, type = 'success') => {
    toast(message, {
        position: "top-right",
        duration: 5000,
        closeOnClick: true,
        pauseOnHover: true,
        pauseOnFocusLoss: true,
        transition: "bounce",
        type: type,
    });
};




onMounted(() => {
    // if (props.flash && props.flash.message) {
    //     notify(props.flash.message);
    // }
    // if (props.access_token) {
    //     localStorage.setItem("access_token", props.access_token);
    // }
});

// const handleSelectCompany = (company) => {
//     selectedCompany.id = company.id;
//     selectedCompany.name = company.name;
//     showCompanyModal.value = false;
// };

// const handleSelectItem = (item) => {
//     items.push({...item, order_quantity: 1.00});
//     console.log(items);
//     showItemModal.value = false;
// };

const formatNumber = (number) => {
    return parseFloat(number).toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
};

const createDelivery = () => {
    Inertia.visit(`/deliveries/create`);
};

const grandTotal = computed(() => {
    return props.deliveries.reduce((acc, delivery) => acc + Number(delivery.grand_total), 0);
});

// const totalItems = computed(() => {
//     return items.reduce((acc, item) => acc + Number(item.order_quantity), 0);
// });

// const saveTransaction = () => {
//     if (!selectedCompany.id) {
//         notify("Please select company!", "error");
//         return;
//     }

//     if (items.length == 0) {
//         notify("Please add items!", "error");
//         return;
//     }

//     let data = {
//         recipient_id: selectedCompany.id,
//         grand_total: grandTotal.value,
//         total_items: totalItems.value,
//         discount: 0,
//         type: "delivery",
//         status: "shipped",
//         items: items,
//     };

//     Inertia.post("/deliveries", data);
// };

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
                    Deliveries
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
            <div class="">

                
                <!-- Deliveries Table  -->
                <table
                    class="table-auto w-full"
                    style="height: 300px; overflow-y: scroll"
                >
                    <tbody
                        class=""
                        style="display: block; overflow: auto"
                    >
                        <tr class="">
                            <td class="px-4 py-2 flex justify-end">
                                <button @click="showItemModal = true">
                                    <i
                                        class="pi pi-plus text-blue-500 text-sm pt-1"
                                    ></i>
                                </button>
                            </td>
                            <td class="px-4 py-2">
                                <button @click="createDelivery">
                                    <div class="text-blue-500">Create delivery</div>
                                </button>
                            </td>
                        </tr>
                        <tr class="">
                            <br />
                        </tr>
                        <tr v-for="delivery in deliveries" :key="delivery.id" class="">
                        <td class="px-4 py-2"  style="width: 20%;">{{ delivery.id }}</td>

                        <td class="px-4 py-2" style="width: 50%;">
                            <div>{{ delivery.recipient.name }}</div>
                            
                               <div class="  items-center justify-end">
                                           
                                        <div class="text-gray-400"
                                        >{{ delivery.status.toUpperCase() }}
                                        </div>
                                        <div class="text-gray-400"
                                        >{{ delivery.shipped_at }}
                                        </div>
                                        
                                        
                                </div>  

                        </td>
                        <td class="px-4 py-2" style="width: 50%;">
                            <div>{{ formatNumber(delivery.grand_total) }}</div>
                        </td>
                        <!-- <td class="px-4 py-2"  style="width: 30%;">
                            <div>
                                            <input
                                            type="text"
                                            v-model="item.order_quantity"
                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-right"
                                            @focus="event => event.target.select()"
                                            />
                                        </div>
                        </td> -->

                      
    
                        </tr>
                    </tbody>
                </table>

                <!-- Deliveries Table  -->

                <!-- Summary  -->
                <div class="mt-4">
                    <div>Total: {{ formatNumber(grandTotal) }}</div>
                    <!-- <div>Quatity: {{ formatNumber(totalItems) }}</div> -->
                </div>
                <!-- <div class="mt-4">
                    <label
                        for="notes"
                        class="block text-gray-700 text-sm font-bold mb-2"
                    >
                        Notes:
                    </label>
                    <textarea
                        id="notes"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    ></textarea>
                </div> -->
                <!-- Summary  -->

                <!-- Action Buttons  -->
                <!-- <div class="flex justify-between mt-4">
                    <button
                        @click="showModal = false"
                        class="bg-gray-100 hover:bg-gray-200 text-gray-600 font-semibold py-2 px-4 rounded inline-flex items-center"
                    >
                        <i class="pi pi-times"></i>
                        <span>Cancel</span>
                    </button>
                    <button
                        @click="saveTransaction"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    >
                        <i class="pi pi-check"></i>
                        <span>Save</span>
                    </button>
                </div> -->
                <!-- Action Buttons  -->

            </div>
        </div>

        <!-- Company Modal  -->
        <!-- <Modal :show="showCompanyModal" @close="showCompanyModal = false">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg p-10">
                <div class="flex justify-between">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Select Company
                    </h3>
                    <div class="ml-4">
                        <button
                            @click="showCompanyModal = false"
                            class="bg-gray-100 hover:bg-gray-200 text-gray-600 font-semibold py-2 px-4 rounded inline-flex items-center"
                        >
                            <i class="pi pi-times"></i>
                        </button>
                    </div>
                </div>
            </div>
            <CompanyList
                :selectMode="true"
                @companySelected="handleSelectCompany"
            ></CompanyList>
        </Modal> -->
        <!-- Company Modal  -->

        <!-- Item Modal  -->
        <!-- <Modal :show="showItemModal" @close="showItemModal = false">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg p-10">
                <div class="flex justify-between">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Select Item
                    </h3>
                    <div class="ml-4">
                        <button
                            @click="showItemModal = false"
                            class="bg-gray-100 hover:bg-gray-200 text-gray-600 font-semibold py-2 px-4 rounded inline-flex items-center"
                        >
                            <i class="pi pi-times"></i>
                        </button>
                    </div>
                </div>
            </div>
            <ItemList
                :selectMode="true"
                @itemSelected="handleSelectItem"
            ></ItemList>
        </Modal> -->
        <!-- Item Modal  -->

    </AuthenticatedLayout>
</template>
