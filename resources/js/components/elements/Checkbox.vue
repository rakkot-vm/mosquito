<template>
   
        <div class="checkbox">
            <div class="check" v-if="this.checkbox"></div>
            <input type="checkbox" 
                class="checkbox-hide" 
                v-validate="'required'"
                :checked="checkbox">
        </div>
    
</template>


<script>
export default{
    name: 'checkbox',
    props: ['checkbox', 'name']
}
</script>