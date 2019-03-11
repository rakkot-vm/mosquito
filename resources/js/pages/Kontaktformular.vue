<template>
    <div>
        <div class="container" style="padding-bottom: 40px">
            <h1 v-html="$store.state.page.kontaktformular.title"></h1>
            <div v-html="$store.state.page.kontaktformular.content"></div>
        </div>
    </div>
</template>

<script>
export default {
    mounted(){
        this.$store.dispatch('getDataKontaktformular')
    }
}
</script>
