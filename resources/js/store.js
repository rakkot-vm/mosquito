import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

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
        }
        
      },
      
      home: 'empty',
      
      
      "sec1_title": {
        "id": 12,
        "value": "Insektenschutz Für Fenster Mit Rolladen"
      },
      "sec1_text": {
        "id": 13,
        "value": `
                    <p>
                        Wünschst du dir einen flexiblen, unkomplizierten und zuverlässigen Insektenschutz fürs Fenster? Einen, der leicht zu montieren ist und sich auch für eine Mietwohnung eignet?
                    </p>
                    <p>
                        Dann sind. Unsere Fliegengitter fürs Fenster die passende Losung für dich:
                    </p>
                    <ul>
                        <li>Formschöne, leichte und stabile Fliegengitter dank Alu-Rahmen</li>
                        <li>Fenster-Insektenschutz in unterschiedlichen Größen, der außerdem Kurzbar ist individuellen Insektenschutzfenster nach Maß</li>
                        <li>Modelle mit Spezial-Gewebe für höhere Lichtdurchlässigkeit</li>
                        <li>Sets zum Sparpreis erhältlich</li>
                        <li>Insektenschutz Spannrahmen extrem flach für eure Fenster</li>
                    </ul>
                `
      },
      "sec1_img": {
        "id": 14,
        "value": "imgs/no_img.jpg"
      },
      "sec1_img1": {
        "id": 15,
        "value": "imgs/no_img.jpg"
      },
      "sec1_img2": {
        "id": 16,
        "value": "imgs/no_img.jpg"
      },
      "sec1_img3": {
        "id": 17,
        "value": "imgs/no_img.jpg"
      },
      "sec1_img4": {
        "id": 18,
        "value": "imgs/no_img.jpg"
      },
      "sec2_text": {
        "id": 19,
        "value": null
      },
      "sec2_textWidth": {
        "id": 20,
        "value": null
      },
      "sec2_infoWidth": {
        "id": 21,
        "value": null
      },
      "sec2_popupWidth": {
        "id": 22,
        "value": null
      },
      "sec2_textHeight": {
        "id": 23,
        "value": null
      },
      "sec2_infoHeight": {
        "id": 24,
        "value": null
      },
      "sec2_popupHeight": {
        "id": 25,
        "value": null
      },
      "sec2_textDeep": {
        "id": 26,
        "value": null
      },
      "sec2_infoDeep": {
        "id": 27,
        "value": null
      },
      "sec2_popupDeep": {
        "id": 28,
        "value": null
      },
      "sec2_textHols": {
        "id": 29,
        "value": null
      },
      "sec2_infoHols": {
        "id": 30,
        "value": null
      },
      "sec2_popupHols": {
        "id": 31,
        "value": null
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
      "sec5_img1": {
        "id": 35,
        "value": "imgs/no_img.jpg"
      },
      "sec5_title1": {
        "id": 36,
        "value": 'text'
      },
      "sec5_img2": {
        "id": 37,
        "value": "imgs/no_img.jpg"
      },
      "sec5_title2": {
        "id": 38,
        "value": 'text'
      },
      "sec5_img3": {
        "id": 39,
        "value": "imgs/no_img.jpg"
      },
      "sec5_title3": {
        "id": 40,
        "value": 'text'
      },
      "sec5_img4": {
        "id": 41,
        "value": "imgs/no_img.jpg"
      },
      "sec5_title4": {
        "id": 42,
        "value": 'text'
      },
      
      
  },
  mutations: {
      updateHome(state, res){
          state.home = res
      }
  },
  actions: {
      getDataHome(context){
          axios.get('http://vetalya-mosquito.urich.work/api/home', {crossdomain: true})
            .then(response => {
                context.commit('updateHome', response.data)    
            })
            .catch(e => {
                this.errors.push(e)
            })
      }
  }
  /*mutations: {
      getAPI(state){
          axios.get('http://vetalya-mosquito.urich.work/api/home', {crossdomain: true})
            .then(response => {
                state.home = response.data
            })
            .catch(e => {
                this.errors.push(e)
            })
      }
  },*/
})
