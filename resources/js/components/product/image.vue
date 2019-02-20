<template>
    <div 
       ref="imageProduct" 
       class="image-product">
        <div 
           class="image-border"
           :class="{fixed: this.position.fixed}" 
           ref="imageWrapper">
            <img :src="this.$store.state.selectedProduct.frame.image" alt="">
        </div>
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
    methods:{
        getPosition(){
            if(window.innerWidth >= 1200){
                /*position wrapper*/
                this.position.wrapper.top = this.$refs.imageProduct.getBoundingClientRect().y;
                this.position.wrapper.height = this.$refs.imageProduct.getBoundingClientRect().height;

                /*position scrollBlock*/
                this.position.scrollBlock.height = this.$refs.imageWrapper.getBoundingClientRect().height;
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
        window.addEventListener('scroll', this.getPosition);
    },
    updated(){
        this.$store.state.selectedProduct.frame.image = this.$store.state.products.attributes[0].attribute_values[0].border_img
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
</style>