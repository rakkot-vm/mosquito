<template>
    <div>
        <div class="container">
            <form @submit.prevent="validateBeforeSubmit">
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
                                <li>
                                    <input type="text" 
                                        v-validate="'required|alpha|min:1'" 
                                        name="first-name" placeholder="Vorname" 
                                        v-model="$store.state.payment.first_name">
                                    <span v-show="errors.has('first-name')" class="help is-danger">This field is required!</span>
                                </li>
                                <li>
                                    <input type="text" 
                                        v-validate="'required|alpha|min:1'" 
                                        name="last-name" 
                                        placeholder="Nachname" 
                                        v-model="$store.state.payment.last_name">
                                    <span v-show="errors.has('last-name')" class="help is-danger">This field is required!</span>
                                </li>
                            </ul>
                        </div>

                        <div class="contact-information">
                            <p class="title-form">Ihre Kontaktinformationen:</p>
                            <ul>
                                <li>
                                    <input type="text" 
                                        v-validate="'required|numeric|min:9'"
                                        name="phone"
                                        placeholder="Telefon (min 9 character)"
                                        v-model="$store.state.payment.phone">
                                    <span v-show="errors.has('phone')" class="help is-danger">{{ errors.first('phone') }}</span>
                                </li>
                                <li>
                                    <input type="text" 
                                        v-validate="'required|email'"
                                        name="email"
                                        placeholder="E-mail adresse"  
                                        v-model="$store.state.payment.email">
                                    <span v-show="errors.has('email')" class="help is-danger">{{ errors.first('email') }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="address">
                            <p class="title-form">Ihre Adresse:</p>
                            <ul>
                                <li>
                                    <input type="text" 
                                        v-validate="'required|alpha'"
                                        name="Land"
                                        placeholder="Land" 
                                        v-model="$store.state.payment.land">
                                    <span v-show="errors.has('Land')" class="help is-danger">{{ errors.first('Land') }}</span>
                                </li>
                                <li>
                                    <input type="text" 
                                        v-validate="'required|numeric'"
                                        name="Index"
                                        placeholder="Postleitzahl" 
                                        v-model="$store.state.payment.index">
                                    <span v-show="errors.has('Index')" class="help is-danger">{{ errors.first('Index') }}</span>
                                </li>
                                <li>
                                    <input type="text" 
                                        v-validate="'required|alpha'"
                                        name="city"
                                        placeholder="Stadt" 
                                        v-model="$store.state.payment.city">
                                    <span v-show="errors.has('city')" class="help is-danger">{{ errors.first('city') }}</span>
                                </li>
                                <li>
                                    <input type="text" 
                                        v-validate="'required|alpha'"
                                        name="street"
                                        placeholder="Straße" 
                                        v-model="$store.state.payment.street">
                                    <span v-show="errors.has('street')" class="help is-danger">{{ errors.first('street') }}</span>
                                </li>
                                <li>
                                    <input type="text" 
                                        v-validate="'required|numeric|max:4'"
                                        name="house"
                                        placeholder="Hausnummer" 
                                        v-model="$store.state.payment.house">
                                    <span v-show="errors.has('house')" class="help is-danger">{{ errors.first('house') }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="order-details">
                    <ul>
                        <li @click="checkbox3 = !checkbox3; $store.state.payment.private_policy = checkbox3">
                            <div class="checkbox">
                                <div class="check" v-if="checkbox3"></div>
                                <input type="checkbox" 
                                    class="checkbox-hide"
                                    name="policy"
                                    v-validate="'required'"
                                    :checked="checkbox3">
                                    
                            </div>
                            
                            <span class="policy">
                                Mit deiner Bestellung erklärst du dich mit unseren
                                Allgemeinen Geschäftsbedingungen und 
                                Widerrufsbestimmungen einverstanden.</span>
                            <span v-show="errors.has('policy')" class="help is-danger">{{ errors.first('policy') }}</span>
                        </li>
                    </ul>
                </div>
                <button class="btn-darkblue">
                    <span>Jeztz Zahlungspflichtig Bestellen</span>
                </button>

                <input type="hidden" id="resultStripe" v-model="$store.state.resultId">
            </form>
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
        }
    },
    components:{
        AdvantageSection: () => import('./../components/sections/Advantage.vue'),
        CheckBox: () => import('./../components/elements/Checkbox.vue'),
        StripePopup: () => import('../components/stripe/index.vue')
    },
    methods:{
        validateBeforeSubmit() {
            this.$validator.validateAll().then((result) => {
                if (result) {
                    // eslint-disable-next-line
                    /* alert('Form Submitted!'); */
                    this.$store.dispatch('postStore');
                    if( this.$store.state.stripeId != "" ){
                        this.$store.state.popupStripe = true;
                        document.body.style.overflow = 'hidden';
                    }
                    this.stripeFunc();
                    return;
                } else {
                    /* alert('Correct them errors!'); */
                }
                    
            });
        },
        /* postForm(){
            if(this.formValidate){
                this.$store.dispatch('postStore');
                if( this.$store.state.stripeId != "" ){
                    this.$store.state.popupStripe = true;
                    document.body.style.overflow = 'hidden';
                }
            }
            this.stripeFunc();
        }, */
        /* validPhone(){
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
        }, */
        /* validateForm(){
            if( this.valid.email && this.valid.phone && this.checkbox3 && this.$store.state.countCart != 0){
                this.formValidate = true;
            } else {
                this.formValidate = false;
            }
        }, */
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