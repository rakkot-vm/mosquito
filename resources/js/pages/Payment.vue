<template>
    <div>
        <div class="container">
            <div class="payment-method">
                <h1 class="title underline">Zahlungsweise wählen</h1>
                <ul>
                    <li><img src="../../static/img/bank-card/PayPal-big.png" alt=""></li>
                    <li><img src="../../static/img/bank-card/Group-card.png" alt=""></li>
                </ul>
            </div>

            <div class="order-details">
                <h2 class="title underline">Bitte überprüfen Sie Angaben für Ihre Bestellung</h2>
                <ul>
                    <li @click="checkbox1 = !checkbox1; checkbox2 = !checkbox2">
                        <check-box :checkbox="checkbox1"></check-box>
                        <span>Privatkunde</span>
                    </li>

                    <li @click="checkbox1 = !checkbox1; checkbox2 = !checkbox2">
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
                            <li><input type="text" placeholder="Vorname"></li>
                            <li><input type="text" placeholder="Nachname"></li>
                        </ul>
                    </div>

                    <div class="contact-information">
                        <p class="title-form">Ihre Kontaktinformationen:</p>
                        <ul>
                            <li><input type="text" placeholder="Telefon"></li>
                            <li><input type="text" placeholder="E-mail adresse"></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="address">
                        <p class="title-form">Ihre Adresse:</p>
                        <ul>
                            <li><input type="text" placeholder="Land"></li>
                            <li><input type="text" placeholder="Postleitzahl"></li>
                            <li><input type="text" placeholder="Stadt"></li>
                            <li><input type="text" placeholder="Straße"></li>
                            <li><input type="text" placeholder="Hausnummer"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="btn-darkblue"><span>Jeztz Zahlungspflichtig Bestellen</span></div>
        </div>
        <advantage-section></advantage-section>
    </div>
</template>

<script>
export default{
    data () {
        return{
            checkbox1: true,
            checkbox2: false
        }
    },
    components:{
        AdvantageSection: () => import('./../components/sections/Advantage.vue'),
        CheckBox: () => import('./../components/elements/Checkbox.vue')
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