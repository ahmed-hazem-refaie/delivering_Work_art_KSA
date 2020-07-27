<template>
    <header class="about-us">
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="https://cdn.shopify.com/s/files/1/3000/4362/files/16-9Desktop.mp4?v=1592998652" type="video/mp4">
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

}
</script>

<style scoped>
.about-us .about-content{
    position: relative;
    top: 372px;

}
</style>



