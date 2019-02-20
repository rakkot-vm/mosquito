<template>
    <div class="dimensions-section">
        <h3 class="title">Abmessungen</h3>
        <p>
            Vor der Bestellung können Sie nach unseren Empfehlungen Moskitonetze unabhängig messen. Dies beschleunigt die Auftragsabwicklung und reduziert die Arbeitskosten. 
        </p>
        <p>
            Achtung, wir übernehmen keine Haftung für falsche Größen Bitte beachten sie, dass unser Insektenschutz nur für die Standard Fenster Ansicht passt
        </p>
        <div class="download-file-installation">
            
        </div>
        
        <div class="dimension">
            <span class="caption">{{this.$store.state.home.sec2_textWidth.value}}</span>
            <div class="field">
                <input type="text" v-model="$store.state.selectedProduct.dimensions.width">
                <span class="units">mm</span>
            </div>
        </div>
        
        <div class="dimension">
            <span class="caption">{{this.$store.state.home.sec2_textHeight.value}}</span>
            <div class="field">
                <input type="text" v-model="$store.state.selectedProduct.dimensions.height">
                <span class="units">mm</span>
            </div>
        </div>
        
        <div class="dimension">
            <span class="caption">{{this.$store.state.home.sec2_textDeep.value}}</span>
            <div class="field">
                <input type="text" v-model="$store.state.selectedProduct.dimensions.deep">
                <span class="units">mm</span>
            </div>
        </div>
        
        <div class="dimension">
            <span class="caption">{{this.$store.state.home.sec2_textWidth.value}}</span>
            <div class="field" style="padding: 0">
                <select v-model="$store.state.selectedProduct.dimensions.hole">
                    <option value="true">Ja</option>
                    <option value="false">No</option>
                </select>
                <label class="select-arrow"></label>
            </div>
        </div>
        
        <div class="count-product">
            <span><strong>Anzahl von</strong></span>
            <div class="field">
                <input type="text" v-model="$store.state.selectedProduct.count">
            </div>
        </div>
    </div>
</template>


<script>
export default{
    name: 'dimensions-section',
    /*components: {
        dimensionsInputs: () => import('./inputs.vue')
    }*/
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
    }
    .title{
        font-size: 16px;
    }
    .caption{
        color: #fff;
        display: inline-block;
        width: calc(100% - 110px);
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
</style>