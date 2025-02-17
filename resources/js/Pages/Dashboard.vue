<script setup>
import Landing from '@/Components/Landing.vue';
import SidePanel from '@/Pages/Shared/SidePanel.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps(['auth']);

</script>
<template>
    <Head title="Dashboard" />
    <div class="flex">
        <SidePanel :role="props.auth.user.role" />
        <div class="w-screen">
            <AuthenticatedLayout>
                <Landing />
            </AuthenticatedLayout>
        </div>
    </div>
</template>
