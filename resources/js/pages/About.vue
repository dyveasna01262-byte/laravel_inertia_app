<script setup>
import { Head } from '@inertiajs/vue3';
import Authlayout from '../layouts/Authlayout.vue'
defineOptions({
    layout: Authlayout
});
defineProps({
    data: Object
});
</script>
<template>
    <div class=" mt-[1000px] ">

        <Head>
            <title>About</title>
        </Head>
        <h2 class=" bg-blue-200 ">Hi</h2>
        <p>This is {{ $page.props.user }}</p>
        <p>This is {{ $page.props.role }}</p>
        <Link href="/about" preserve-scroll>click</Link>
    </div>

</template>
