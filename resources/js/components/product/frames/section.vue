<template>
    <div class="profiles">
        <profile 
            v-for="profile in $store.state.products.attributes[0].attribute_values" 
            :key='profile.id' 
            :profile="profile"
            @click.native='getImageURL(profile.border_img)'
        ></profile>
    </div>
</template>


<script>
export default{
    name: 'profiles',
    components: {
        Profile: () => import('./item.vue')
    },
    methods: {
        getImageURL: function (image){
            this.$store.state.selectedProduct.frame.image = image;
            /*this.$emit('getImageURL', image)*/
        }
    },
    mounted() {
        this.getImageURL(this.$store.state.products.img)
    },
    
}
</script>


<style scoped lang="scss">
.profiles{
    display: flex;
    flex-wrap: wrap;
    margin-left: -5px;
    margin-right: -5px;
    margin-top: 56px;
}
</style>