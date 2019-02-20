<template>
    <div class="profile">
        <div class="image-border">
            <img :src="this.profile.preview_img" alt="">
        </div>
        <p class="caption">{{this.profile.title}}</p>
        <p class="code">{{this.profile.price}}</p>
    </div>
</template>


<script>
export default{
    name: "frame",
    props: ['profile']
}
</script>


<style scoped lang="scss">
    .profile{
        padding: 0 5px;
        margin-bottom: 24px;
        cursor: pointer;
        &:hover{
            .image-border{
                border-color: #153665;
                transition: .5s;
            }
            .caption{
                color: #153665;
                transition: .5s;
            }
        }
    }
    .image-border{
        border: 1px solid #a0a0a0;
        padding: 5px;
        width: 150px;
        height: 150px;
        transition: .5s;
        img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    }
    .caption{
        font-size: 13px;
        font-style: normal;
        font-stretch: normal;
        letter-spacing: normal;
        margin: 4px 0;
        &:first-letter{
            text-transform: uppercase;
        }
    }
    .code{
        font-size: 10px;
        font-style: normal;
        font-stretch: normal;
        letter-spacing: normal;
        color: rgba(36, 36, 36, 0.75);
        text-transform: uppercase;
        margin-bottom: 0;
    }
</style>