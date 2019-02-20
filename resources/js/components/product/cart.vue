<template>
    <div class="">
       <div class="prices-product">
           <p class="price underline underline-right">38.45 €</p>
           <p>
               Lieferzeit <strong> 3 - 5 </strong> Werktage <br/>
               Versandkosten: <strong> 4.99 € </strong>
           </p>
           <button class="btn-darkblue"><span>In den Warenkorb</span></button>
       </div>
    </div>
</template>


<script>
export default{
    
}
</script>


<style scoped lang="scss">
.prices-product{
    background-color: #f1f1f1;
    padding: 20px;
    width: 278px;
}
p{
    text-align: right;
}
.price{
    font-family: 'Exo2-Bold';
    font-size: 36px;
    font-style: normal;
    font-stretch: normal;
    line-height: normal;
    letter-spacing: normal;
    color: #395781;
}
.btn-darkblue{
    width: 100%;
}
</style>