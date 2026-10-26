<script setup>
import { Head } from '@inertiajs/vue3';
import { FwbAlert } from 'flowbite-vue'
// import Authlayout from '../layouts/Authlayout.vue'  
// defineOptions({
//     layout: Authlayout
// });
function test() {
    alert('hello');
}
</script>
<template>

    <Head>
        <title>Home</title>
    </Head>
    <!-- <h1>hello</h1>
    <button enter-class=" bg-red-900"  @click="test">click</button> -->
    <div class=" bg-red-900">
        <fwb-alert type="success">
            Success! You can now use Flowbite Vue in your Vue application 🎉
        </fwb-alert>
        <button class=" bg-blue-700 p-4 " @click="test">click</button>
    </div>
</template>
<style scope>
h1 {
    color: red;
    background: #000;
}
</style>