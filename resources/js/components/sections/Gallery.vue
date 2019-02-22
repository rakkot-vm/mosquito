<template>
    <section id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-8">
                    <img :src="this.$store.state.home.sec1_img1.value" alt="mosquito net1">
                </div>
                <div class="col-md-2 col-4">
                    <img :src="this.$store.state.home.sec1_img2.value" alt="mosquito net2">
                </div>
                <div class="col-md-2 col-4">
                    <img :src="this.$store.state.home.sec1_img3.value" alt="mosquito net3">
                </div>
                <div class="col-md-4 col-8">
                    <img :src="this.$store.state.home.sec1_img4.value" alt="mosquito net4">
                </div>
            </div>
        </div>
    </section>
</template>


<script>
export default{
    
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