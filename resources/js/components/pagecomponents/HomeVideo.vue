<template>
    <header class="about-us">
        <div class="overlay"></div>
        <video :src="data" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        </video>
        <div class="text mb-4 about-content">
            <h1>{{ $t("message.about") }}</h1>
            <router-link to="/about" class="mb-5">
                <a class="btn btn-light mb-5">{{ $t("message.readmore") }}</a>
            </router-link>
        </div>
    </header>
</template>

<script>
export default {
    data(){
        return{
            data:'',
        }
    },
    beforeCreate(){
                axios.get('/api/homedata').then((result) => {

            if(result.data.status)
            {

                this.data="/"+result.data.data.video
            }
        }).catch((err) => {
            console.log(err.data);

        });
    }

}
</script>

<style scoped>
.about-us .about-content{
    position: relative;
    top: 372px;

}
</style>



