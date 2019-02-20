<template>
    <section id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-8">
                    <img :src="this.image1" alt="mosquito net1">
                </div>
                <div class="col-md-2 col-4">
                    <img :src="this.image2" alt="mosquito net2">
                </div>
                <div class="col-md-2 col-4">
                    <img :src="this.image3" alt="mosquito net3">
                </div>
                <div class="col-md-4 col-8">
                    <img :src="this.image4" alt="mosquito net4">
                </div>
            </div>
        </div>
    </section>
</template>


<script>
export default{
    data() {
        return{
            image1: String,
            image2: String,
            image3: String,
            image4: String,
        }
    },
    methods:{
        getStore(){
            this.image1 = this.$store.state.sec1_img1.value;
            this.image2 = this.$store.state.sec1_img2.value;
            this.image3 = this.$store.state.sec1_img3.value;
            this.image4 = this.$store.state.sec1_img4.value;
        }
    },
    mounted(){
        this.getStore()
    }
}
</script>


<style scoped lang="scss">
    #gallery{
        margin-top: 31px;
        margin-bottom: 41px;
        .row{
            margin: 0;
            &> div{
                padding: 0;
            }
        }
        img{
            object-fit: cover;
            height: 100%;
            width: 100%;
        }
    }
    @media(max-width:767px){
        #gallery{
            .row{
                &> div{
                    border: 3px solid #fff;
                }
            }
        }
    }
</style>