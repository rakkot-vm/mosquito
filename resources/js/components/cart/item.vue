<template>
    <li class="product">
        <div class="border-image">
            <img :src="this.product.image" alt="">
        </div>
        <div class="info">
            <p class="title-product">{{this.product.title}}.</p>
            <p class="count">
                <span>Die Menge von: </span> 
                <strong>{{this.product.count}}</strong>
            </p>
            <p class="code">Aluminiumprofilrahmen: <strong> White </strong>. Moskitonetz: <strong>Grau</strong>.</p>
            <!-- <p>{{this.$store.state.products.attributes.attr_1}}</p> -->
            <p class="weight">
                Abmessungen <strong>{{this.product.adds.weight}} x {{this.product.adds.height}}.</strong><br/> 
                Deep: <strong>{{this.product.adds.deep}}</strong>. Holes: <strong>{{this.product.adds.holes}}</strong>.</p>
        </div>
        <div class="price">
            <span class="value">{{this.product.price}}</span><span class="currency">€</span>
        </div>
    </li>
</template>


<script>
export default{
    name: 'productCart',
    props: ['product', 'index']
}
</script>


<style scoped lang="scss">
    .product{
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        border-bottom: 1px solid #333;
        margin-bottom: 18px;
        padding-bottom: 18px;
        position: relative;
        &:last-child{
            border-bottom: 0;
            margin-bottom: 0;
        }
    }
    .border-image{
        width: 90px;
        height: 100px;
        border: 1px solid #242424;
        padding: 5px;
        overflow: hidden;
        img{
            width: 100%;
        }
    }
    .info{
        width: calc(100% - 100px);
        .title-product{
            font-size: 14px;
            font-family: 'Proxima-Nova-Regular';
            margin-bottom: 10px;
            line-height: 1.4;
            height: 20px;
            width: calc(100% - 70px);
        }
        
        .code, .count{
            font-size: 12px;
            margin-bottom: 0;
            strong{
                font-size: 12px;
            }
        }
        .weight{
            font-size: 12px;
            color: #395781;
            font-family: 'Proxima-Nova-Regular';
            margin-bottom: 0;
            strong{
                font-size: 12px;
            }
        }
    }
    .price{
        width: 70px;
        display: flex;
        justify-content: flex-end;
        position: absolute;
        top: 0;
        right: 0;
        .value, .currency{
            font-family: "Proxima-Nova-Bold"
        }
        .currency{
            margin-left: 5px;
        }
    }
    @media(max-width: 480px){
        .border-image{
            width: 75px;
        }
        .info{
            width: calc(100% - 85px);
        }
        /* .price{
            position: absolute;
            top: 0;
            right: 0;
            justify-content: flex-end;
        } */
    }
</style>