<script setup>
import { Head } from '@inertiajs/vue3';
import SidePanel from './Shared/SidePanel.vue';
import Table from './Shared/Table.vue';
import CreateModal from './Shared/CreateModal.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

const props = defineProps(['page', 'auth']);

</script>
<template>

    <Head title="Contact" />
    <div class="flex">
        <SidePanel :role="props.auth.user.role" />
        <div class="w-screen">
            <AuthenticatedLayout>
                <CreateModal role="contact" />
                <Table :role="props.auth.user.role" />
            </AuthenticatedLayout>
        </div>
    </div>
</template>