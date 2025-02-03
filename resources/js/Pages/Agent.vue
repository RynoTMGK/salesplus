<script setup>
import { Head } from '@inertiajs/vue3';
import SidePanel from './Shared/SidePanel.vue';
import Table from './Shared/Table.vue';
import CreateModal from './Shared/CreateModal.vue';
import Form from './Shared/Form.vue';

const props = defineProps(['page']);

</script>
<template>

    <Head title="Agent" />
    <div class="flex h-screen">
        <SidePanel />
        <div class="w-full">
            <h1 class="pl-16 pt-8 text-4xl font-bold">{{ page }}</h1>
            <Table />
        </div>
    </div>
</template>