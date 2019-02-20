<template>
    <div class="dimension">
        <span class="caption">{{this.text}}</span>
        <div class="field">
            <input type="text" v-model="input">
            <span class="units">mm</span>
            {{this.input}}
        </div>
    </div>
</template>

    
<script>
export default{
    props: ["text", "input"],
    methods: {
        getDimension: function(){
            this.$emit()
        }
    }
}
</script>


<style scoped lang="scss">
    .dimension{
        background-color: #395781;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 4px 34px;
        height: 37px;
        margin-bottom: 9px;
    }
    .caption{
        color: #fff;
        display: inline-block;
        width: calc(100% - 110px);
    }
    .field{
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 100%;
        width: 100px;
        background-color: #fff;
        padding: 6px 14px;
    }
    input{
        margin: 0 5px 0 0;
        padding: 0;
        height: 100%;
        border-radius: 0;
        border: 0;
        color: #242424;
        background-color: transparent;
        outline: none;
    }
</style>