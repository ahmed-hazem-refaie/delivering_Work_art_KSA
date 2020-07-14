<template>
   <div class="hero hero-classic"> 
    <div class="row">
        <img class="hero-image-md" src="//cdn.shopify.com/s/files/1/3000/4362/files/desktop-hero-1_2048x.jpg?v=1592197390" alt="Fine art">
        <div class="col-md-12">
            <img v-if="selectedImage" class="hero-image-pc" :src="selectedImage" alt="Fine art">
            <div class="hero-content">
                <p class="hero-subtitle">{{ $t("message.introducing") }}</p>
                <h3 class="hero-title">{{ $t("message.fineart") }}</h3>
                <div class="hero-counter">
                    <span class="hero-counter__live">{{ $t("message.live") }}</span>
                    <img class="hero-counter__eye ml-2 mr-1" src="//cdn.shopify.com/s/files/1/3000/4362/t/109/assets/eye.png?v=10839783198912625093">
                    <span id="hero-counter">408</span>
                    {{ $t("message.shoppers") }}
                </div>
                <a href="https://ecstase.com/pages/walltones?artwork=synthetic-3" class="hero-btn btn">{{ $t("message.shopnow") }}</a>
            </div>
        </div>
    </div>
 </div>
</template>

<script>
export default {
    data(){
        return{
            images: [
                '//cdn.shopify.com/s/files/1/3000/4362/files/desktop-hero-1_2048x.jpg?v=1592197390',
                '//cdn.shopify.com/s/files/1/3000/4362/files/Augmented_Art_Hero_Desktop_2048x.png?v=1594004875',
                '//cdn.shopify.com/s/files/1/3000/4362/files/peach_desktop_final_post_2048x.jpg?v=1581001094',
                '//cdn.shopify.com/s/files/1/3000/4362/files/sepia_dekstop_final_post_2048x.jpg?v=1565183372'
            ],
            selectedImage: null
        }
    },
    methods: {
        randomItem (items) {
        return items[Math.floor(Math.random()*items.length)];
        }
    },
    created() {
        this.selectedImage = this.randomItem(this.images)
    }
}
</script>

<style>

</style>