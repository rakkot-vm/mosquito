<template>
    <section id="tabs">
        <div class="container">
            <tab
                v-for="tab in $store.state.home.sec3_acc.accordionTabs"
                :key="tab.id"
                :tab="tab">
            </tab>
        </div>
    </section>
</template>


<script>
export default{
    name: 'Tabs',
    components: {
        Tab: () => import('./Tab.vue')
    },
}
</script>

<style lang="scss">
.content{
    ul{
        list-style-type: disc;
        padding-left: 20px;
    }
}
</style>
