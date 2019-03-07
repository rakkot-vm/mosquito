<template>
    <div 
        id="productCart"
       ref="productCart" 
       class="cart">
       <div 
          ref="productCartWrapper"
          id="productCartWrapper"
          class="wrapper" 
          :class="{fixed: this.position.fixed}">
           <p class="price underline underline-right">{{this.$store.state.productPrice}} €</p>
           <p>
               Lieferzeit <strong> 3 - 5 </strong> Werktage <br/>
               Versandkosten: <strong> 4.99 € </strong>
           </p>
           <button class="btn-darkblue btn-img" @click="addProductToCart()">
               <img src="../../../static/img/icons/shopping-cart.png" alt="">
               <span>In den Warenkorb</span>
            </button>
       </div>
    </div>
</template>


<script>
export default{
    data(){
        return{
            position:{
                cart: {
                    height: 0,
                    top: 0
                },
                wrapper:{
                    height: null,
                    top: null
                },
                fixed: false,

                windowTop: 0,
            }
        }
    },
    methods:{
        getPositionCart(){
            if(window.innerWidth >= 1200 && location.pathname == '/'){
                var elProductCartWrapper = document.getElementById('productCartWrapper').getBoundingClientRect();

                this.position.wrapper.height = elProductCartWrapper.height;
                /*position cart*/
                var elProductCart = document.getElementById('productCart').getBoundingClientRect();

                this.position.cart.top = elProductCart.y;
                this.position.cart.height = elProductCart.height;

                /*position wrapper*/
                this.position.wrapper.top = this.position.cart.height + this.position.cart.top;


                if(this.position.cart.top < 0 && this.position.wrapper.top >  this.position.wrapper.height){
                    this.position.fixed = true
                } else {
                    this.position.fixed = false
                }
            } else {
                this.position.fixed = false
            }
        },
        addProductToCart(){
            window.scrollTo({
                top: 0,
                left: 0,
                behavior: 'smooth'
            });

            this.$store.commit('COUNT_PRODUCTS_IN_CART');
            this.$store.commit('ADD_PRODUCT_TO_CART');
            this.$store.dispatch('calcProducts');

            
        }
    },
    mounted(){
        this.position.wrapper.height = this.$refs.productCartWrapper.getBoundingClientRect().height;
        window.addEventListener('scroll', this.getPositionCart);
    },
}
</script>


<style scoped lang="scss">
.cart{
    width: 278px;
    position: relative;
}
.wrapper{
    background-color: #f1f1f1;
    padding: 20px;
    width: inherit;
    &.fixed{
        position: fixed;
        top: 0;
        margin-top: 20px;
    }
}
p{
    text-align: right;
}
.price{
    font-family: 'Exo2-Bold';
    font-size: 36px;
    font-style: normal;
    font-stretch: normal;
    line-height: normal;
    letter-spacing: normal;
    color: #395781;
}
.btn-darkblue{
    width: 100%;
}
@media(max-width: 1200px){
    .cart{
        width: 100%;
        margin-top: 20px;
    }
}
@media(max-width: 767px){
    .cart{
        width: 49%;
        margin-top: 0;
        .wrapper{
            width: 100%;
        }
    }
}
@media(max-width: 480px){
    .cart{
        width: 100%;
    }
}
</style>