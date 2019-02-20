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
        
        <dimensions-inputs>
            
        </dimensions-inputs>
    </div>
</template>


<script>
export default{
    name: 'dimensions-section',
    data () {
        return{
            dimansion: [
                {
                    id: 0,
                    title: ""
                }
            ]
        }
    },
    components: {
        dimensionsInputs: () => import('./inputs.vue')
    }
    
}
</script>


<style>

</style>