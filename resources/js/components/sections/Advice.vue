<template>
    <section id="advice-and-delivery">
        <div class="container">
            <div class="row advice">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h2 class="underline underline-center text-center">Ratschläge</h2>
                    <p class="text-center">
                        Im Gegensatz zu anderen Arten von Anti-Moskito-Produkten empfehlen wir, das Rahmen-Moskitonetz im Winter von den Fenstern zu entfernen - dies schützt es vor widrigen Witterungsbedingungen und verlängert die Lebensdauer erheblich.<br>
                        Unsere Berater beantworten gerne alle Fragen und beraten Sie kompetent zu unseren Produkten.
                    </p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row free-delivery">
                <div class="col-12">
                    <h3 class="free-delivery text-center text-blue">Kostenloser Versand bezieht sich auf den Kauf von 2 Fliegengittern zur<br> Selbstmontage!</h3>
                    <ul class="free-delivery-list text-opacity">
                        <li>* Wir versenden Pakete per Kurier</li>
                        <li>** Sie werden professionell in Spezialkartons verpackt und vor Beschädigungen geschützt.</li>
                    </ul>
                </div>
            </div>
            <div class="row our-works">
                <div class="col-12">
                    <h2 class="title underline underline-center text-center">Unsere Arbeit</h2>
                </div>
                <!--<div class="col-md-3 col-6" v-for="image in images" :key="image.id">
                    <img :src="image" alt="">
                </div>-->
            </div>
        </div>
    </section>
</template>

<script>
export default{
    data () {
        return{
            images: []
        }
    },
    methods:{
        
    },
    /*mounted() {
        this.images = this.$store.state.section.advice.images
    }*/
}
</script>


<style scoped lang="scss">
    .advice{
        margin-bottom: 20px;
    }
    .free-delivery-list{
        margin-top: 60px;
        margin-bottom: 32px;
    }
    .our-works{
        img{
            width: 100%;
            object-fit: cover;
        }
        .title{
            
        }
    }
</style>