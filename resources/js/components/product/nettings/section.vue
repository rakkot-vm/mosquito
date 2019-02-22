<template>
    <div class="nettings-section">
        <h3 class="title">Moskitonetz-Tuch</h3>
        <div class="nettings-grid">
            <netting
                v-for="netting in nettings"
                :key="netting.id"
                :netting="netting"
            ></netting>
        </div>
    </div>
</template>


<script>
export default{
    name: 'nettings',
    data () {
        return{
            nettings:[
                {
                    id: 0,
                    title: 'Schwarz',
                    imageURL: '#'
                    
                },
                {
                    id: 1,
                    title: 'Grau',
                    imageURL: '#'
                }
            ]
        }
    },
    components: {
        netting: () => import('./item.vue')
    }
}
</script>


<style scoped lang="scss">
    .nettings-section{
        margin-top: 56px;
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
</style>