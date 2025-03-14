<script setup>
import { Head } from '@inertiajs/vue3';
import SidePanel from './Shared/SidePanel.vue';
import Table from './Shared/Table.vue';
import CreateModal from './Shared/CreateModal.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

const props = defineProps(['page', 'auth', 'leads']);

</script>
<template>
    <Head title="Lead" />
    <div class="flex">
        <SidePanel :role="props.auth.user.role" />
        <div class="w-screen">
            <AuthenticatedLayout>

                <CreateModal role="lead" />
                <Table :role="props.auth.user.role" :data="props.leads.original" />
            </AuthenticatedLayout>
        </div>
    </div>
</template>