<template>
    <div>
        <h1>ADMIN PRODUCT EDIT</h1>
        <div v-if="product">

            <p>Name: {{ product.name }}</p>
            <p>Description: {{ product.description }}</p>
            <p>Price: {{ product.price }}</p>

        </div>

    </div>
</template>

<script setup>

const props = defineProps({
    product: { type: Object, required: true }
})

</script>

<style lang="scss" scoped>

</style>