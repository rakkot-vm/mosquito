<template>
    <div>
        <div class="circle-404">
            <h1 class="title-404">404</h1>
            <hr class="line-404">
            <p class="description-404">Seite nicht gefunden</p>
        </div>
        <advantage></advantage>
    </div>
</template>

<script>
export default{
    name: 'notFound',
    components: {
        Advantage: () => import('./../components/sections/Advantage.vue')
    }
}
</script>

<style scoped lang="scss">
    .circle-404{
        margin: 66px auto 126px;
        width: 476px;
        height: 476px;
        background: #f1f1f1;
        border-radius: 50%;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
    }
    .title-404{
        font-family: "Exo2-Bold";
        font-size: 288px;
        font-style: normal;
        font-stretch: normal;
        letter-spacing: normal;
        color: #395781;
        margin-top: 45px;
        margin-bottom: 0;
    }
    .line-404{
        border: 4px solid #242424;
        width: 120%;
        margin: 0;
    }
    .description-404{
        font-family: "Exo2-Light";
        font-size: 62px;
        color: #000;
        width: 120%;
        text-align: center;
    }
    @media(min-width:480px) and (max-width:767px){
        .circle-404{
            width: 300px;
            height: 300px;
            margin: 26px auto 96px;
        }
        .title-404{
            font-size:160px;
        }
        .line-404{
            border: 2px solid #242424;
        }
        .description-404{
            font-size: 36px;
        }
    }
    @media(max-width:479px){
        .circle-404{
            width: 250px;
            height: 250px;
            margin: 26px auto 96px;
        }
        .title-404{
            font-size:140px;
            margin-top: 40px;
        }
        .line-404{
            border: 2px solid #242424;
            width: 108%;
        }
        .description-404{
            font-size: 30px;
        }
    }
</style>