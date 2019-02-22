<template>
    <div>
       <div id="registration-page">
           <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 registration__column--padding_side">
                        <h3 class="title">Ich bin bereits Kunde</h3>
                        <p>
                            Sie haben schon einmal bei uns bestellt? Herzlichen Dank, dass Sie uns ein weiteres Mal Ihr Vertrauen schenken. Auf der nächsten Seite haben Sie die Möglichkeit Ihre Lieferanschrift zu ändern, oder eine neue Lieferanschrift hinzuzufügen, sowie Ihre Zahlungsart auszuwählen.
                        </p>
                        <form action="" class="form-autorization-user">
                            <div class="row">
                               <div class="col-12">
                                   <input type="text" class="input-text" placeholder="e-mail adresse">
                               </div>
                               <div class="col-12">
                                   <input type="text" class="input-text" placeholder="passwort">
                               </div>
                            </div>

                            <button class="btn btn-darkblue">
                                <span>Anmelden</span>
                            </button>
                            <div>
                                <a href="#" class="forgot_password">
                                    <span>Passwort vergessen?</span>
                                </a>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 col-sm-12 registration__column--padding_side">
                        <h3 class="title">Ich bin ein neuer Kunde</h3>
                        <p>
                            Durch Ihre Anmeldung bei uns sind Sie in der Lage schneller zu bestellen, kennen jederzeit den Status Ihrer Bestellungen und haben immer eine aktuelle Übersicht über Ihre bisher getätigten Bestellungen.
                        </p>
                        <form action="">
                            <label for="" class="registration__label" @click="checkbox1 = !checkbox1">
                                <Checkbox :checkbox="checkbox1"></Checkbox>
                                <span>Komfortabel bestellen, ohne erneutes Eintippen Ihrer Daten bei Folgebestellungen.</span>
                            </label>
                            <label for="" class="registration__label" @click="checkbox2 = !checkbox2">
                                <Checkbox :checkbox="checkbox2"></Checkbox>
                                <span>Die Möglichkeit, die ausgewählten Produkte im Warenkorb zu speichern.</span>
                            </label>
                            <label for="" class="registration__label" @click="checkbox3 = !checkbox3">
                                <Checkbox :checkbox="checkbox3"></Checkbox>
                                <span>In Ihrem Kundenkonto Ihre Rechnungen einsehen, Kundendaten ändern oder den Status Ihrer Sendung verfolgen</span>
                            </label>
                            
                            <div class="registration-buttons">
                                <button class="btn-darkblue">
                                    <span>Kundenkonto Erstellen</span>
                                </button>
                                
                                <button class="btn-grey">
                                    <span>Bestellung Ohne Kudenkonto`</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12 registration__description">
                        <p>
                            Sicherheit hat bei uns höchste Priorität: Ihre Daten schützen wir vor unbefugtem Zugriff Dritter durch den Einsatz von SSL-Verschlüsselung. Unsere Datenschutzbestimmungen finden sie hier.
                        </p>
                        <p>
                            Auch ohne Anmeldung für den Newsletter senden wir Ihnen gelegentlich Direktwerbung für, den von Ihnen bestellten ähnliche Produkte und dazu passendem Zubehör zu. Sie können der Verwendung Ihrer Daten hierzu jederzeit per E-Mail an <a href="#">service@jalousiescout.de</a> oder nach Empfang einer E-Mail mittels des in jedem Mailing enthaltenem Abmeldelinks widersprechen, ohne dass hierfür andere als die Übermittlungskosten nach den Basistarifen entstehen. Weitere Informationen dazu finden <a href="#">Sie in unseren Datenschutzerklärung</a>.
                        </p>
                    </div>
                </div>
            </div>
       </div>
       <advantage-section></advantage-section>
       <div class="container">
          <div class="wrapper">
            <h1 class="h-underline">Zahlungsweise wählen</h1>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
            </div>
          </div>
       </div>
    </div>
</template>


<script>
export default{
    name: 'registration',
    components: {
        AdvantageSection: () => import('./../components/sections/Advantage.vue'),
        Checkbox: () => import('./../components/elements/Checkbox.vue'),
    },
    data () {
        return{
            checkbox1: true,
            checkbox2: false,
            checkbox3: false
        }
    }
}
</script>


<style scoped lang="scss">
    .registration__column--padding_side{
        padding: 0 100px;
        position: relative;
        &:first-child:after{
            content: "";
            position: absolute;
            right: 0;
            top: 40px;
            height: 90%;
            width: 1px;
            background-color: #878787;
        }
    }
    .registration__description{
        padding: 64px 186px 41px;
        p{
            color: rgba(36, 36, 36, 0.7);
            font-size: 16px;
            font-family: "Proxima-Nova-Light";
        }
    }
    #registration-page{
        .title{
            text-align: center;
            color: #395781;
            font-family: "Exo2-Bold";
            font-size: 24px;
            margin-bottom: 30px;
        }
    }
    .registration__label{
        position: relative;
        span{
            font-family: "Proxima-Nova-Regular";
            line-height: normal;
        }
    }
    .form-autorization-user{
        margin-top: 35px;
        .btn{
            margin-top: 45px;
        }
    }
    .registration-buttons{
        margin-left: -34px;
        margin-top: 28px;
        display: flex;
        justify-content: space-between;
        width: calc(100% + 114px);
    }
    @media(max-width: 1199px){
        .registration__column--padding_side{
            padding: 0 70px;
            &:first-child:after{
                height: 96%;
            }
        }
        .registration-buttons{
            flex-direction: column;
            width: 100%;
            .btn-grey{
                margin-top: 6px;
                span{
                    font-size: 14px;
                }
            }
        }
        .registration__description{
            padding: 64px 15px 32px;
        }
    }
    @media(max-width: 767px){
        .registration__column--padding_side{
            padding: 0 15px;
            &:first-child{
                padding-bottom: 56px;
            }
            &:first-child:after{
                display: none;
            }
        }
        .registration-buttons{
            margin-left: 0;
        }
        .registration__label{
            padding-left: 30px;
        }
        .form-autorization-user .btn{
            margin-top: 20px;
        }
    }
    @media(max-width:479px){
        .registration__description p{
            font-size: 14px;
        }
        .registration__column--padding_side{
            &:first-child{
                padding-bottom: 56px;
            }
        }
    }
</style>