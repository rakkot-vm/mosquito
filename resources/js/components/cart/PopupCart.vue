<template>
   <transition name="fade">
        <div class="darkback" v-if="this.$store.state.popupCart">
            <div class="popup">
                <div class="close" @click="closePopupCart"></div>
                <h3 class="title-popup">Sie haben den Artikel erfolgreich in den Warenkorb gelegt:</h3>
                <ul class="products">
                    <product-item v-for="(item, index) in this.$store.state.cart"
                        :key="index"
                        :product="item"
                        :index="index"
                    ></product-item>
                </ul>
                <p style="text-align: right; font-family: 'Proxima-Nova-Bold';">
                    Gesamtpreis: {{this.$store.state.payment.amount}} €
                </p>
                <div class="buttons">
                    <div class="btn btn-grey" @click="closePopupCart">
                        <span>Weiter Einkaufen</span>
                    </div>
                    <router-link to="/payment" class="router-link--mobile">
                    <div class="btn btn-darkblue btn-img" @click="closePopupCart()">
                        <img src="../../../static/img/icons/shopping-cart-white.svg" alt=""><span>Zum warekorb</span>
                    </div>
                    </router-link>
                </div>
            </div>
        </div>
   </transition>
</template>


<script>
export default{
    components:{
        productItem: () => import('./item.vue')
    },
    methods:{
        closePopupCart(){
            document.body.style.overflow = 'auto';
            this.$store.state.popupCart = false
        }
    }
}
</script>


<style scoped lang="scss">
    .darkback{
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.59);
        z-index: 99999;
        overflow: auto;
    }
    .popup{
        width: 580px;
        min-height: 260px;
        margin: 20vh auto;
        padding: 65px 40px 49px;
        background-color: #fff;
        position: relative;
    }
    .close{
        position: absolute;
        top: 15px;
        right: 15px;
        width: 24px;
        height: 20px;
        color: #395781;
        cursor: pointer;
        opacity: 1;
        &:before, &:after{
            content: "";
            position: absolute;
            width: 100%;
            height: 2px;
            background-color: #395781;
            border-radius: 2px;
        }
        &:before{
            top: 10px;
            left: 0;
            transform: rotate(45deg)
        }
        &:after{
            bottom: 8px;
            right: 0;
            transform: rotate(-45deg)
        }
    }
    .fade-enter-active, .fade-leave-active {
      transition: opacity .5s;
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
      opacity: 0;
    }
    .title-popup{
        font-size: 18px;
    }
    .products{
        margin-top: 40px;
        margin-bottom: 10px;
    }
    .buttons{
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        .btn{
            margin-bottom: 15px;
            &:last-child{
                margin-bottom: 0;
            }
        }
    }
    @media(max-width: 767px){
        .popup{
            width: 86%;
            margin-top: 10vh;
            padding: 50px 30px 40px;
        }
        .buttons .btn{
            width: 49%;
        }
        .router-link--mobile{
            width: 49%;
            .btn{
                width: 49%;
            }
        }
    }
    @media(max-width: 480px){
        .popup{
            width: 96%;
            margin-top: 5vh;
            padding: 50px 20px 40px;
        }
        .buttons .btn{
            width: 100%;
        }
        .router-link--mobile{
            width: 100%;
        }
    }
</style>