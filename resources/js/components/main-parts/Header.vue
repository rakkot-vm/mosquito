<template>
   <header id="header-nav">
       <div class="container">
           <div class="row">
               <div class="col-lg-5 col-md-6 col-sm-12">
                   <router-link to="/" class="logo">
                       <img title="Home" src="./../../../static/img/logo.png" alt="">
                   </router-link>
               </div>
               <div class="col-lg-6 col-md-5 col-10">
                   <div class="header__contact-info">
                       <p class="phone">
                           <img src="../../../static/img/icons/telephone.svg" alt="" class="footer-top__icon">
                           <span class="text">08178 / 932 932</span>
                       </p>
                       <p class="email">
                           <img src="../../../static/img/icons/envelope.svg" alt="" class="footer-top__icon">
                           <span class="text">example@domen.com</span>
                       </p>
                   </div>
               </div>
               <div class="col-md-1 col-2 flex-end">
                   <div class="btn-cart-block" @click="openPopupCart">
                       <img src="../../../static/img/icons/cart.svg" alt="">
                       <div class="count-products-in-cart">
                           <span>{{this.$store.state.selectedProduct.count}}</span>
                       </div>
                   </div>
               </div>
           </div>
           <popup-cart></popup-cart>
       </div>
   </header>
</template>

<script>
export default{
    name: 'header-nav',
    components:{
        popupCart: () => import('../cart/PopupCart.vue')
    },
    methods:{
        openPopupCart(){
            this.$store.state.common.popupShow = true
        }
    }
}
</script>

<style scoped lang="scss">
#header-nav{
    position: relative;
    background-color: #f1f1f1;
    padding: 15px 0 27px;
}
.logo{
    width: 278px;
    display: block;
    img{
        max-height: 54px;
        width: 100%;
    }
}
.header__contact-info{
    display: flex;
    align-items: center;
    height: 100%;
    padding-top: 4px;
    .text{
        margin-left: 15px;
        color: #242424;
        font-size: 18px;
        font-family: 'Proxima-Nova-Regular'
    }
    .phone, .email{
        padding-right: 30px;
        margin-bottom: 0;
        img{
            margin-top: -4px;
        }
    }
}
.btn-cart-block{
    position: relative;
    cursor: pointer;
    .count-products-in-cart{
        position: absolute;
        top: -7px;
        right: -7px;
        border-radius: 50%;
        width: 14px;
        height: 14px;
        background-color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 10px;
        color: #282828;
    }
}
    @media(max-width:1199px) {
        .header__contact-info{
            flex-direction: column;
            align-items: flex-start;
        }
    }
    @media(max-width:767px) {
        .header__contact-info{
            margin-top: 14px;
        }
    }
    @media(max-width: 480px) {
        .header__contact-info .text{
            font-size: 15px;
        }
        .header__contact-info{
            margin-top: 10px;
        }
        #header-nav{
            padding: 15px 0 17px;
        }
        .logo{
            width: 200px;
        }
    }
</style>
