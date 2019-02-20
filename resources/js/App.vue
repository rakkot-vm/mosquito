<template>
  <div id="app">
    <header-comp></header-comp>
    <router-view id="page-content"/>
    <footer-comp></footer-comp>
  </div>
</template>

<script>
export default{
    components: {
      HeaderComp: () => import('./components/main-parts/Header.vue'),
      FooterComp: () => import('./components/main-parts/Footer.vue')
    },
    methods:{
        getWindowWidth(){
            if(window.innerWidth >= 1200){
                this.$store.state.common.showTablets = false
            } else {
                this.$store.state.common.showTablets = true
            }
        }
    },
    mounted(){
        window.addEventListener('resize', this.getWindowWidth);
        this.getWindowWidth()
    }
}
</script>

<style lang="scss">
    @import "../static/scss/fonts";
    @import "../static/scss/buttons";
    @import "../static/scss/settings";
    @import "../static/scss/media";
</style>
