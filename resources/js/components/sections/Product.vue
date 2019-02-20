<template>
    <section id="product">
        <div class="container">
            <div class="product__grid">
                
                <product-image></product-image>
                <product-cart v-if="this.$store.state.common.showTablets"></product-cart>
                
                <product-settings></product-settings>
                
                <product-cart v-if="this.$store.state.common.showTablets === false"></product-cart>
            </div>
        </div>
    </section>
</template>


<script>
export default{
    name: "product",
    components: {
        productImage: () => import('./../product/image.vue'),
        productSettings: () => import('./../product/settings.vue'),
        productCart: () => import('./../product/cart.vue'),
    },
    mounted(){
        this.$store.dispatch('getDataProducts');
    }
}
</script>


<style scoped lang="scss">
    #product{
        margin-bottom: 58px;
    }
    .product__grid{
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }
</style>