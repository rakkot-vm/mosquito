<template>
    <section id="tabs">
        <div class="container">
            <tab
                v-for="tab in tabs"
                :key="tab.id"
                :tab="tab">
            </tab>
        </div>
    </section>
</template>


<script>
export default{
    name: 'Tabs',
    data () {
        return{
            tabs: [
                /*{
                    id: '0',
                    title: 'Messanweisungen',
                    imageSrc: 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f7/Bmw_2500_v_sst.jpg/280px-Bmw_2500_v_sst.jpg',
                    content: `<p> Bitte Fenster öffnen <br>
                            Messen Sie die Höhe des Fensterlichts (nach oben und unten) <br>
                            Messen Sie die Breite des Fensters (links und rechts)
                            </p>

                            <p>Messen Sie die Breite des Profils "G" (важно при выборе крючков)</p>

                            <ul>
                                <li>•	Bitte geben Sie Ihren Fenstertyp an.</li>
                                <li>•	Bitte beachten Sie, dass unser Insektenschutz nur in die Standard Fenster Ansicht passt.</li>
                            </ul> 

                            <p>Пожалуйста, <strong>укажите размеры сетки в мм.</strong></p> 

                            <p><strong>ВНИМАНИЕ !!!</strong>
                            Измерение должно производиться в соответствии с приведенными выше инструкциями.<br>
                            При размещении заказа готовые размеры противомоскитных сеток, выполненные в соответствии с инструкциями, не  должны быть вычтены и не добавлены.<br>
                            Мы не несем ответственности за неправильные размеры.</p>`
                }*/
            ],
            
        }
    },
    components: {
        Tab: () => import('./Tab.vue')
    },
    methods:{
        getStore(){
            this.tabs = this.$store.state.sec3_acc.accordionTabs;
        }
    },
    mounted(){
        this.getStore()
    }
}
</script>
