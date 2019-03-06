<template>
    <section id="product">
        <div class="container">
            <div class="product__grid">
                
                <product-image></product-image>
                
                <product-settings></product-settings>
                
                <product-cart v-if="this.$store.state.showTablets === false"></product-cart>
            </div>
            <p style="display:none">{{this.updateProductAmount}}</p>
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
    methods:{
        getWindowWidth(){
            if(window.innerWidth >= 1200){
                this.$store.state.showTablets = false
            } else {
                this.$store.state.showTablets = true
            }
        }
    },
    computed: {
        updateProductAmount(){
            this.$store.state.selectedProduct;
            return this.$store.dispatch('calcProduct');
        }
    },
    mounted(){
        this.getWindowWidth();
        this.$store.dispatch('getDataProducts');

        window.addEventListener('resize', this.getWindowWidth);
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