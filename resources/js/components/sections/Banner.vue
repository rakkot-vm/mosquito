<template>
    <section id="banner" v-on:resize="getWindowWidth">
        <div class="container">
            <h1>{{this.$store.state.home.sec1_title.value}}</h1>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-12 col-12" v-if="this.imageShow ">
                    <div class="img-no-mosquito">
                        <img :src="this.$store.state.home.sec1_img.value" alt="no mosquito">
                    </div>
                </div>
                <div class="col-md-12 col-12 list-dots" :class="{'col-xl-9 col-lg-8': imageShow}" v-html="this.$store.state.home.sec1_text.value">
                    
                </div>
            </div>
        </div>
    </section>
</template>

<script> 
    
export default{
    name: 'banner',
    data () {
        return{
            windowWidth: null,
            imageShow: false,
        }
    },
    methods:{
        getWindowWidth(event){
            this.windowWidth = document.documentElement.clientWidth;
            this.checkStateImage()
        },
        checkStateImage(){
            if(this.windowWidth > 767 && this.$store.state.home.sec1_img.value !== ''){
                this.imageShow = true
            } else {
                this.imageShow = false
            }
        }
    },
    mounted() {
        window.addEventListener('resize', this.getWindowWidth);
        this.getWindowWidth(); 
    },
    updated(){
        this.checkStateImage()
    }
}
</script>

<style scoped lang="scss">
    .img-no-mosquito{
        height: 100%;
        display: flex;
        align-items: center;
    }
    #banner{
        h1{
            margin-bottom: 29px;
        }
    }
</style>
