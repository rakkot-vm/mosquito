<template>
    <div>
        <div class="container">

            <div class="payment-method">
                <h1 class="title underline">Zahlungsweise wählen</h1>
                <ul>
                    <li><img src="../../static/img/bank-card/stripe.png" alt=""></li>
                    <!-- <li><img src="../../static/img/bank-card/Group-card.png" alt=""></li> -->
                </ul>
            </div>

            <div class="order-details">
                <h2 class="title underline">Bitte überprüfen Sie Angaben für Ihre Bestellung</h2>
                <ul>
                    <li @click="checkbox1 = !checkbox1; checkbox2 = !checkbox2; $store.state.payment.client_type = 'client' ">
                        <check-box :checkbox="checkbox1"></check-box>
                        <span>Privatkunde</span>
                    </li>

                    <li @click="checkbox1 = !checkbox1; checkbox2 = !checkbox2; $store.state.payment.client_type = 'company'">
                        <check-box :checkbox="checkbox2"></check-box>
                        <span>Geschäftskunde</span>
                    </li>
                </ul>
            </div>
            <div class="user-information row">
                <div class="col-sm-6">
                    <div class="personal-data form">
                        <p class="title-form">Ihre persönlichen Daten:</p>
                        <ul>
                            <li><input type="text" placeholder="Vorname" v-model="$store.state.payment.first_name"></li>
                            <li><input type="text" placeholder="Nachname" v-model="$store.state.payment.last_name"></li>
                        </ul>
                    </div>

                    <div class="contact-information">
                        <p class="title-form">Ihre Kontaktinformationen:</p>
                        <ul>
                            <li>
                                <input type="text" 
                                    :class="{error: !this.valid.phone}"
                                    placeholder="Telefon (min 10 character)" 
                                    @keyup="validPhone()" 
                                    v-model="$store.state.payment.phone">
                            </li>
                            <li>
                                <input type="text" 
                                    :class="{error: !this.valid.email}"
                                    placeholder="E-mail adresse" 
                                    @keyup="validEmail()" 
                                    v-model="$store.state.payment.email">
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="address">
                        <p class="title-form">Ihre Adresse:</p>
                        <ul>
                            <li><input type="text" placeholder="Land" v-model="$store.state.payment.land"></li>
                            <li><input type="text" placeholder="Postleitzahl" v-model="$store.state.payment.index"></li>
                            <li><input type="text" placeholder="Stadt" v-model="$store.state.payment.city"></li>
                            <li><input type="text" placeholder="Straße" v-model="$store.state.payment.street"></li>
                            <li><input type="text" placeholder="Hausnummer" v-model="$store.state.payment.house"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="order-details">
                <ul>
                    <li @click="checkbox3 = !checkbox3; $store.state.payment.private_policy = checkbox3">
                        <check-box :checkbox="checkbox3"></check-box>
                        <span class="policy">Mit deiner Bestellung erklärst du dich mit unseren
Allgemeinen Geschäftsbedingungen und 
Widerrufsbestimmungen einverstanden.</span>
                    </li>
                </ul>
            </div>
            <div class="btn-darkblue" @click="postForm()"><span>Jeztz Zahlungspflichtig Bestellen</span></div>

            <input type="hidden" id="resultStripe" v-model="$store.state.resultId">
        </div>
        <advantage-section></advantage-section>
        <stripe-popup v-show="$store.state.popupStripe"></stripe-popup>    
    </div>
</template>

