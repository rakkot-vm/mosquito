<template>
   
        <div class="checkbox">
            <div class="check" v-if="this.checkbox"></div>
            <input type="checkbox" class="checkbox-hide" :checked="checkbox">
        </div>
    
</template>


<script>
export default{
    name: 'checkbox',
    props: ['checkbox']
}
</script>


<style scoped lang="scss">
    .checkbox{
        width: 15px;
        height: 15px;
        background-color: #395781;
        padding: 2px;
        position: absolute;
        left: -32px;
        top: 38%;
        .check{
            width: 11px;
            height: 7px;
            border-left: 1px solid #fff;
            border-bottom: 1px solid #fff;
            transform: rotate(-46deg);
        }
    }
    input[type="checkbox"]{
        position: absolute;
        left: 0;
        top: 0;
        width: 16px;
        height: 16px;
    }
    @media(max-width: 767px){
        .checkbox{
            left: 0;
        }
    }
</style>