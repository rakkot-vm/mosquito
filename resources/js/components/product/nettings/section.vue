<template>
    <div class="nettings-section" v-if="this.$store.state.getJsonHome">
        <h3 class="title">Moskitonetz-Tuch</h3>
        <div class="nettings-grid">
            <netting
                v-for="netting in $store.state.products.attributes[1].attributeValues"
                :key="netting.id"
                :netting="netting"
            ></netting>
        </div>
    </div>
</template>


<script>
export default{
    name: 'nettings',
    components: {
        netting: () => import('./item.vue')
    }
}
</script>


<style scoped lang="scss">
    .nettings-section{
        margin-top: 36px;
    }
    .nettings-grid{
        display: flex;
        flex-wrap: wrap;
        margin-left: -5px;
        margin-right: -5px;
    }
    .title{
        font-size: 16px;
    }
    @media(max-width: 767px){
        .nettings-section{
            margin-top: 20px;
        }
    }
</style>