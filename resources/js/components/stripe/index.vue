<template>
  <transition name="fade">
  <div class="darkback">
        <div v-if="this.$store.state.popupStripeContent" class="popup-stripe">
                <div class="close" @click="closePopup"></div>
                <h3 class="title">Enter card details</h3>
                <input id="cardholder-name" type="hidden" value="Text">
                <!-- placeholder for Elements -->
                <div id="card-element"></div>
                <button id="card-button" class="btn-darkblue" @click="responseStripe()" :data-secret="this.$store.state.stripeId">
                        Submit Payment
                </button>

                <!-- <stripe-popup></stripe-popup -->
        </div>
        <div v-else class="popup-stripe">
                <div class="close" @click="closePopup"></div>
                <h3>Thanks, payment was successful.</h3>
        </div>
  </div>
  </transition>
</template>

<script>
export default {
    methods:{
            closePopup(){
                    document.body.style.overflow = 'auto';
                    this.$store.state.popupStripe = false;
                    var thisVar = this;
                    setTimeout(function(){
                        thisVar.$store.state.popupStripeContent = true;
                    }, 1000)
                    
            },
            responseStripe(){
                /* this.$store.state.resultId = document.getElementById('resultStripe').value; */
                this.$store.dispatch('postConfirm')
            }
    }
}
</script>

<style scoped lang="scss">
.darkback{
        position: fixed;
        top: 0;
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgba(0, 0, 0, 0.4);
        z-index: 9999;
}
.popup-stripe{
        width: 480px;
        background-color: #fff;
        border: 1px solid #c7c7c7;
        padding: 40px;
        border-radius: 15px;
        position: relative;
}
#card-button{
        width: 100%;
        color: #fff;
}
#card-element{
        margin: 10px 0;
        padding: 10px 0;
        border-top: 1px solid #a2a2a2;
        height: 40px;
}
.title{
        text-align: center;
        font-size: 24px;
}
.close{
        position: absolute;
        top: 15px;
        right: 15px;
        width: 24px;
        height: 20px;
        color: #395781;
        cursor: pointer;
        opacity: 1;
        &:before, &:after{
            content: "";
            position: absolute;
            width: 100%;
            height: 2px;
            background-color: #395781;
            border-radius: 2px;
        }
        &:before{
            top: 10px;
            left: 0;
            transform: rotate(45deg)
        }
        &:after{
            bottom: 8px;
            right: 0;
            transform: rotate(-45deg)
        }
    }
.fade-enter-active, .fade-leave-active {
        transition: opacity .5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
        opacity: 0;
}
</style>
