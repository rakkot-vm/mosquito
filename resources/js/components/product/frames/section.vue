<template>
    <div class="profiles">
        <profile 
            v-for="profile in profiles" 
            :key='profile.id' 
            :profile="profile"
            @click.native='getImageURL(profile.image.standart)'
        ></profile>
    </div>
</template>


<script>
export default{
    name: 'profiles',
    data () {
        return{
            profiles: [
                {
                    id: '0',
                    title: 'Weiß',
                    code: 'RAL 9016',
                    image: {
                        standart: 'https://static.tbmmarket.ru/risunok1024x768/Profil_MS_s_chetvertu_osnovnoi_belii_60m_Alutek_MOS2005_07_001.jpg',
                        mini: 'https://static.tbmmarket.ru/risunok1024x768/Profil_MS_s_chetvertu_osnovnoi_belii_60m_Alutek_MOS2005_07_001.jpg'
                    }
                },
                {
                    id: '1',
                    title: 'Goldene Eiche',
                    code: 'RAL 9016',
                    image: {
                        standart: 'https://static.tbmmarket.ru/risunok1024x768/Profil_MS_s_chetvertu_osnovnoi_belii_60m_Alutek_MOS2005_07_001.jpg',
                        mini: 'https://static.tbmmarket.ru/risunok1024x768/Profil_MS_s_chetvertu_osnovnoi_belii_60m_Alutek_MOS2005_07_001.jpg'
                    }
                },
                {
                    id: '2',
                    title: 'Weiß',
                    code: 'RAL 9016',
                    image: {
                        standart: 'https://static.tbmmarket.ru/risunok1024x768/Profil_MS_s_chetvertu_osnovnoi_belii_60m_Alutek_MOS2005_07_001.jpg',
                        mini: 'https://static.tbmmarket.ru/risunok1024x768/Profil_MS_s_chetvertu_osnovnoi_belii_60m_Alutek_MOS2005_07_001.jpg'
                    }
                },
                {
                    id: '3',
                    title: 'Weiß',
                    code: 'RAL 9016',
                    image: {
                        standart: '#',
                        mini: '#'
                    }
                },
                {
                    id: '4',
                    title: 'Weiß',
                    code: 'RAL 9016',
                    image: {
                        standart: 'https://static.tbmmarket.ru/risunok1024x768/Profil_MS_s_chetvertu_osnovnoi_belii_60m_Alutek_MOS2005_07_001.jpg',
                        mini: 'https://static.tbmmarket.ru/risunok1024x768/Profil_MS_s_chetvertu_osnovnoi_belii_60m_Alutek_MOS2005_07_001.jpg'
                    }
                },
            ]
        }
    },
    components: {
        Profile: () => import('./item.vue')
    },
    methods: {
        getImageURL: function (image){
            this.$emit('getImageURL', image)
        }
    },
    mounted () {
        this.getImageURL(this.profiles[0].image.standart)
    }
}
</script>


<style scoped lang="scss">
.profiles{
    display: flex;
    flex-wrap: wrap;
    margin-left: -5px;
    margin-right: -5px;
    margin-top: 56px;
}
</style>