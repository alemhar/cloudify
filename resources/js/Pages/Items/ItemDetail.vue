<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

const props = defineProps({
    item: Object,
});

const appName = import.meta.env.VITE_APP_NAME;
</script>
<template>
    <Head title="Item" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-bold text-xl leading-tight justify-center flex">
                <div class="flex justify-center">
                    <h1
                        class="text-2xl font-semibold text-gray-900 dark:text-white"
                    >
                    {{ item.name }}
                    </h1>
                </div>
            </h2>
        </template>
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            
            <div class="border-t border-gray-200">
                <dl>
                    <div class="px-4 m-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Description
                        </dt>
                        <dd class="ml-2 mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ item.description }}
                        </dd>
                    </div>
                    <hr>
                    <div class="px-4  m-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Model
                        </dt>
                        <dd class="ml-2 mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ item.model }}
                        </dd>
                    </div>
                    <hr>
                    <div class="px-4  m-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            SKU
                        </dt>
                        <dd class="ml-2 mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ item.sku }}
                        </dd>
                    </div>
                    <hr>
                    <div class="px-4  m-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Price
                        </dt>
                        <dd class="ml-2 mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ item.price }}
                        </dd>
                    </div>
                    <hr>
                    <div class="px-4  m-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Quantity
                        </dt>
                        <dd class="ml-2 mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ item.quantity }}
                        </dd>
                    </div>

                </dl>
                <div class="flex justify-between mt-6 p-4">
                            <div>
                            <button
                                class="bg-gray-100 hover:bg-gray-200 text-gray-600 font-semibold py-2 px-4 rounded inline-flex items-center"
                            >
                                <i class="pi pi-arrow-left"></i>
                                <span>Back</span>
                            </button>
                            </div>  
                            <div>
                            <button
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-2"
                            >
                                <i class="pi pi-times"></i>
                                <span>Delete</span>
                            </button>
                            <button
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                            >
                                <i class="pi pi-check"></i>
                                <span>Edit</span>
                            </button>
                            </div>  
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
