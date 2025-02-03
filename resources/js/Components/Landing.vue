<script setup>
import { Head } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
</script>
<template>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg flex justify-center">
                <div class="p-6 text-gray-900 text-center">
                    <p class="text-lg mb-4">
                        You currently do not have any users.
                    </p>
                    <p class="text-base mb-6">
                        Please add a new user and what type of user it is
                    </p>
                    <i class="pi pi-plus-circle mr-2 text-orange-300 text-6xl"></i>
                </div>
            </div>
        </div>
    </div>
</template>