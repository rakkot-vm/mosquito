<template>
    <div class="tab">
        <div class="header" @click="collapseTab">
            <h3 class="title">{{this.tab.title}}</h3>
            <span 
                class="arrow" 
                :class="{rotate: showTabContent}"
            ></span>
        </div>
        <transition name="collapse">
            <div class="body" v-show="this.showTabContent">
                
                    <div class="image">
                        <img :src="this.tab.img" :alt="this.tab.imgAlt" :title="this.tab.imgTitle">
                    </div>
                    <div class="content" v-html="this.tab.text"></div>
                
            </div>
        </transition>
    </div>
</template>


<script>
export default{
    name: 'tab',
    data () {
        return{
            showTabContent: false
        }
    },
    props: ['tab'],
    methods:{
        collapseTab: function(){
            this.showTabContent = !this.showTabContent
        }
    }
}
</script>


<style scoped lang="scss">
    .tab{
        background-color: #f9f9f9;
        margin-bottom: 40px;
        &:nth-child(odd){
            .content{
                padding-left: 56px;
            }
        }
        &:nth-child(2n){
            .body{
                flex-direction: row-reverse;
            }
        }
    }
    .header{
        display: flex;
        justify-content: space-between;
        padding: 20px 52px;
        cursor: pointer;
    }
    .title{
        max-width: 96%;
    }
    .arrow{
        border-right: 2px solid #395781;
        border-bottom: 2px solid #395781;
        transform: translate(0, 8px) rotate(-45deg);
        display: block;
        height: 18px;
        width: 18px;
        transition: .3s;
        &.rotate{
            transform: rotate(45deg);
            transition: .3s;
        }
    }
    .body{
        padding: 9px 36px 38px;
        height: 512px;
        display: flex;
    }
    .image{
        width: 50%;
        border: 1px solid #242424;
        padding: 10px;
        img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    }
    .content{
        width: 50%;
        padding: 0px 20px;
    }
    
    /*animation*/
    .collapse-enter-active, .collapse-leave-active{
        transition: .3s ease;
        overflow: hidden;
    }
    .collapse-enter, .collapse-leave-to{
        height: 0;
        opacity: 0;
        padding: 0px 36px;
    }
    /*animation end*/
    
    @media(max-width:1199px){
        .image{
            width: 45%;
        }
        .content{
            width: 55%;
        }
    }
    @media(max-width:991px){
        .tab{
            margin-bottom: 20px;
            &:nth-child(odd){
                .content{
                    padding-left: 0px;
                }
            }
        }
        .header{
            padding: 23px 35px;
        }
        .body{
            flex-direction: column;
            padding: 0 36px;
        }
        .image{
            width: 100%;
            display: none;
        }
        .content{
            width: 100%;
            padding: 0;
        }
    }
    @media(max-width:480px){
        .header{
            padding: 14px 20px;
        }
        .body{
            padding: 0 20px;
        }
        .arrow{
            transform: translate(0, 7px) rotate(-45deg);
        }
    }
</style>