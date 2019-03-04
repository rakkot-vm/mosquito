<template>
    <transition name="fade">
        <div class="darkback" >
            <div class="popup">
                <slot></slot>
            </div>
        </div>
    </transition>
</template>


<script>
export default{
}
</script>


<style scoped lang="scss">
.darkback{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.59);
    z-index: 99999;
}
.popup{
    width: 580px;
    min-height: 200px;
    margin: 20vh auto;
    padding: 65px 40px 49px;
    background-color: #fff;
    position: relative;
}
.fade-enter-active, .fade-leave-active {
  transition: opacity .5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
</style>