<template>
    <div class="dimensions-section">
        <h3 class="title">Abmessungen</h3>
        <div style="margin-bottom: 15px;" v-html="$store.state.home.sec2_text.value">

        </div>
        
        <a class="download-file-installation" :href="$store.state.products.doc" download>
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
                @click="$store.state.popupDimension1 = true"
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
                @click="$store.state.popupDimension2 = true"
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
                @click="$store.state.popupDimension3 = true"
                v-if="this.$store.state.home.sec2_infoDeep.value === 'on'">
                 <span>i</span>
            </div>
        </div>
        
        <div class="dimension">
            <span class="caption">{{this.$store.state.home.sec2_textHols.value}}</span>
            <div class="field" style="padding: 0">
                <!-- <select id="selOpen" name="selOpen" ref="selectBoolean" v-model="$store.state.selectedProduct.adds.holes">
                    <option value="1">Ja</option>
                    <option value="0">No</option>
                </select>
                <label for="selOpen" class="select-arrow" @click="clickSelect"></label> -->
                <!-- <v-select :options="['true','false']" v-model="$store.state.selectedProduct.adds.holes"></v-select> -->

                <b-form-select v-model="$store.state.selectedProduct.adds.holes">
                    <option value="true">Ja</option>
                    <option value="false">No</option>
                </b-form-select>
            </div>
            <div 
                class="additional-information"
                @click="$store.state.popupDimension4 = true"
                v-if="this.$store.state.home.sec2_infoHols.value === 'on'">
                 <span>i</span>
            </div>
        </div>
        
        <div class="count-product">
            <span><strong>Anzahl von</strong></span>
            <div class="field">
                <input type="text" v-model="$store.state.selectedProduct.count">
            </div>
        </div>
        <p class="text-blue" style="margin: 20px 0;">
            Insektenschutz Alu Rahmen mit Maße ab 1500 mm (Breite oder Höhe) wird mit einer Querstange ausgestattet
        </p>
        <strong>
            Preisspanne bei Rahmengröße
        </strong>
        <!-- {{this.$store.state.products.attributes[2].attributeValues}} -->
        <ul style="margin: 15px 0;">
            <li v-for="(item, index) in $store.state.products.attributes.attr_3.attributeValues" :key="item.id">
                <label :for="'spec_param-' + index" @click="$store.state.selectedProduct.attributes.spec = item.id">
                    <input 
                        :id="'spec_param-' + index" 
                        type="radio"
                        name="spec_param">
                        <span>{{item.title}} <strong>({{item.price}} €)</strong></span>
                </label>
            </li>
        </ul>
        

        
        <popupDimension v-if="$store.state.popupDimension1">
            <div class="close" @click="$store.state.popupDimension1 = false"></div>
            <div class="popupDimension__content" v-html="this.$store.state.home.sec2_popupWidth.value"></div>
        </popupDimension>

        <popupDimension v-if="$store.state.popupDimension2">
            <div class="close" @click="$store.state.popupDimension2 = false"></div>
            <div class="popupDimension__content" v-html="this.$store.state.home.sec2_popupHeight.value"></div>
        </popupDimension>

        <popupDimension v-if="$store.state.popupDimension3">
            <div class="close" @click="$store.state.popupDimension3 = false"></div>
            <div class="popupDimension__content" v-html="this.$store.state.home.sec2_popupDeep.value"></div>
        </popupDimension>

        <popupDimension v-if="$store.state.popupDimension4">
            <div class="close" @click="$store.state.popupDimension4 = false"></div>
            <div class="popupDimension__content" v-html="this.$store.state.home.sec2_popupHols.value"></div>
        </popupDimension>
    </div>
</template>


<script>
export default{
    name: 'dimensions-section',
    components: {
        popupDimension: () => import('./popup.vue')
    },
    /* methods:{
        clickSelect(){
            this.$refs.selectBoolean.onselect;
        }
    }, */
    mounted(){
        this.$store.state.selectedProduct.attributes.spec = this.$store.state.products.attributes.attr_3.attributeValues[0].id
    },
    beforeUpdate(){
        document.getElementById('spec_param-0').setAttribute('checked', 'checked');
    }
}
</script>


<style scoped lang="scss">
    .dimension{
        background-color: #395781;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 4px 34px;
        height: 37px;
        margin-bottom: 9px;
        position: relative;
    }
    .title{
        font-size: 16px;
    }
    .caption{
        color: #fff;
        display: inline-block;
        width: calc(100% - 110px);
        height: 22px;
        overflow: hidden;
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
        span{
            padding-top: 12px;
        }
        .field{
            border: 1px solid #242424;
            margin-left: 22px;
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