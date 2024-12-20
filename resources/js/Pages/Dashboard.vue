<script setup>
import { Link } from "@inertiajs/vue3";
const props = defineProps({
    user: Object,
});
</script>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";

export default {
    layout: AppLayout,
};
</script>

<template>
    <div>
        <h1 class="text-3xl font-bold">Cześć, {{ user.name }}!</h1>
    </div>
</template>
