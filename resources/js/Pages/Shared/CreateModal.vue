<script setup>
import { reactive } from 'vue'
import { ref } from 'vue'
import { router } from '@inertiajs/vue3'
import Form from './Form.vue';

defineProps(['role']);

const showModal = ref(false);

const handleModal = (bool) => {
    return showModal.value = bool;
}

</script>
<template>

    <div class="flex justify-end m-5 mr-20" v-if="role === 'lead'">
        <button
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button" @click="handleModal(true)">
            Create
        </button>
    </div>

    <div
        class="flex overflow-y-auto overflow-x-hidden fixed top-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full m-auto bg-black/70 "
        :class="{'hidden': !showModal}">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">

            <div class="relative p-4 bg-white rounded-lg sm:p-5 shadow-xl">

                <div
                    class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900">
                        Add Product
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        @click="handleModal(false)">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <Form role="lead" />
            </div>
        </div>
    </div> 
</template>