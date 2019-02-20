<template>
    <section id="product">
        <div class="container">
            <div class="product__grid">
                
                <product-image></product-image>
                
                <product-settings></product-settings>
                
                <product-cart></product-cart>
            </div>
        </div>
    </section>
</template>


<script>
export default{
    name: "product",
    /*data () {
        return{
            getter: ''
        }
    },*/
    components: {
        productImage: () => import('./../product/image.vue'),
        productSettings: () => import('./../product/settings.vue'),
        productCart: () => import('./../product/cart.vue'),
    },
    /*methods: {
        getSettings: function(settingsData) {
            this.getter = settingsData
        }
    },*/
    
}
</script>


<style scoped lang="scss">
    #product{
        margin-bottom: 58px;
    }
    .product__grid{
        display: flex;
        justify-content: space-between;
    }
    
    .settings-product{
        width: 480px;
    }
    .subtitle{
        font-size: 20px;
        letter-spacing: normal;
    }
    .aluminum-profile{
        margin-bottom: 8px;
    }
    .img-check{
        margin-top: -2px;
        margin-right: 7px;
    }
</style>