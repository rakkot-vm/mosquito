<template>
    <div 
       class="netting"
       :class="{active: netting.id == this.$store.state.selectedProduct.attributes.net}" 
       @click='getData(netting.id)'>
        <div class="image-border">
            <img :src="this.netting.preview_img" alt="">
        </div>
        <p class="caption">{{this.netting.title}}</p>
    </div>
</template>


<script>
export default{
    name: 'netting',
    props: ['netting'],
    methods: {
        getData: function (idNetting){
            this.$store.state.selectedProduct.attributes.net = idNetting;
        }
    },
    mounted(){
        this.getData(this.$store.state.products.attributes[1].attributeValues[0].id)
    }
}
</script>


<style scoped lang="scss">
    .netting{
        padding: 0 5px;
        margin-bottom: 24px;
        cursor: pointer;
    }
    .image-border{
        border: 1px solid #a0a0a0;
        padding: 5px;
        width: 180px;
        height: 180px;
        transition: .5s;
        img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    }
    .caption{
        font-size: 13px;
        font-style: normal;
        font-stretch: normal;
        letter-spacing: normal;
        margin: 4px 0;
        &:first-letter{
            text-transform: uppercase;
        }
    }
    .active{
        .image-border{
            border: 10px solid #395781;
        }
    }
    @media(max-width: 767px){
        .image-border{
            width: 120px;
            height: 120px;
        }
    }
</style>