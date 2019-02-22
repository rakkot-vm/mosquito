<template>
    <div 
       ref="productCart" 
       class="cart">
       <div 
          ref="productCartWrapper"
          class="wrapper" 
          :class="{fixed: this.position.fixed}">
           <p class="price underline underline-right">38.45 €</p>
           <p>
               Lieferzeit <strong> 3 - 5 </strong> Werktage <br/>
               Versandkosten: <strong> 4.99 € </strong>
           </p>
           <button class="btn-darkblue btn-img">
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
                fixed: false
            }
        }
    },
    methods:{
        getPositionCart(){
            if(window.innerWidth >= 1200){
                this.position.wrapper.height = this.$refs.productCartWrapper.getBoundingClientRect().height;
                /*position cart*/
                this.position.cart.top = this.$refs.productCart.getBoundingClientRect().y;
                this.position.cart.height = this.$refs.productCart.getBoundingClientRect().height;

                /*position wrapper*/
                this.position.wrapper.top = this.position.cart.height + this.position.cart.top;


                if(this.position.cart.top < 0 && this.position.wrapper.top >  this.position.wrapper.height){
                    this.position.fixed = true
                } else {
                    this.position.fixed = false
                }
            }
        }
    },
    mounted(){
        this.position.wrapper.height = this.$refs.productCartWrapper.getBoundingClientRect().height;
        window.addEventListener('scroll', this.getPositionCart);
    }
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
</style>