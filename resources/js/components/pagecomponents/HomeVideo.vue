<template>
    <header class="mb-4 mt-5">
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="https://cdn.shopify.com/s/files/1/3000/4362/files/16-9Desktop.mp4?v=1592998652" type="video/mp4">
        </video>
        <div class="text">
            <h1>{{ $t("message.about") }}</h1>
            <router-link to="/about">
                <a class="btn btn-light">{{ $t("message.readmore") }}</a>
            </router-link>
        </div>
    </header>
</template>

<script>
export default {

}
</script>

<style>

</style>