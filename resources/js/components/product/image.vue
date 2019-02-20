<template>
    <div class="image-product">
        <div class="image-border">
            <img :src="this.$store.state.selectedProduct.frame.image" alt="">
        </div>
    </div>
</template>


<script>
export default{
    /*props: ['imageURL']*/
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
}
</style>