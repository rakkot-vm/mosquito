<template>
    <li class="product">
        <p class="title-product">
            <strong>{{this.product.title}}</strong>. (stück: <strong>{{this.product.count}}</strong> )
            <span 
                class="remove-product"
                @click="removeProduct(index)">
                <img src="../../../static/img/icons/trash.svg" alt="">
            </span>
        </p>
        <div class="border-image">
            <img :src="this.product.image" alt="">
        </div>
        <div class="info">
            <p class="code">
                Aluminiumprofilrahmen: <strong> {{this.product.attributes.border.title}} </strong>. <br/>
                Moskitonetz: <strong>{{this.product.attributes.net.title}}</strong>. <br/>
                Preisspanne bei Rahmengröße: <strong> {{this.product.attributes.spec.title}} </strong>
            </p>
            <p class="weight">
                Abmessungen: <strong>{{this.product.adds.weight}} x {{this.product.adds.height}}.</strong><br/> 
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
    props: ['product', 'index'],
    methods: {
        removeProduct (index) {
            var cart = this.$store.state.cart;
            cart.splice(index, 1);
            this.$store.state.countCart -= 1;
            this.$store.dispatch('calcProducts');
            if(this.$store.state.countCart === 0){
                this.$emit('hidePopupCart')
            }
        }
    }
}
</script>


<style scoped lang="scss">
    .remove-product{
        position: absolute;
        top: 0;
        right: 0;
        width: 24px;
        height: 24px;
        padding: 0 4px;
        cursor: pointer;
        img{
            width: 100%;
        }
    }
    .product{
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        border-bottom: 1px solid #e5e5e5;
        margin-bottom: 18px;
        padding-bottom: 18px;
        position: relative;
        &:last-child{
            margin-bottom: 0;
        }
    }
    .title-product{
        font-size: 14px;
        font-family: 'Proxima-Nova-Regular';
        margin-bottom: 10px;
        line-height: 1.4;
        height: 20px;
        width: calc(100% - 70px);
    }
    .border-image{
        width: 80px;
        height: 90px;
        border: 1px solid #878686;
        padding: 5px;
        overflow: hidden;
        img{
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
    }
    .info{
        width: calc(100% - 90px);
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
        bottom: 17px;
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
            display: none;
        }
        .info{
            width: calc(100% - 85px);
        }
    }
</style>