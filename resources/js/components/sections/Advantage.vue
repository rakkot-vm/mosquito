<template>
    <section id="advantage">
        <div class="container">
            <hr class="advantage__line">
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="advantage__item">
                        <img :src="this.advantage1.image" alt="">
                        <p class="text">{{this.advantage1.title}}</p>
                    </div>
                </div>
                
                <div class="col-md-3 col-6">
                    <div class="advantage__item">
                        <img :src="this.advantage2.image" alt="">
                        <p class="text">{{this.advantage2.title}}</p>
                    </div>
                </div>
                
                <div class="col-md-3 col-6">
                    <div class="advantage__item">
                        <img :src="this.advantage3.image" alt="">
                        <p class="text">{{this.advantage3.title}}</p>
                    </div>
                </div>
                
                <div class="col-md-3 col-6">
                    <div class="advantage__item">
                        <img :src="this.advantage4.image" alt="">
                        <p class="text">{{this.advantage4.title}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default{
    name: 'advantage',
    data(){
        return{
            advantage1:{
                image: '',
                title: ''
            },
            advantage2:{
                image: '',
                title: ''
            },
            advantage3:{
                image: '',
                title: ''
            },
            advantage4:{
                image: '',
                title: ''
            }
        }
    },
    methods: {
        getStore(){
            this.advantage1.image = this.$store.state.sec5_img1.value;
            this.advantage1.title = this.$store.state.sec5_title1.value;
            
            this.advantage2.image = this.$store.state.sec5_img2.value;
            this.advantage2.title = this.$store.state.sec5_title2.value;
            
            this.advantage3.image = this.$store.state.sec5_img3.value;
            this.advantage3.title = this.$store.state.sec5_title3.value;
            
            this.advantage4.image = this.$store.state.sec5_img4.value;
            this.advantage4.title = this.$store.state.sec5_title4.value;
        }
    },
    mounted(){
        this.getStore()
    }
}
</script>

<style scoped lang="scss">
    #advantage{
        padding-bottom: 64px;
    }
    .advantage__line{
        margin-bottom: 74px;
        border-top: 2px solid rgba(36, 36, 36, 0.3);
    }
    .advantage__item{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
        .text{
            max-width:180px;
            text-align: center;
            margin-top: 35px;
            font-family: 'Exo2-Bold';
            font-size: 16px;
        }
    }
    @media(max-width:767px) {
        #advantage{
            padding-bottom: 42px;
        }
        .advantage__line{
            margin-bottom: 42px;
        }
    }
    @media(max-width:479px) {
        .advantage__item{
            .text{
                font-size: 14px;
            }
        }
    }
</style>