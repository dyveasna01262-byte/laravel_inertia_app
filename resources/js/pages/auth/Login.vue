<script setup>
import { reactive } from 'vue';
import Layout from '../../layouts/Guestlayout.vue'
import { FwbCard, FwbInput, FwbHeading, FwbButton } from 'flowbite-vue';
defineOptions({
    layout: Layout
});

const form = reactive({
    email: '',
    password: '',
    password_confirmation: ''
})
const submit = () => {
    console.log(form)
}
// const route=useRoute()
// const routeParams=route.params
// const routeQuery=route.query
// defineProps({
//     data: Object
// })

</script>
<template>
    <fwb-card class=" p-5">
        <fwb-heading class=" text-white p-2 text-center" tag="h4">Login Form</fwb-heading>
        <form @submit.prevent="submit">
      
            <div class="pt-2.5">
                <fwb-input v-model="form.email" placeholder="enter your email" label="Email :" />
            </div>
            <div class=" pt-2.5">
                <fwb-input v-model="form.password" placeholder="enter your password" label="Password :" />
            </div>
            <div class=" pt-2.5  ">
                <fwb-input v-model="form.password_confirmation" placeholder="enter your Comfirm Password"
                    label="Comfirm Password :" />
            </div>
            <div>
                <p class=" text-white text-sm pt-1  ">Are you a new user ?
                    <Link :href="route('register')" class="text-blue-700">Register</Link>
                </p>
            </div>
            <div class="pt-4.5 w-full flex justify-center">
                <fwb-button class=" bg-blue-700 text-white w-20 p-2 " @click="submit">Login</fwb-button>
            </div>
        </form>
    </fwb-card>
</template>