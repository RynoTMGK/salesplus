<script setup>
import Landing from '@/Components/Landing.vue';
import SidePanel from '@/Pages/Shared/SidePanel.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />
    <div class="flex">
        <SidePanel />
        <div class="w-[82%]">
            <AuthenticatedLayout>
                <Landing />
            </AuthenticatedLayout>
        </div>
    </div>
</template>
