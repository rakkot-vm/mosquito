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
    created(){
        this.$store.dispatch('getDataHome')
    }
}
</script>

<style lang="scss">
    @import "../static/scss/fonts";
    @import "../static/scss/buttons";
    @import "../static/scss/settings";
    @import "../static/scss/media";
</style>
