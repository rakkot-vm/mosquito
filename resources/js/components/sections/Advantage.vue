<template>
    <section id="advantage">
        <div class="container">
            <hr class="advantage__line">
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="advantage__item">
                        <img :src="this.$store.state.home.sec5_img1.value" alt="">
                        <p class="text">{{this.$store.state.home.sec5_title1.value}}</p>
                    </div>
                </div>
                
                <div class="col-md-3 col-6">
                    <div class="advantage__item">
                        <img :src="this.$store.state.home.sec5_img2.value" alt="">
                        <p class="text">{{this.$store.state.home.sec5_title2.value}}</p>
                    </div>
                </div>
                
                <div class="col-md-3 col-6">
                    <div class="advantage__item">
                        <img :src="this.$store.state.home.sec5_img3.value" alt="">
                        <p class="text">{{this.$store.state.home.sec5_title3.value}}</p>
                    </div>
                </div>
                
                <div class="col-md-3 col-6">
                    <div class="advantage__item">
                        <img :src="this.$store.state.home.sec5_img4.value" alt="">
                        <p class="text">{{this.$store.state.home.sec5_title4.value}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default{
    name: 'advantage',
    
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