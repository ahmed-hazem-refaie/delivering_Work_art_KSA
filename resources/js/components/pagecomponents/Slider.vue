<template>

  <div class="mt-5">
    <div class="container-fluid">
        <h2 class="home-products-slider__title section-title">
            <span>{{ $t("message.newrelease") }}</span>
            <span class="sTitle">{{ $t("message.newreleaseheader") }}</span>
        </h2>
        <div class="swiper-container mt-5">
            <div class="swiper-wrapper">
              <div @mouseover="hover(data.id)" class="swiper-slide " v-for="data in sliderPalettes" :key="data.id">
                <div class="product-grid-item">
                    <div class="product-grid-item__image">
                        <a class="product-grid-item__imagewrapper" href="/products/son-this-is-the-universe" data-product-handle="son-this-is-the-universe" data-product-quantity="48">
                            <img class="front" :src="data.img" style="height:100%">
                            <img class="back" :src="image_hover" style="height:100%">

                        </a>
                        <div class="product-grid-item__variants">
                            <span>Size</span>
                            <div class="product-grid-item__variants--content">
                                <a href="#" data-cart-add="32583351238759" class="soldout">L</a>
                                <a href="#" data-cart-add="32583351337063" class="soldout">M</a>
                                <a href="#" data-cart-add="32583351402599" class="">S</a>
                            </div>
                        </div>
                        <div class="product-grid-item__tags">
                            <div class="cms-special-description">
                                <span class="cms-special-label color-4">{{data.name}}</span>
                                <p>Walltones-studio added diamond dust to this print for a glittering effect that makes the artwork even more enticing. Additionally, keep in mind that each artwork is done by hand and therefore may slightly vary from the exemplary product images.</p>
                            </div>
                            <div class="cms-special-description">
                                <span class="cms-special-label color-7">{{ $t("message.newreleaseheader") }}</span>
                                <p>This artwork was added recently (but will likely be sold out soon)</p>
                            </div>
                        </div>
                    </div>
                    <div class="product-grid-item__info">
                        <div class="product-grid-item__title">
                            <h3 class="product-grid-item__name"><a href="/products/son-this-is-the-universe" data-product-handle="son-this-is-the-universe" data-product-quantity="48">{{data.name}}</a></h3>
                            <span class="product-grid-item__price">from ${{data.L_price}}</span>
                        </div>
                        <span class="product-grid-item__qty"><span class="prints-times text-success">{{data.palette_copies}} / </span><span>{{data.avalible_copies}}{{$t("message.left") }}</span></span>
                    </div>
                </div>
              </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
          </div>
    </div>
</div>
</template>

<script>
    export default {
        data(){
            return{
                sliderPalettes:[],
                image_hover:'',
            }
        },
    created() {


      axios.get('/api/palettes')
      .then(response =>{
          this.artists = response.data.artists
          this.sliderPalettes = response.data.palettesSlider;


      })
      .catch(error => console.log(error.response.data))

    },
        mounted(){
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 3,
                spaceBetween: 30,
                freeMode: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                observer:true,
                observerParents:true
            });
            swiper.update();
        },
    methods:{
        hover(id=null){
                axios.get('/api/hover/'+id).then(res=>{

                    if(res.data.status)
                    {
                        this.image_hover=res.data.hover_image.img;
                    }else{
                        console.log(res.data);

                    }
                }).catch(e=>{console.log(e.data);
                })
        }
    }

    }
</script>

<style  scoped>

</style>

