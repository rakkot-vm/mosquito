<template>
    <div class="settings-product" :class="{fullWidth: this.$store.state.common.showTablets}">
        <h2 class="underline">SlimLine</h2>
        <h3 class="subtitle">Konfigurieren Sie hier Ihren SlimLine Spannrahmen</h3>
        <hr>
        <p class="aluminum-profile"><strong>Aluminiumprofilrahmen</strong></p>
        <p class="type-profile">
            <img src="./../../../static/img/tick-inside-circle.png" alt="" class="img-check">
            <span>Standard</span>
        </p>

        <product-frames></product-frames>
        <product-nettings></product-nettings>
        <product-dimensions></product-dimensions>
    </div>
</template>


<script>
export default{
    name: 'settings',
    components:{
        productFrames: () => import('./../product/frames/section.vue'),
        productNettings: () => import('./../product/nettings/section.vue'),
        productDimensions: () => import('./../product/dimensions/section.vue'),
    }
}
</script>


<style scoped lang="scss">
.settings-product{
    width: 480px;
    &.fullWidth{
        width: 100%;
    }
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
@media(max-width: 1200px){
    .settings-product{
        width: calc(100% - 300px);
    }
}
@media(max-width: 767px){
    .settings-product{
        width: 100%;
        margin-top: 20px;
    }
}
</style>