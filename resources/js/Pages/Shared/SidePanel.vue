<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps(['role']);

</script>
<template>
    <div class="w-[15%] bg-cyan-900 p-8 flex flex-col h-screen">
        <ul class="flex-grow">
            <Link href="/dashboard" class="flex justify-start items-center mt-10 hover:bg-cyan-600 p-2 rounded-md mb-4"
                :class="{ 'bg-cyan-950': $page.url === '/dashboard' }">
            <i class="pi pi-home mr-2 text-white"></i>
            <p class="text-base text-white hidden md:block">Dashboard</p>
            </Link>
            <Link href="/agent" class="flex justify-start items-center mb-4 p-2 hover:bg-cyan-600 rounded-md"
                :class="{ 'bg-cyan-950': $page.url === '/agent' }" v-if="props.role === 'admin'">
            <i class="pi pi-folder mr-2 text-white"></i>
            <p class="text-base text-white hidden md:block">Agents</p>
            </Link>
            <Link href="/contact" class="flex justify-start items-center mb-4 p-2 hover:bg-cyan-600 rounded-md"
                :class="{ 'bg-cyan-950': $page.url === '/contact' }">
            <i class="pi pi-address-book mr-2 text-white"></i>
            <p class="text-base text-white hidden md:block">Contacts</p>
            </Link>
            <Link href="/lead" class="flex justify-start items-center mb-4 p-2 hover:bg-cyan-600 rounded-md"
                :class="{ 'bg-cyan-950': $page.url === '/lead' }">
            <i class="pi pi-users mr-2 text-white"></i>
            <p class="text-base text-white hidden md:block">Leads</p>
            </Link>
        </ul>

        <div class="">
            <Link href="logout" class="flex justify-start items-center mb-4 p-2 hover:bg-cyan-600 rounded-md"
                :class="{ 'bg-cyan-950': $page.url === '/logout' }" method="post" as="button">
            <i class="pi pi-sign-out mr-2 text-white"></i>
            <p class="text-base text-white hidden md:block">logout</p>
            </Link>
        </div>
    </div>
</template>
<div class="w-[15%] bg-cyan-900 p-8 flex-col border"></div>