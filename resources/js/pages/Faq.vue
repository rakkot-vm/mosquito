<template>
    <div>
        <div class="container" style="padding-bottom: 40px">
            <h1 v-html="$store.state.page.faq.title"></h1>
            <div v-html="$store.state.page.faq.content"></div>
        </div>
    </div>
</template>

<script>
export default {
    mounted(){
        this.$store.dispatch('getDataFaq')
    }
}
</script>