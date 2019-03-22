<template>
  <div id="app">
    <app-header></app-header>
    <router-view id="page-content"/>
    <app-footer></app-footer>
    <app-cookie></app-cookie>
  </div>
</template>

<script>
import appHeader from './components/main-parts/Header.vue'
import appFooter from './components/main-parts/Footer.vue'
import appCookie from './components/cookie/index.vue'

export default{
    components: {
      appHeader,
      appFooter,
      appCookie
    },
    mounted(){
        this.$store.dispatch('getDataCommon')
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
