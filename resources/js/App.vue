<template>
  <div id="app">
    <header-comp></header-comp>
    <router-view id="page-content"/>
    <footer-comp></footer-comp>
    <div 
      v-if="$store.state.storageCookie"
      class="cookie">
      <div class="close-cookie" @click="closeCookie()">
        x
      </div>
      <div class="container">
        <p>Wenn Sie Ihren Besuch auf dieser Website fortsetzen, akzeptieren Sie die Verwendung von Cookies zur Erstellung von Besucherstatistiken. Erfahren Sie mehr.</p>
      </div>
    </div>
  </div>
</template>

<script>
export default{
    components: {
      HeaderComp: () => import('./components/main-parts/Header.vue'),
      FooterComp: () => import('./components/main-parts/Footer.vue')
    },
    methods:{
      getCookie(name) {
        // eslint-disable-next-line
        var matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));

        if(matches){
          this.$store.state.storageCookie = false
        } else {
          this.$store.state.storageCookie = true

          var date = new Date;
              date.setDate(date.getDate() + 30);
        
          document.cookie = "storageCookie=empty;path=/; expires=" + date.toUTCString()
        }
      },
      closeCookie(){
        this.$store.state.storageCookie = false
      }
    },
    mounted(){
        this.$store.dispatch('getDataCommon');
        this.$store.dispatch('getDataHome');
        this.getCookie('storageCookie');
    }
}
</script>

<style lang="scss">
    @import "../static/scss/fonts";
    @import "../static/scss/buttons";
    @import "../static/scss/settings";
    @import "../static/scss/media";

    .cookie{
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      background-color: grey;
      padding: 30px 0;
      .close-cookie{
        position: absolute;
        top: 5px;
        right: 30px;
        font-size: 20px;
        color: #fff;
        cursor: pointer;
        width: 30px;
        height: 30px;
        text-align: center;
      }
      p{
        margin: 0;
        color: #fff;
      }
    }
</style>
