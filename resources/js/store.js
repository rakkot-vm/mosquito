import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'
import VueAxios from 'vue-axios'

Vue.use(Vuex)
Vue.use(VueAxios, axios)

export default new Vuex.Store({
  state: {
      getJsonHome: false,

      viewImg: null,
      popupDimension1: false,
      popupDimension2: false,
      popupDimension3: false,
      popupDimension4: false,
      popupCart: false,
      popupStripe: false,
      showTablets: false,
      productPrice: 0,
      countCart: 0,
      stripeId: "",
      resultId: "",
      popupStripeContent: true,
      storageCookie: false,

      cart: [],

      page: {
          faq:{
            "title": "Title",
            "content": "Content"
          },
          kontaktformular:{
            "title": "Title",
            "content": "Content"
          }
      },

      payment:{
        "amount": "52",
        "first_name": "",
        "last_name": "",
        "phone": "",
        "email": "",
        "land": "",
        "index": "",
        "city":	"",
        "street": "",
        "house": "",
        "client_type": "client",
        "private_policy": 0
      },
      
      selectedProduct:{
        "id":"1",
        "count":"1",
        "attributes" : {
          "border" : '1',
          "net" : '7',
          "spec": '9'
        },
        "adds" : {
            "weight" : "20",
            "height" : "20",
            "deep" : "20",
            "holes" : "true"
        },
      },
      
      home: {
          "sec1_title": {
            "value": ""
          },
          "sec1_text": {
            "value": ""
          },
          "sec1_img": {
            "value": ""
          },
          "sec1_img1": {
            "value": ""
          },
          "sec1_img2": {
            "value": ""
          },
          "sec1_img3": {
            "value": ""
          },
          "sec1_img4": {
            "value": ""
          },
          "sec2_text": {
            "value": null
          },
          "sec2_textWidth": {
            "value": null
          },
          "sec2_infoWidth": {
            "id": null,
            "value": null
          },
          "sec2_popupWidth": {
            "id": null,
            "value": null
          },
          "sec2_textHeight": {
            "id": null,
            "value": null
          },
          "sec2_infoHeight": {
            "id": null,
            "value": null
          },
          "sec2_popupHeight": {
            "id": null,
            "value": null
          },
          "sec2_textDeep": {
            "id": null,
            "value": null
          },
          "sec2_infoDeep": {
            "id": null,
            "value": null
          },
          "sec2_popupDeep": {
            "id": null,
            "value": null
          },
          "sec2_textHols": {
            "id": null,
            "value": null
          },
          "sec2_infoHols": {
            "id": null,
            "value": null
          },
          "sec2_popupHols": {
            "id": null,
            "value": null
          },
          
          "sec3_acc": {
            "id": 32,
            "value": null,
            "accordionTabs": [
              
            ]
          },
          
          "sec4_title": {
            "id": null,
            "value": null
          },
          "sec4_text": {
            "id": null,
            "value": null
          },
          "sec45_title": { 
              "id": null, 
              "value": null 
          }, 
          "sec45_img1": { 
              "id": null, 
              "value": null 
          }, 
          "sec45_titleImg1": { 
              "id": null, 
              "value": null 
          }, 
          "sec45_altImg1": { 
              "id": null, 
              "value": null 
          }, 
          "sec45_img2": {
              "id": null, 
              "value": null 
          }, 
          "sec45_titleImg2": { 
              "id": null, 
              "value": null 
          }, 
          "sec45_altImg2": { 
              "id": null, 
              "value": null 
          }, 
          "sec45_img3": { 
              "id": null, 
              "value": null 
          }, 
          "sec45_titleImg3": { 
              "id": null, 
              "value": null 
          }, 
          "sec45_altImg3": { 
              "id": null, 
              "value": null 
          }, 
          "sec45_img4": { 
              "id": null, 
              "value": null 
          }, 
          "sec45_titleImg4": { 
              "id": null, 
              "value": null 
          }, 
          "sec45_altImg4": { 
              "id": null, 
              "value": null 
          },
          
          "sec5_img1": {
            "id": null,
            "value": ""
          },
          "sec5_title1": {
            "id": null,
            "value": ''
          },
          "sec5_img2": {
            "id": null,
            "value": ""
          },
          "sec5_title2": {
            "id": null,
            "value": ''
          },
          "sec5_img3": {
            "id": null,
            "value": ""
          },
          "sec5_title3": {
            "id": null,
            "value": ''
          },
          "sec5_img4": {
            "id": null,
            "value": ""
          },
          "sec5_title4": {
            "id": null,
            "value": ''
          },
      },
      products: [
          {
                "id": null,
                "title": "",
                "img": "#",
                "price": null,
                "doc": "#",
                "docName": "TEst doc",
                "attributes": {
                    "attr_1":{
                        "id": 1,
                        "title": "Border",
                        "attributeValues": [
                            {
                                "id": '1',
                                "additional":{
                                  "ral":{
                                    "title": null,
                                    "value": null
                                  }
                                },                         
                                "title": null,
                                "preview_img": null,
                                "border_img": null,
                                "price": 0,
                            }
                        ]
                    },
                    "attr_2":{
                        "id": 2,
                        "title": "Nets",
                        "attributeValues": [
                            {
                              "id": '1',
                              "title": "null",
                              "preview_img": null,
                              "border_img": null,
                              "price": 0,
                            },
                            {
                              "id": null,
                              "title": "null",
                              "preview_img": null,
                              "border_img": null,
                              "price": 0,
                            }
                        ]
                    },
                    "attr_3":{
                        "id": 3,
                        "title": "Special parameters",
                        "attributeValues": [
                            {
                              "id": null,
                              "title": null,
                              "preview_img": null,
                              "border_img": null,
                              "price": null,
                            }
                        ]
                    }
                }
           },
      ],
      common:{
          bodyOverflow: true,
          "logo_img": "",
          "logo_alt": "",
          "logo_title": "",
          "favicon": "",
          "site_title": "",
          "phone_1": "",
          "email_1": "",
          "work_hours_1": "",
          "social_instagram": "",
          "social_facebook": "",
          "social_youtube": "",
          "privacy_policy": "",
          "stripe": {
            "currency": "eur",
            "stripe_publish_key": "pk_test_AcmqjKi2CpY5PgKpGDwKp8SV"
          }
      },
      
  },
  mutations: {
      updateCommon(state, res){
          state.common = res
      },
      updateHome(state, res){
          state.home = res;
          state.getJsonHome = true;
      },
      updateFaq(state, res){
        state.page.faq = res;
      },
      updateKontaktformular(state, res){
        state.page.kontaktformular = res;
      },
      updateProducts(state, res){
          state.products = res
      },
      updateProductPrice(state, res){
          state.productPrice = res.amount
      },
      COUNT_PRODUCTS_IN_CART(state){
         state.countCart += parseInt(state.selectedProduct.count);
      },
      ADD_PRODUCT_TO_CART(state){
        state.selectedProduct.title = state.products.title;
        state.selectedProduct.image = state.viewImg;
        state.selectedProduct.price = state.productPrice;
         
        let clone = JSON.stringify(state.selectedProduct);
        state.cart.push(JSON.parse(clone));
      },
      UPDATE_PRODUCTS_AMOUNT(state, res){
        state.payment.amount = res.amount;
      },
      /* GET_CLIENT_KEY(state, res){
        state.stripeId = res.client_key;
      } */
  },
  actions: {
      getDataCommon: function(context){
          axios.get('http://vetalya-mosquito.urich.work/api/common', {crossdomain: true})
            .then(response => {
                context.commit('updateCommon', response.data)    
            })
            .catch(e => {
                this.errors.push(e)
            })  
      },
      getDataHome: function(context){
          axios.get('http://vetalya-mosquito.urich.work/api/home', {crossdomain: true})
            .then(response => {
                context.commit('updateHome', response.data)    
            })
            .catch(e => {
                this.errors.push(e)
            })
      },
      getDataFaq: function(context){
        axios.get('http://vetalya-mosquito.urich.work/api/pages/1', {crossdomain: true})
          .then(response => {
              context.commit('updateFaq', response.data)    
          })
          .catch(e => {
              this.errors.push(e)
          })
      },
      getDataKontaktformular: function(context){
        axios.get('http://vetalya-mosquito.urich.work/api/pages/13', {crossdomain: true})
          .then(response => {
              context.commit('updateKontaktformular', response.data)    
          })
          .catch(e => {
              this.errors.push(e)
          })
      },
      getDataProducts: function(context){
          axios.get('http://vetalya-mosquito.urich.work/api/products/1', {crossdomain: true})
            .then(response => {
                context.commit('updateProducts', response.data)    
            })
            .catch(e => {
                this.errors.push(e)
            })
      },
      calcProduct: function(context){
          let calcProd = JSON.stringify(context.state.selectedProduct);
          axios.get('http://vetalya-mosquito.urich.work/api/orders/calc-product?products_json=' + calcProd, 
            
            {crossdomain: true}
          )
          .then(response => {
            context.commit('updateProductPrice', response.data);
          })
          /* .catch(e => {
              this.errors.push(e)
          }) */
      },
      calcProducts: function(context){
          let calcProducts = JSON.stringify(context.state.cart);
          axios.get('http://vetalya-mosquito.urich.work/api/orders/calc-all-products?products_json=' + calcProducts, 
            
            {crossdomain: true}
          )
          .then(response => {
            context.commit('UPDATE_PRODUCTS_AMOUNT', response.data);
          })
      },
      postStore: function(context){
          let paymentObj = JSON.stringify(context.state.payment);
          paymentObj = paymentObj.replace( /{|}|"/g, "");
          paymentObj = paymentObj.replace( /:/g, "=");
          paymentObj = paymentObj.replace( /,/g, "&");
          
          for(var i = 0; i < context.state.cart.length; i++){
            delete context.state.cart[i].title;
            delete context.state.cart[i].image;
            delete context.state.cart[i].price;
          }

          let cartObj = JSON.stringify(context.state.cart);
          
            var data = null;
            var xhr = new XMLHttpRequest();

            xhr.open("POST", "http://vetalya-mosquito.urich.work/api/orders?" + paymentObj + "&products_json=" + cartObj, false);

            xhr.send(data);

            // eslint-disable-next-line
            if (xhr.status != 200) {
              // обработать ошибку
              // eslint-disable-next-line
              console.log( xhr.status + ': ' + xhr.statusText ); // пример вывода: 404: Not Found
            } else {
              // вывести результат
              let res = JSON.parse(xhr.responseText);
              context.state.stripeId = res.client_key; // responseText -- текст ответа.
            }
      },
      postConfirm: function(context){
        // eslint-disable-next-line
            var context = context;
            setTimeout(function(){
              let confirm = document.getElementById('resultStripe').value;
  
              var data = null;
              var xhr = new XMLHttpRequest();
  
              xhr.open("POST", "http://vetalya-mosquito.urich.work/api/orders/confirm?payment_id=" + confirm, false);
  
              xhr.send(data);
  
              // eslint-disable-next-line
              if (xhr.status != 200) {
                // обработать ошибку
                // eslint-disable-next-line
                alert('Not paid');
                /*console.log( xhr.status + ': ' + xhr.statusText );*/ // пример вывода: 404: Not Found
              } else {
                // вывести результат
                /*let res = JSON.parse(xhr.responseText);*/
                context.state.countCart = 0;
                context.state.cart = [];
                context.state.popupStripeContent = false;
                /* context.state.popupStripe = false; */
                /*context.state.stripeId = res.client_key;*/ // responseText -- текст ответа.
              }
            }, 2000)  
      }
  }
})
