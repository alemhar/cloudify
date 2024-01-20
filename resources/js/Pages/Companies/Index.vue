<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import CompanyList from "@/Components/CompanyList.vue";

const props = defineProps({
    companies: Object,
});

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
        <CompanyList :selectMode="false"></CompanyList>
    </AuthenticatedLayout>
</template>
