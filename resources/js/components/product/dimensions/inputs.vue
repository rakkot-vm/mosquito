<template>
    <div class="dimansion">
        <span>{{this.dimansion.text}}</span>
        <input type="text" v-model="this.input">
    </div>
</template>

    
<script>
export default{
    data () {
        return{
            input: "",
        }
    },
    props: ["text"],
    methods: {
        getDimansion: function(){
            this.$emit()
        }
    }
}
</script>


<style scoped lang="scss">
    .dimantion{
          background-color: #395781;
    }
</style>