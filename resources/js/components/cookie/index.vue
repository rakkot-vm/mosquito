<template>
    <div 
        v-if="$store.state.storageCookie"
        class="cookie">
        <div class="container">
        <p>
            <span class="attention-cookie">Wenn Sie Ihren Besuch auf dieser Website fortsetzen, akzeptieren Sie die Verwendung von Cookies zur Erstellung von Besucherstatistiken. Erfahren Sie mehr.</span> 
            <span class="agree-cookie" @click="closeCookie()">Stimme zu</span>
        </p>
        </div>
    </div>
</template>

<script>
export default {
    methods:{
      getCookie(name) {
        // eslint-disable-next-line
        var matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));

        if(matches){
          this.$store.state.storageCookie = false
        } else {
          this.$store.state.storageCookie = true
        }
      },
      closeCookie(){
        this.$store.state.storageCookie = false
        var date = new Date;
            date.setDate(date.getDate() + 30);
      
        document.cookie = "storageCookie=empty;path=/; expires=" + date.toUTCString()
      }
    },
    mounted () {
        this.getCookie('storageCookie');
    }
}
</script>

<style lang="scss" scoped>
.cookie{
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: grey;
    padding: 30px 0;
    p{
        margin: 0;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
}
.attention-cookie{
    display: inline-block;
    width: calc(100% - 100px);
}
.agree-cookie{
    display: inline-block;
    padding: 3px 10px;
    border: 1px solid #fff;
    cursor: pointer;
}
@media(max-width:768px){
.attention-cookie{
    width: 100%;
    font-size: 14px;
}
.cookie{
    padding: 14px 0;
    p{
        flex-direction: column;
        align-items: flex-start;
    }
}
.agree-cookie{
    margin-top: 8px;
}
}
</style>

