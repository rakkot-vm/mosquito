<template>
    <div class="dimensions-section">
        <h3 class="title">{{this.$store.state.home.sec2_title.value}}</h3>
        <div style="margin-bottom: 15px;">
            <div v-html="$store.state.home.sec2_description.value"></div>
            <div class="text-with-popup">
                <div v-html="$store.state.home.sec2_textAttention1.value" style="display: inline">

                </div>
                
                 <div
                    class="additional-information additional-information--static"
                    @click="popups.popupDimension5 = true"
                    v-if="this.$store.state.home.sec2_infoAttention1.value === 'on'">
                    <span>i</span>
                </div>
            </div>
        </div>
        
        <a class="download-file-installation" :href="$store.state.products.doc" target="_blank" download>
            <img src="../../../../static/img/pdf-file-format-symbol.png" alt=""><span>{{this.$store.state.products.docName}}</span>
        </a>
        
        <div class="dimension">
            <span class="caption">{{this.$store.state.home.sec2_textWidth.value}}</span>
            <div class="field">
                <input type="text" v-model="$store.state.selectedProduct.adds.weight">
                <span class="units">mm</span>
            </div>
            <div 
                class="additional-information"
                @click="popups.popupDimension1 = true"
                v-if="this.$store.state.home.sec2_infoWidth.value === 'on'">
                 <span>i</span>
            </div>
        </div>
        
        <div class="dimension">
            <span class="caption">{{this.$store.state.home.sec2_textHeight.value}}</span>
            <div class="field">
                <input type="text" v-model="$store.state.selectedProduct.adds.height">
                <span class="units">mm</span>
            </div>
            <div 
                class="additional-information"
                @click="popups.popupDimension2 = true"
                v-if="this.$store.state.home.sec2_infoHeight.value === 'on'">
                 <span>i</span>
            </div>
        </div>
        
        <div class="dimension">
            <span class="caption">{{this.$store.state.home.sec2_textDeep.value}}</span>
            <div class="field">
                <input type="text" v-model="$store.state.selectedProduct.adds.deep">
                <span class="units">mm</span>
            </div>
            <div 
                class="additional-information"
                @click="popups.popupDimension3 = true"
                v-if="this.$store.state.home.sec2_infoDeep.value === 'on'">
                 <span>i</span>
            </div>
        </div>
        
        <div class="dimension">
            <span class="caption">{{this.$store.state.home.sec2_textHols.value}}</span>
            <div class="field" style="padding: 0">
                <b-form-select v-model="$store.state.selectedProduct.adds.holes">
                    <option value="true">Ja</option>
                    <option value="false">No</option>
                </b-form-select>
            </div>
            <div 
                class="additional-information"
                @click="popups.popupDimension4 = true"
                v-if="this.$store.state.home.sec2_infoHols.value === 'on'">
                 <span>i</span>
            </div>
        </div>
        
        <div class="count-product">
            <span><strong>Anzahl von</strong></span>
            <div class="field" style="padding: 0">
                <b-form-select v-model="$store.state.selectedProduct.count">
                    <option 
                        v-for="(count, index) in 10" :key="count.index"
                        :value="index + 1">{{index + 1}}</option>                
                </b-form-select>
            </div>
        </div>

        <div class="text-with-popup">
            <div class="text-blue" style="display:inline" v-html="$store.state.home.sec2_textAttention2.value">
            </div>
            <div
                class="additional-information additional-information--static"
                @click="popups.popupDimension6 = true"
                v-if="this.$store.state.home.sec2_infoAttention2.value === 'on'">
                <span>i</span>
            </div>
        </div>
       
        <div class="interval-size-options">
            <strong>Preisspanne bei Rahmengröße</strong>

            <ul class="dimansion-radio-btns">
                <li v-for="(item, index) in $store.state.products.attributes.attr_3.attributeValues" :key="index">
                    <label 
                        :for="'spec_param-' + index" 
                        @click="selectRadioBtn(item.id, item.title, index)">
                        <span class="radio-circle" :class="{'checked': index == selectedRadioBtn}"></span>
                        
                        <span style="padding-left:10px;">{{item.title}} <strong>({{item.price}} €)</strong></span>
                    </label>
                    <input 
                        :id="'spec_param-' + index" 
                        type="radio"
                        :checked="index == selectedRadioBtn"
                        name="spec_param">
                </li>
            </ul>
        </div>

        <!-- Popups -->
        <popupDimension v-if="popups.popupDimension1">
            <div class="close" @click="popups.popupDimension1 = false"></div>
            <div class="popupDimension__content" v-html="this.$store.state.home.sec2_popupWidth.value"></div>
        </popupDimension>

        <popupDimension v-if="popups.popupDimension2">
            <div class="close" @click="popups.popupDimension2 = false"></div>
            <div class="popupDimension__content" v-html="this.$store.state.home.sec2_popupHeight.value"></div>
        </popupDimension>

        <popupDimension v-if="popups.popupDimension3">
            <div class="close" @click="popups.popupDimension3 = false"></div>
            <div class="popupDimension__content" v-html="this.$store.state.home.sec2_popupDeep.value"></div>
        </popupDimension>

        <popupDimension v-if="popups.popupDimension4">
            <div class="close" @click="popups.popupDimension4 = false"></div>
            <div class="popupDimension__content" v-html="this.$store.state.home.sec2_popupHols.value"></div>
        </popupDimension>

        <popupDimension v-if="popups.popupDimension5">
            <div class="close" @click="popups.popupDimension5 = false"></div>
            <div class="popupDimension__content" v-html="this.$store.state.home.sec2_popupAttention1.value"></div>
        </popupDimension>

        <popupDimension v-if="popups.popupDimension6">
            <div class="close" @click="popups.popupDimension6 = false"></div>
            <div class="popupDimension__content" v-html="this.$store.state.home.sec2_popupAttention2.value"></div>
        </popupDimension>
    </div>
