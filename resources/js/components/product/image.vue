<template>
    <div 
       ref="imageProduct"
       id="imageProduct" 
       class="image-product">
        <div 
           class="image-border"
           :class="{fixed: this.position.fixed}" 
           id="imageWrapper"
           ref="imageWrapper">
            <img :src="this.$store.state.viewImg" alt="">
        </div>
        <product-cart v-if="this.$store.state.showTablets"></product-cart>
    </div>
</template>


<script>
export default{
    data(){
        return{
            position:{
                wrapper: {
                    height: 0,
                    top: 0
                },
                scrollBlock:{
                    height: null,
                    top: null
                },
                fixed: false
            }
        }
    },
    components:{
        productCart: () => import('./../product/cart.vue'),
    },
    methods:{
        getPosition(){
            if(window.innerWidth >= 1200 && location.pathname === '/'){
                /*position wrapper*/
                var elImage = document.getElementById('imageProduct').getBoundingClientRect();

                this.position.wrapper.top = elImage.top
                this.position.wrapper.height = elImage.height;

                /*position scrollBlock*/
                var elWrapper = document.getElementById('imageWrapper').getBoundingClientRect();

                this.position.scrollBlock.height = elWrapper.height;
                this.position.scrollBlock.top = this.position.wrapper.height + this.position.wrapper.top;


                if(this.position.wrapper.top < 0 && this.position.scrollBlock.top > this.position.scrollBlock.height){
                    this.position.fixed = true
                } else {
                    this.position.fixed = false
                }
            }
        },
    },
    mounted(){
        /*this.$store.state.selectedProduct.frame.image = this.$store.state.products.attributes[0].attribute_values[0].border_img*/
        
        window.addEventListener('scroll', this.getPosition);
    }
}
</script>


<style scoped lang="scss">
.image-product{
    width: 356px;
    position: relative;
}
.image-border{
    border: 1px solid #a0a0a0;
    padding: 5px;
    img{
        width: 100%;
    }
    &.fixed{
        position: fixed;
        top: 0;
        margin-top: 20px;
        width: inherit;
    }
}
@media(max-width: 1200px){
    .image-product{
        width: 280px;
    }
}
@media(max-width: 767px){
    .image-product{
        width: 100%;
        display: flex;
        justify-content: space-between;
    }
    .image-border{
        width: 49%;
    }
}
@media(max-width: 480px){
    .image-product{
        flex-direction: column;
    }
    .image-border{
        width: 100%;
        max-height: 380px;
        margin-bottom: 20px;
        img{
            height: 100%;
            object-fit: contain;
        }
    }
}
</style>