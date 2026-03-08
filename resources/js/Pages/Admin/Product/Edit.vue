<template>
    <div>
        <h1 class="text-xl font-bold">EDIT PRODUCT</h1>
        <div v-if="product">

            <p>Name: {{ product.name }}</p>
            <p>Description: {{ product.description }}</p>
            <p>Price: {{ product.price }}</p>

        </div>
        <Link :her="route('admin.product.index')" сlass="hover:text-blue-900 text-blue-400 mt-auto block">Назад в админку</Link>
    </div>
</template>

<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Link } from '@inertiajs/vue3'

defineOptions({
    layout: AdminLayout
})

const props = defineProps({
    product: { type: Object, required: true }
})

</script>

<style lang="scss" scoped>

</style>