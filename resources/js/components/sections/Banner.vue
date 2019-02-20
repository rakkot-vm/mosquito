<template>
    <section id="banner" v-on:resize="getWindowWidth">
        <div class="container">
            <h1>{{this.$store.state.home}}</h1>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-12 col-12" v-if="this.imageShow ">
                    <div class="img-no-mosquito">
                        <img :src="this.imageURL" alt="no mosquito">
                    </div>
                </div>
                <div class="col-md-12 col-12 list-dots" :class="{'col-xl-9 col-lg-8': imageShow}" v-html="this.text">
                    
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
            title: String,
            imageURL: '',
            text: '',
            windowWidth: null,
            imageShow: false,
            json: [],
            errors: []
        }
    },
    methods:{
        getWindowWidth(event){
            this.windowWidth = document.documentElement.clientWidth;
            this.checkStateImage()
        },
        getStore(){
            this.title = this.$store.state.sec1_title.value,
            this.imageURL = this.$store.state.sec1_img.value,
            this.text = this.$store.state.sec1_text.value
        },
        checkStateImage(){
            if(this.windowWidth > 767 && this.imageURL != ''){
                this.imageShow = true
            } else {
                this.imageShow = false
            }
        }
    },
    mounted() {
        window.addEventListener('resize', this.getWindowWidth);
        this.getWindowWidth(); 
        
        this.getStore()
        this.checkStateImage()
    },
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
