<template>
    <div 
       class="profile" 
       :class="{active: profile.id == this.$store.state.selectedProduct.attributes.border.id}" 
       @click="getData(profile.border_img, profile.id, profile.title)">
        <div class="image-border">
            <img :src="this.profile.preview_img" alt="">
        </div>
        <p class="caption">{{this.profile.title}}</p>
        <p v-if="this.profile.additional !== null"
           class="code">{{this.profile.additional.ral.title}}: {{this.profile.additional.ral.value}}</p>
    </div>
</template>


<script>
export default{
    name: "frame",
    props: ['profile'],
    methods: {
        getData: function (image, id, title){
            this.$store.state.viewImg = image;
            this.$store.state.selectedProduct.attributes.border.id = id;
            this.$store.state.selectedProduct.attributes.border.title = title;
        }
    },
    mounted() {
        this.getData(this.$store.state.products.attributes.attr_1.attributeValues[0].border_img, this.$store.state.products.attributes.attr_1.attributeValues[0].id, this.$store.state.products.attributes.attr_1.attributeValues[0].title)
    },
}
</script>


<style scoped lang="scss">
    .profile{
        padding: 0 5px;
        margin-bottom: 24px;
        cursor: pointer;
    }
    .image-border{
        border: 1px solid #a0a0a0;
        padding: 5px;
        width: 150px;
        height: 150px;
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
    .code{
        font-size: 10px;
        font-style: normal;
        font-stretch: normal;
        letter-spacing: normal;
        color: rgba(36, 36, 36, 0.75);
        text-transform: uppercase;
        margin-bottom: 0;
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
    @media(max-width:480px){
        .profile{
            width: 33.3%;
            .image-border{
                width: 100%;
                height: auto;
            }
        }
    }
    @media(max-width:380px){
        .profile{
            width: 50%;
        }
    }
</style>