</template>


<script>
export default{
    name: 'dimensions-section',
    data() {
      return {
        selectedRadioBtn: '0',
        popups: {
            popupDimension1: false,
            popupDimension2: false,
            popupDimension3: false,
            popupDimension4: false,
            popupDimension5: false,
            popupDimension6: false,
        }
      }
    },
    components: {
        popupDimension: () => import('./popup.vue')
    },
    methods: {
        selectRadioBtn (id, title, index) {
            this.$store.state.selectedProduct.attributes.spec.id = id;
            this.$store.state.selectedProduct.attributes.spec.title = title;
            this.selectedRadioBtn = index
        }
    },
    mounted(){
        this.selectRadioBtn(this.$store.state.products.attributes.attr_3.attributeValues[0].id, this.$store.state.products.attributes.attr_3.attributeValues[0].title, 0)
    }
}
</script>


<style lang="scss">
    .interval-size-options{
        margin: 20px 0;
    }
    .dimansion-radio-btns{
        margin: 15px 0;
        position: relative;
        label{
            position: relative;
            z-index: 1;
        }
        input{
            position: absolute;
            left: 0;
            opacity: 0;
        }
        .radio-circle{
            display: inline-block;
            width: 14px;
            height: 14px;
            border: 1px solid grey;
            border-radius: 50%;
            &.checked{
                border: 1px solid #395780;
                background: radial-gradient(#fff 0%, #fff 30%, #395780 40%, #395780 100%);
            }
        }
        @media(max-width:400px){
            strong{
                display: inline-block;
            }
        }
    }
    .dimension{
        background-color: #395781;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 4px 34px;
        height: 37px;
        margin-bottom: 9px;
        position: relative;
        .caption{
            color: #fff;
            display: inline-block;
            width: calc(100% - 110px);
            height: 22px;
            overflow: hidden;
        }
    }
    .title{
        font-size: 16px;
    }
    .field{
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 100%;
        width: 100px;
        background-color: #fff;
        padding: 6px 8px 6px 14px;
        position: relative;
        input{
            margin: 0 5px 0 0;
            padding: 0;
            height: 100%;
            width: 60%;
            border-radius: 0;
            border: 0;
            color: #242424;
            background-color: transparent;
            outline: none;
        }
        select{
            border-radius: 0;
            border: 0;
            color: #242424;
            background-color: transparent;
            outline: none;
            width: 100%;
            padding: 6px 12px;
            cursor: pointer;
        }
        .select-arrow{
            position: absolute;
            top: 5px;
            right: 3px;
            width: 20px;
            height: 20px;
            background-color: #fff;
            &:before{
                content: '';
                position: absolute;
                top: 0px;
                right: 8px;
                width: 14px;
                height: 14px;
                background-color: #fff;
                border-right: 1px solid rgba(115, 115, 115, 0.7);
                border-bottom: 1px solid rgba(115, 115, 115, 0.7);
                transform: rotate(45deg);
            }
        }
        .units{
            color: rgba(115, 115, 115, 0.7);
        }
    }
    .count-product{
        display: flex;
        margin: 15px 0;
        span{
            padding-top: 12px;
        }
        .field{
            border: 1px solid #242424;
            margin-left: 22px;
            padding: 6px 12px;
            input{
                width: 100%;
                margin-right: 0;
            }
        }
    }
    .additional-information{
        width: 18px;
        height: 18px;
        background-color: #ffffff;
        color: #242424;
        position: absolute;
        right: 8px;
        top: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        span{
            font-family: "Proxima-Nova-Bold"
        }
        &--static{
            position: static;
            display: inline-flex;
            border: 1px solid #000;
            margin-left: 5px;
        }
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
    .text-blue{
        color: #395781;
        font-family: "Proxima-Nova-Bold"
    }
    .download-file-installation{
        margin-bottom: 15px;
        display: block;
        text-decoration: underline;
        img{
            margin-right: 5px;
        }
    }
    @media(max-width:480px){
        .dimension{
            padding: 4px 15px 4px 15px;
        }
        .additional-information{
            display: none;
        }
    }
</style>