<script setup>
import { Head } from '@inertiajs/vue3';
import SidePanel from './Shared/SidePanel.vue';
import Table from './Shared/Table.vue';
import CreateModal from './Shared/CreateModal.vue';

const props = defineProps(['page', 'auth']);

</script>
<template>

    <Head title="Contact" />
    <div class="flex h-screen">
        <SidePanel :role="props.auth.user.role" />
        <div class="w-[80%]">
            <CreateModal role="contact" />
            <h1 class="pl-16 pt-8 text-4xl font-bold">{{ page }}</h1>
            <Table />
        </div>
    </div>
</template>