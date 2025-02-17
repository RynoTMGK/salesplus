<script setup>
import { Head } from '@inertiajs/vue3';
import SidePanel from './Shared/SidePanel.vue';
import Table from './Shared/Table.vue';
import CreateModal from './Shared/CreateModal.vue';
import Form from './Shared/Form.vue';

const props = defineProps(['page', 'auth']);

</script>
<template>

    <Head title="Agent" />
    <div class="flex h-screen">
        <SidePanel :role="props.auth.user.role" />
        <div class="w-[80%]">
            <h1 class="pl-16 pt-8 text-4xl font-bold">{{ props.page }}</h1>
            <Table />
        </div>
    </div>
</template>