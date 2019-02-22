<template>
    <footer id="footer1">
       <div class="container">
            <div class="footer-top">
                <div class="footer__columns row">
                   <div class="col-md-4 col-xs-12">
                       <h3 class="caption">
                           Kontakt & Support
                       </h3>
                       <div>
                           <p>Montag bis Freitag von 08:00 bis 18:00 Uhr</p>
                           <p><img src="../../../static/img/icons/telephone.svg" alt="" class="icon--mr"><span>08178 / 932 932</span></p>
                           <p><img src="../../../static/img/icons/envelope.svg" alt="" class="icon--mr"><span>example@domen.com</span></p>
                           <p><a href="#">FAQ</a> und <a href="#">Kontaktformular</a></p>
                       </div>
                   </div>
                   <div class="col-md-4 col-xs-12">
                       <h3 class="caption">
                           Zahlungsarten
                       </h3>
                       <div class="flex">
                           <div class="footer__frame-image">
                               <img src="../../../static/img/bank-card/VISA.png" alt="">
                           </div>
                           <div class="footer__frame-image">
                               <img src="../../../static/img/bank-card/PayPal.png" alt="">
                           </div>
                           <div class="footer__frame-image">
                               <img src="../../../static/img/bank-card/Mastercard.png" alt="">
                           </div>
                       </div>
                   </div>
                   <div class="col-md-4 col-xs-12">
                       <h3 class="caption">
                           Lieferzeiten & Versand
                       </h3>
                       <div class="flex">
                           <div class="footer__frame-image">
                               <img src="../../../static/img/brands/dhl.png" alt="">
                           </div>
                           <div class="footer__frame-image">
                               <img src="../../../static/img/brands/dpd.png" alt="">
                           </div>
                           <div class="footer__frame-image">
                               <img src="../../../static/img/brands/ups.png" alt="">
                           </div>
                           <div class="footer__frame-image">
                               <img src="../../../static/img/brands/spedition.png" alt="">
                           </div>
                       </div>
                   </div>
                </div>
            </div>
            <hr>
            <div class="footer-bottom">
                <div class="social-links">
                    <a href="#" title="instagram"><img src="../../../static/img/icons/instagram.svg" alt=""></a>
                    <a href="#" title="facebook"><img src="../../../static/img/icons/facebook.svg" alt=""></a>
                    <a href="#" title="youtube"><img src="../../../static/img/icons/youtube.svg" alt=""></a>
                </div>
                <div class="copyright">
                    <p><span>© Copyright Website 2018</span></p>
                </div>
            </div>
       </div>
    </footer>
</template>

<script>
export default{
  name: 'footer1',
}
</script>

<style scoped lang="scss">
footer{
    background-color: #f1f1f1;
    position: relative;
    padding: 30px 0 12.9px;
    width: 100%;
    .footer__columns{
        display: flex;
        flex-wrap: wrap;
        margin: 0 -15px;
    }
    .col{
        width: 25%;
        min-height: 50px;
        padding: 0 15px;
    }
    .caption{
        color: #395781;
        margin-bottom: 29px;
    }
    hr{
        margin: 20px 0;
    }
    .caption{
        font-size: 24px;
        line-height: 1.46;
    }
}
.footer__frame-image{
    width: 66px;
    height: 66px;
    border: 1px solid #e5e5e5;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 16px;
    margin-bottom: 16px;
    img{
        max-width: 80%;
    }
}
.copyright{
    p{
        text-align: center;
        color: rgba(115, 115, 115, 0.7);;
        margin: 25px 0 0;
        font-size: 15px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: 'ProximaNova-Regular';
    }
}
.social-links{
    display: flex;
    justify-content: center;
    img{
        padding: 0 25px;
        &:hover{
            filter:contrast(.1);
        }
    }
}
    @media(max-width:1199px) {
        footer .caption{
            font-size: 20px;
            line-height: 1.36;
            margin-bottom: 24px;
        }
    }
    @media(max-width:767px) {
        footer{
            padding-top: 20px;
        }
        footer .caption{
            margin-top: 14px;
            /*&:first-child{
                margin-top: 0;
            }*/
        }
    }
</style>
