<script setup>
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'
import InputError from '@/Components/InputError.vue';

// learn the following lesson is that if value is type null, the type checker will automatically associate the type as type any 
// if it is an empty string the type will be string if null and you send a number it will be type number.
const form = reactive({
    first_name: '',
    last_name: '',
    id_number: '',
    email: '',
    phone_number: '',
    role: 'lead',
});

function submit() {
    console.log("form: ", form);
    
    router.post('/lead', form)
}
</script>
<template>
    <form @submit.prevent="submit" class="m-16">
        <div class="grid gap-4 mb-4 sm:grid-cols-2">
            <div>
                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">First
                    Name</label>
                <input type="text" name="firs_name" id="first_name" v-model="form.first_name"
                    class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required="">
                    <!-- <InputError :message="form.errors.first_name" class="mt-2" /> -->
            </div>
            <div>
                <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900">Last
                    Name</label>
                <input type="text" name="last_name" id="last_name" v-model="form.last_name"
                    class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required="">
                    <!-- <InputError :message="form.errors.last_name" class="mt-2" /> -->
            </div>
            <div>
                <label for="id_number" class="block mb-2 text-sm font-medium text-gray-900">ID
                    Number</label>
                <input type="text" name="id_number" id="id_number" v-model="form.id_number"
                    class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required="">
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                <input type="email" name="email" id="email" v-model="form.email"
                    class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required="">
            </div>
            <div>
                <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900">Phone
                    Number</label>
                <input type="text" name="phone_number" id="phone_number" v-model="form.phone_number"
                    class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required="">
            </div>
        </div>
        <button type="submit"
            class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Submit
        </button>
    </form>
</template>