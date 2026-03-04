<template>
    <div>
        <h1>PRODUCT PAGE</h1>
        <div class="border border-gray-500 rounded-lg p-4">
            <div class="p-2 flex items-center justify-between font-bold">
                <p>Name</p>
                <p>Description</p>
                <p>Price</p>
            </div>
            <div v-for="product in products.data" :key="product.id"
                class="flex items-center justify-between p-2 border-t border-gray-500 first:border-b ">
                <p>{{ product.name }}</p>
                <p>{{ product.description }}</p>
                <p><b>{{ product.price }}</b> rub.</p>


            </div>
        </div>
    </div>
</template>

<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';

defineOptions({
    layout: AdminLayout
})
const props = defineProps({
    products: { type: Array, default: () => [] }
})
</script>

<style lang="scss" scoped></style>