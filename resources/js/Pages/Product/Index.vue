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
        <div class="mt-4 flex flex-wrap gap-2">
            <Link 
            v-if="products.links?.prev"
            :href="products.links.prev"
            class="px-3 py-1 border rounded">
            назад
            </Link>
            <span v-else class="px-3 py-1 border rounded opacity-50 cursor-not-allowed">назад2</span>

            <div v-for="(link, i) in products.meta.links" :key="i">
                <Link 
                v-if="link.url"
                :href="link.url"
                class="px-3 py-1 border rounded"
                :class="{ 'bg-gray-500 text-white': link.active }">
                <span v-html="link.label"></span>
                </Link>
                <span
                v-else
                class="px-3 py-1 border rounded opacity-50 cursor-not-allowed"
                v-html="link.label"
                ></span>
            </div>

            <Link v-if="products.links?.next"
            :href="products.links.next"
            class="px-3 py-1 border rounded">
            >
              вперед
            </Link>
            <span v-else class="px-3 py-1 border rounded opacity-50 cursor-not-allowed">вперед2</span>
        </div>

    </div>
</template>

<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Link } from '@inertiajs/vue3'

defineOptions({
    layout: AdminLayout
})
const props = defineProps({
    products: { type: Object, required: true }
})
</script>

<style lang="scss" scoped></style>