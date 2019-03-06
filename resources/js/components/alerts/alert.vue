<template>
    <transition name="alert">
    <div class="alert" v-if="alertShow">
        <slot></slot>
    </div>
    </transition> 
</template>

<script>
export default {
    props: ['alertShow']
}
</script>

<style lang="scss" scoped>
.alert{
    width: 120px;
    height: auto;
    position: absolute;
    top: 40px;
    right: 0;
    background-color: #ca6767;
    color: #fff;
    opacity: 1;
    z-index: 99999;
    text-align: center;
    padding: 5px;
}
.alert-enter-active, .alert-leave-active {
  transition: opacity 0.5s;
}
.alert-enter, .alert-leave-to {
  opacity: 0;
}
</style>

