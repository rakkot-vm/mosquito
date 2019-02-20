<template>
    <div class="settings-product">
        <h2 class="underline">SlimLine</h2>
        <h3 class="subtitle">Konfigurieren Sie hier Ihren SlimLine Spannrahmen</h3>
        <hr>
        <p class="aluminum-profile"><strong>Aluminiumprofilrahmen</strong></p>
        <p class="type-profile">
            <img src="./../../../static/img/tick-inside-circle.png" alt="" class="img-check">
            <span>Standard</span>
        </p>
        
        <product-frames @getImageURL="updateImageURL($event)"></product-frames>
        <product-nettings></product-nettings>
    </div>
</template>


<script>
export default{
    name: 'settings',
    components:{
        productFrames: () => import('./../product/frames/section.vue'),
        productNettings: () => import('./../product/nettings/section.vue'),
        productDimensions: () => import('./../product/dimensions/section.vue'),
    },
    methods: {
        updateImageURL: function (updatedURL) {
            this.$store.state.selectedProduct.frame.image = updatedURL;
        },
    }
}
</script>