<script>
export default{
    data () {
        return{
            checkbox1: true,
            checkbox2: false,
            checkbox3: false,
            valid: {
                phone: false,
                email: false,
            },

            formValidate: false,
        }
    },
    components:{
        AdvantageSection: () => import('./../components/sections/Advantage.vue'),
        CheckBox: () => import('./../components/elements/Checkbox.vue'),
        StripePopup: () => import('../components/stripe/index.vue')
    },
    methods:{
        postForm(){
            this.validateForm();
            if(this.formValidate){
                this.$store.dispatch('postStore');
                if( this.$store.state.stripeId != "" ){
                    this.$store.state.popupStripe = true;
                    document.body.style.overflow = 'hidden';
                }
            }
            this.stripeFunc();
        },
        validPhone(){
            // eslint-disable-next-line
            var re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
            if(re.test(this.$store.state.payment.phone)){
                this.valid.phone = true;
            } else {
                this.valid.phone = false;
            }
        },
        validEmail(){
            // eslint-disable-next-line
            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if(re.test(this.$store.state.payment.email)){
                this.valid.email = true;
            } else {
                this.valid.email = false;
            }
        },
        validateForm(){
            if( this.valid.email && this.valid.phone && this.checkbox3 && this.$store.state.countCart != 0){
                this.formValidate = true;
            } else {
                this.formValidate = false;
            }
        },
        stripeFunc(){
            setTimeout(function(){

                    // eslint-disable-next-line
                let stripe = Stripe('pk_test_AcmqjKi2CpY5PgKpGDwKp8SV', {
                    betas: ['payment_intent_beta_3']
                });

                var style = {
                    base:{
                        fontSize: "16px"
                    }
                }

                var elements = stripe.elements();
                var cardElement = elements.create('card', {style: style});
                cardElement.mount('#card-element');


                var cardholderName = document.getElementById('cardholder-name');
                var cardButton = document.getElementById('card-button');
                var clientSecret = cardButton.dataset.secret;

                cardButton.addEventListener('click', function(ev) {
                    stripe.handleCardPayment(
                        clientSecret, cardElement, {
                            source_data: {
                                owner: {name: cardholderName.value}
                            }
                        }
                    ).then(function(result) {
                        if (result.error) {
                            // Display error.message in your UI.
                        } else {
                            // The payment has succeeded. Display a success message.
                            document.getElementById('resultStripe').value = result.paymentIntent.id;
                        }
                    });
                });
            }, 1000)
        }
    },
    mounted(){
        let stripeScript = document.createElement('script')
        stripeScript.setAttribute('src', 'https://js.stripe.com/v3/')
        document.head.appendChild(stripeScript);

    },
}
</script>

<style scoped lang="scss">
    .title{
        color: #242424;
    }
    .order-details{
        ul{
            display: flex;
            flex-wrap: wrap;
        }
        li{
            position: relative;
            padding-left: 35px;
            margin-right: 177px;
            cursor: pointer;
            .checkbox{
                left: 0;
                top: 4px;
            }
        }
    }
    .title-form{
        font-family: 'Proxima-Nova-Bold';
        color: #000000;

    }
    .payment-method{
        margin-bottom: 60px;
        ul{
            display: flex;
            flex-wrap: wrap;
            li{
                width: 150px;
                height: 150px;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                padding: 15px;
                border: 1px solid #e5e5e5;
                margin-right: 142px;
                margin-bottom: 20px;
                img{
                    width: 100%;
                    height: 100%;
                    object-fit: contain;
                }
            }
        }
    }
    .user-information{
        margin-top: 50px;
        .form{
            margin-bottom: 20px;
        }
    } 
    .btn-darkblue{
        width: 376px;
        margin: 50px auto 106px;
    }
    .policy{
        width: 370px; 
        display: inline-block;
        color: rgba(36, 36, 36, 0.53);
        font-family: "Proxima-Nova-Light";
        font-size: 14px;
    }
    @media(max-width:767px){
        .payment-method{
            margin-bottom: 20px;
            ul{
                li{
                    width: 100px;
                    height: 100px;
                    margin-right: 20px;
                }
            }
        }
    }
    @media(max-width: 480px){
        .btn-darkblue{
            width: 100%;
            margin: 30px auto 80px;
        }
        .user-information{
            input[type="text"]{
                width: 100%;
            }
        }
        .title{
            font-size: 20px;
        }
    }
</style>