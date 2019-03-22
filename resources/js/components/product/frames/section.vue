<template>
    <div class="profiles">
        <profile 
            v-for="(profile, index) in $store.state.products.attributes.attr_1.attributeValues" 
            :key='index' 
            :profile="profile"
        ></profile>
    </div>
</template>


<script>
export default{
    name: 'profiles',
    components: {
        Profile: () => import('./item.vue')
    }
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
@media(max-width: 767px){
    .profiles{
        margin-top: 20px;
    }
}
</style>