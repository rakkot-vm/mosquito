<template>
    <div class="nettings-section">
        <h3 class="title">Moskitonetz-Tuch</h3>
        <div class="nettings-grid">
            <netting
                v-for="(netting, index) in $store.state.products.attributes.attr_2.attributeValues"
                :key="index"
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