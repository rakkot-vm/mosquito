import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'
import VueAxios from 'vue-axios'

Vue.use(Vuex)
Vue.use(VueAxios, axios)

export default new Vuex.Store({
  state: {
      selectedProduct:{
        title: '',
        frame: {
            image: '',
            title: '',
            code: ''
        },
        netting: {
            image: '',
            title: ''
        },
        dimensions: {
            width: 20,
            height: null,
            deep: null,
            hole: true
        },
        count: 0,
        priceRange: {
            
        }
      },
      
      home: {
          "sec1_title": {
            "id": null,
            "value": ""
          },
          "sec1_text": {
            "id": null,
            "value": ""
          },
          "sec1_img": {
            "id": null,
            "value": ""
          },
          "sec1_img1": {
            "id": null,
            "value": ""
          },
          "sec1_img2": {
            "id": null,
            "value": ""
          },
          "sec1_img3": {
            "id": null,
            "value": ""
          },
          "sec1_img4": {
            "id": null,
            "value": ""
          },
          
          "sec2_text": {
            "id": null,
            "value": null
          },
          "sec2_textWidth": {
            "id": null,
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
            "id": 1,
            "title": "",
            "img": "#",
            "price": null,
            "created_at": null,
            "updated_at": null,
            "attributes": [
                {
                    "id": 1,
                    "product_id": 1,
                    "title": null,
                    "created_at": null,
                    "updated_at": null,
                    "attribute_values": [
                        {
                            "id": 1,
                            "attribute_id": 1,
                            "title": null,
                            "preview_img": null,
                            "border_img": null,
                            "price": null,
                            "created_at": null,
                            "updated_at": null
                        }
                    ]
                }
            ]
        }
      ],
      common:{
          bodyOverflow: true,
          showTablets: false,
          popupShow: false,
      },
      
      
      "sec3_acc": {
        "id": 32,
        "value": null,
        "accordionTabs": [
          {
            "sort": null,
            "title": "Test acc tab 1",
            "img": "imgs/zNHWmBc1LQRKyKaerHdjwMEuCVyxGExF7CoKkkuZ.jpeg",
            "imgAlt": "sadasd",
            "imgTitle": "sadsdadsa",
            "text": "adsdsadsadsa"
          },
            {
            "sort": null,
            "title": "Test acc tab 1",
            "img": "imgs/zNHWmBc1LQRKyKaerHdjwMEuCVyxGExF7CoKkkuZ.jpeg",
            "imgAlt": "sadasd",
            "imgTitle": "sadsdadsa",
            "text": "adsdsadsadsa"
          }
        ]
      },
      "sec4_title": {
        "id": 33,
        "value": null
      },
      "sec4_text": {
        "id": 34,
        "value": null
      },
      
      
      
  },
  mutations: {
      updateHome(state, res){
          state.home = res
      },
      updateHomeProducts(state, res){
          state.products = res
      },
  },
  actions: {
      getDataHome: async function(context){
          axios.get('http://vetalya-mosquito.urich.work/api/home', {crossdomain: true})
            .then(response => {
                context.commit('updateHome', response.data)    
            })
            .catch(e => {
                this.errors.push(e)
            })
      },
      getDataProducts: async function(context){
          axios.get('http://vetalya-mosquito.urich.work/api/products/1', {crossdomain: true})
            .then(response => {
                context.commit('updateHomeProducts', response.data)    
            })
            .catch(e => {
                this.errors.push(e)
            })
      }
  }
})
