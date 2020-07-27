<template>
    <section class="myhome">




        <div id="carouselExampleCaptions" class="carousel slide" data-interval="false">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" v-for="(artist) in artists" :class="{ 'active': artist.id === 1 }" @click="getdata(artist.id)" :key="artist.id" data-slide-to="artist.id" >{{artist.name}}</li>
            </ol>
            <div class="carousel-inner ">
                <div class="carousel-item" v-for="(artist ) in artists" :class="{ 'active':  artist.id === 1 }" :key="artist.id">
                    <img :src="artist.cover_img" class="header" alt="...">

                        <div class="wrapper    ">
                              <div class=" row  d-flex justify-content-center ">


                            <div  class="details myhome col-md-3 col-sm-6"  v-for="(palettesArtist , index) in palettesArtists" @click="addActive(palettesArtist.id)" :class="{ 'active': index == 0 }"  :key="palettesArtist.id">
                               <div class="details-content">
                                    <img    :src="palettesArtist.img" class="details_img" alt="...">
                                    <div class="content" >
                                        <div class="triangle"></div>
                                        <h6>{{palettesArtist.name}}  | ${{palettesArtist.L_price}}</h6>
                                        <span><span class="text-success">{{palettesArtist.L_copies}}</span>/{{palettesArtist.L_avalible}} {{ $t("message.left") }}</span>
                                        <!-- <button  @click="addToCart(palettesArtist)"  class="form-control btn btn-info border-0">{{ $t("message.cart") }}</button> -->
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>



                    <a class="carousel-control-next" href="#carouselExampleCaptions" @click="getdata(artist.id+1)" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" @click="getdata(artist.id-1)" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                </div>

            </div>

        </div>
        <div class="header_sm mb-2"></div>
        <div class="container myhome mt-5" style="padding-left:0 !important ; padding-right:0 !important;max-width:80% !important" >
            <div class="row">
                <div class="col-lg-7" >
                    <div class="row">
                        <div class="col-md-6 mb-3 targ pl-1" v-for="minPalette in minPalettes"  :key="minPalette.id" >
                            <img :src="minPalette.img" style="height:400px" class="w-100" alt="...">
                        </div>
                    </div>
                </div>
                <div class="myhome col-lg-5">
                    <div class="add-cart p-3">
                        <p>Art paper framed by a wooden frame and non-reflective glass</p>
                        <h2 class="font-weight-bold ">{{name}} II
                        <span v-if="active_el==1">${{S_price}}</span>
                        <span v-if="active_el==2">${{M_price}}</span>
                        <span v-if="active_el==3">${{L_price}}</span>

                        </h2>
                        <div class="mb-3 mt-2"> <span>silkscreen</span></div>
                        <div>

                            <v-btn class="mb-2 size_btn small"  :class="{ active_btn : active_el == 1 }" v-if="S_copies>0"  @click="small(1,S_price,S_avalible)">S</v-btn>
                            <v-btn class="mb-2 size_btn small" style="cursor: not-allowed;background-color:#737373;color:#fff;border:none" v-else >Empty</v-btn>
                            <v-btn class="mb-2 size_btn medium" :class="{ active_btn : active_el == 2 }" v-if="M_copies>0" @click="medium(2,M_price, M_avalible)">M</v-btn>
                            <v-btn class="mb-2 size_btn small" style="cursor: not-allowed;background-color:#737373;color:#fff;border:none" v-else >Empty</v-btn>
                            <v-btn class="mb-2 size_btn larg" :class="{ active_btn : active_el == 3 }" v-if="L_copies>0" @click="larg(3,L_price,L_avalible )">L</v-btn>
                            <v-btn class="mb-2 size_btn small" style="cursor: not-allowed;background-color:#737373;color:#fff;border:none" v-else >Empty</v-btn>
                            <h3 class="mt-4 mb-4" v-if="active_el==1">30x40cm (12x16") <strong style="float:right">{{S_copies}}/{{S_avalible}}  {{ $t("message.left") }}</strong></h3>
                            <h3 class="mt-4 mb-4" v-if="active_el==2">50x66.5cm (20x26") <strong style="float:right">{{M_copies}}/{{M_avalible}}  {{ $t("message.left") }}</strong></h3>
                            <h3 class="mt-4 mb-4" v-if="active_el==3">70x93.5cm (28x37") <strong style="float:right">{{L_copies}}/{{L_avalible}}  {{ $t("message.left") }}</strong></h3>
                            <div style="clear:both"></div>
                        </div>
                        <button @click="  addtocart(cardId,priceTarget, avilableTarget)" class="btn add-button addToCart "



                         ><span v-if="active_el==1">${{S_price}}</span>
                        <span v-if="active_el==2">${{M_price}}</span>
                        <span v-if="active_el==3">${{L_price}}</span>
                         -{{ $t("message.cart") }}

                        </button>
                        <p>
                            <span class="font-weight-bold ">This is the Classic</span>, designed and manufactured by Ecstase,
                            the Classic is made up of a wooden frame, a passe-partout,
                            and non-reflective glass. Each of the artworks chosen for
                            the Classic has been hand made or hand-retouched on art-grade paper,
                            and is delivered already professionally framed to ensure
                            the longevity of the artwork. You can install it as soon as
                            <transition>
                                <span v-if="show">
                                    it is delivered as the artwork comes ready to be hung on your wall.
                                    The classical design and releases in this series make it an elegant
                                    way to add a high-end touch to your space. Each artwork contains
                                    a signed certificate of authenticity that guarantees its originality.
                                    Curated by Ecstase in a collaboration with Seamless for a limited edition of 50.
                                    This psychedelic triple artwork capitalizes on brilliant negative space and amazing detail.
                                </span>
                            </transition>
                            <a class="more text-primary btn btn-block" v-if="!show" @click="show = !show">{{ $t("message.readmore") }}</a>
                            <a class="more text-primary btn btn-block" v-else @click="show = !show">{{ $t("message.readless") }}</a>
                        </p>
                        <ul class="list-group">
                            <li class="list-group-item" @click="size = !size">
                                <h4 class="font-weight-bold ">
                                   {{ $t("message.size") }}
                                    <i v-if="!size" class="fa fa-chevron-down" style="float:right"></i>
                                    <i v-else class="fa fa-chevron-up" style="float:right"></i>
                                </h4>
                                <span v-if="size">
                                    {{sizing_details}}
                                </span>
                            </li>
                            <li class="list-group-item" @click="details = !details">
                                <h4 class="font-weight-bold ">

                                   {{ $t("message.productDetails") }}
                                    <i v-if="!details" class="fa fa-chevron-down" style="float:right"></i>
                                    <i v-else class="fa fa-chevron-up" style="float:right"></i>
                                </h4>
                                <span v-if="details">
                                    it is delivered as the artwork comes ready to be hung on your wall.
                                    The classical design and  releases in this series make it an elegant
                                    way to add a high-end.
                                </span>
                            </li>
                            <li class="list-group-item" @click="shipping = !shipping">
                                <h4 class="font-weight-bold ">
                                     {{ $t("message.shipping") }}
                                    <i v-if="!shipping" class="fa fa-chevron-down" style="float:right"></i>
                                    <i v-else class="fa fa-chevron-up" style="float:right"></i>
                                </h4>
                                <span v-if="shipping">
                                    it is delivered as the artwork comes ready to be hung on your wall.
                                    The classical design and releases in this series make it an elegant
                                    way to add a high-end.
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <appvideo></appvideo>
        <review></review>
    </section>
</template>

<script>
import appvideo from '../pagecomponents/ShopVideo';
import review from '../pagecomponents/Review';
import $ from "jquery";


export default {
    components:{appvideo,review},
    data(){
        return {
            palettes:[],
            minPalettes:[],
            artists:[],
            palettesArtists:[],
            show: false,
            size:false,
            details:false,
            shipping:false,
            id:'',
            minPalette_id:'',
            first:null,
            firstpalettesArtists:null,
            firstminPalettes:null,
            active_el:3,
            S_copies:'',
            S_avalible:'',
            S_price:'',
            M_copies:'',
            M_avalible:'',
            M_price:'',
            L_copies:'',
            L_avalible:'',
            L_price:'',
            sizing_details:'',
            name:'',
            cardId:'',
            priceTarget:'',
            avilableTarget:''


        }
    },
    created() {

      axios.get('/api/palettes')
      .then(response =>{
          this.artists = response.data.artists
          this.first = response.data.artists[0].id
        axios.get("/api/view?id="+ this.first)
        .then(response =>{
            this.palettes = response.data.palettes
            this.name=response.data.palettes[0].name,
            this.cardId=response.data.palettes[0].id,
            this.S_copies=response.data.palettes[0].S_copies,
            this.S_avalible=response.data.palettes[0].S_avalible,
            this.S_price=response.data.palettes[0].S_price,
            this.M_copies=response.data.palettes[0].M_copies,
            this.M_avalible=response.data.palettes[0].M_avalible,
            this.M_price=response.data.palettes[0].M_price,
            this.L_copies=response.data.palettes[0].L_copies,
            this.L_avalible=response.data.palettes[0].L_avalible,
            this.L_price=response.data.palettes[0].L_price,
            this.sizing_details=response.data.palettes[0].sizing_details
            this.palettesArtists = response.data.palettesArtists

            this.firstpalettesArtists = response.data.palettesArtists[0].id
            axios.get("/api/viewMinPalettes?id=" + this.firstpalettesArtists)
            .then(response =>{
                this.minPalettes = response.data.minPalettes
                })
            .catch(error => console.log(error.response.data))
        })
        .catch(error => console.log(error.response.data))
      }

    ).catch(error => console.log(error.response.data));



    },

      computed: {
      cart() {
        return this.products.filter(product => product.quantity > 0);
      },
      totalQuantity() {
        return this.products.reduce(
        (total, product) => total + product.quantity,
        0);

      } },



    methods:{


        addToCart(product){

            this.$store.dispatch('addProductToCart',{
                 product,
                quantity:1
            })
        }
        ,
         updateCart(product, updateType) {
        for (let i = 0; i < this.products.length; i++) {
          if (this.products[i].id === product.id) {
            if (updateType === 'subtract') {
              if (this.products[i].quantity !== 0) {
                this.products[i].quantity--;
              }
            } else {
              this.products[i].quantity++;
            }

            break;
          }
        }
      }
      ,
        getdata($id){
        axios.get("/api/view?id=" +$id)
        .then(response =>{
            this.palettes = response.data.palettes
            this.palettesArtists = response.data.palettesArtists
            if(response.data.palettesArtists.length>0){
                this.firstminPalettes = response.data.palettesArtists[0].id
            } else {
                this.firstminPalettes = null
            }

            if($id > response.data.artists.length){
                axios.get("/api/view?id=" +1)
                .then(response =>{
                    this.palettesArtists = response.data.palettesArtists
                     this.firstminPalettes = response.data.palettesArtists[0].id
                    axios.get("/api/viewMinPalettes?id=" + this.firstminPalettes)
                    .then(response =>{
                        this.minPalettes = response.data.minPalettes
                        })
                        .catch(error => console.log(error.response.data))
                    })
                .catch(error => console.log(error.response.data))
            } else if($id == 0) {

                axios.get("/api/view?id=" + response.data.artists.length )
                .then(response =>{
                    this.palettesArtists = response.data.palettesArtists
                     this.firstminPalettes = response.data.palettesArtists[0].id
                    axios.get("/api/viewMinPalettes?id=" + this.firstminPalettes)
                    .then(response =>{
                        this.minPalettes = response.data.minPalettes
                        })
                        .catch(error => console.log(error.response.data))
                    })
                .catch(error => console.log(error.response.data))
            }

            axios.get("/api/viewMinPalettes?id=" + this.firstminPalettes)
                .then(response =>{
                    this.minPalettes = response.data.minPalettes
                    })
                .catch(error => console.log(error.response.data))
        })
        .catch(error => console.log(error.response.data))
        },
        small(el,price,avilable){
            this.avilableTarget=avilable;
            this.active_el = el;
            this.priceTarget=price

            $(".active>.details_img").css({width:"78%",height:"160px"})
            $(".active>.content").css({width:"78%",margin:"7px 0"})

        },
        medium(el,price,avilable){
            this.avilableTarget=avilable;
            this.active_el = el;
            this.priceTarget=price
            $(".active>.details_img").css({width:"88%",height:"200px"})
            $(".active>.content").css({width:"88%"})
        },
        larg(el,price,avilable){
            this.avilableTarget=avilable;
            this.active_el = el;
            this.priceTarget=price
            $(".active>.details_img").css({width:"100%",height:"250px"})
            $(".active>.content").css({width:"100%"})
        },
        addActive($minPalette_id){
                axios.get("/api/viewMinPalettes?id=" + $minPalette_id)
                .then(response =>{
                    this.minPalettes = response.data.minPalettes
                    this.name=response.data.palettes[0].name,
                    this.cardId=response.data.palettes[0].id,
                    this.S_copies=response.data.palettes[0].S_copies,
                    this.S_avalible=response.data.palettes[0].S_avalible,
                    this.S_price=response.data.palettes[0].S_price,
                    this.M_copies=response.data.palettes[0].M_copies,
                    this.M_avalibles=response.data.palettes[0].M_avalible,
                    this.M_price=response.data.palettes[0].M_price,
                    this.L_copies=response.data.palettes[0].L_copies,
                    this.L_avalibles=response.data.palettes[0].L_avalible,
                    this.L_price=response.data.palettes[0].L_price,
                    this.sizing_details=response.data.palettes[0].sizing_details
                    })
                .catch(error => console.log(error.response.data))
            $('.details').on('click', function () {

                $(this).addClass('active').siblings().removeClass('active');
            });
        },
        addtocart($id,price,avilableTarget){
            console.log(price,"avaliable",avilableTarget)

            axios.post('/api/addtocart?id=' + $id)
            .then(res=>{

            console.log(res.data.paletteCart)

                // $('#count')[0].innerText++

           let product=  res.data.paletteCart

            this.$store.dispatch('addProductToCart',{
                 product,
                quantity:1,
                price:price,
                avilableTarget

            })
            }

            )
            .catch(error => console.log(error))

        }

    }

}




</script>


<style scoped>
    .carousel-item .header{
        width: 100%;
        height: 640px;
    }
    @media(max-width:991px){
        .wrapper{

        }
        .carousel-item .header{
            height: 600px;
        }
    }
    .header_sm{
        background-image: url('https://cdn.shopify.com/s/files/1/3000/4362/files/turrell_mobile_final_post_3_2048x.jpg?v=1565189502');
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        height: 300px;
        background-position: center;
        position: relative;
        display: none;
    }
        @media(max-width:991px){
        .header_sm{
            display: none;
        }
    }
    .wrapper{
   position: absolute;
    top: 15%;
    transform: translate(-50%, 0);
    left: 50%;
    width: 100%

    }
    .details{
    color: #fff;
    cursor: pointer;
    transition: all 1s;

    }
    .details img{
        width: 100%;
        transition: all 1s;
        height: 250px;
        box-shadow: 5px 5px 5px black;
    }
    .wrapper .details .content{
        position: relative;
        font-size: 14px;
        width: 100%;
        margin: 16px auto 0;
        padding: 6px 5px;
        transition: all .5s;
        color:#00a4ee;
        border-radius: 10px;
        background-color: white;
        background-repeat: no-repeat;
        background-position: 50%;
        background-size: 100%;
        z-index: 2;
    }
        .wrapper .details .content .triangle{
    position: absolute;
    z-index: 1;
    padding: 16px;
    top: 0;
    left: 50%;
    transform: rotate(45deg) translate(-50%, 19%);
    background: white;


    }
    /* .wrapper .details .content:hover{
        border: 2px solid #00a4ee;
    } */

    .details-content{
        margin:20px;
    }
    .details:hover {
        transform: scale(1.1);
    }
    .add-cart div span{
        font-size: 15px;
        font-weight: 400;
        line-height: 22px;
        display: inline-block;
        margin-right: 5px;
        padding: 0 10px;
        text-transform: lowercase;
        color: #fff;
        border-radius: 999px;
        background-color: #000;
    }
    .add-cart p{
        font-size: 20px;
    }
    .add-cart .add-button{
        font-size: 20px;
        font-weight: 700;
        line-height: 70px;
        display: block;
        width: 100%;
        margin-bottom: 10px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        color: #fff;
        border: none;
        background-color: #000;
    }
    .add-cart .more{
        outline: none;
    }
    .list-group .list-group-item{
        cursor: pointer;
        border-left: none;
        border-right: none;
        padding-left: 10px;
        padding-right: 10px;
    }
/*
    .carousel-control-prev{
        left: -50%;
    } */
.carousel-indicators li {
    box-sizing: content-box;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    width: 67px;
    height: 29px;
    margin-right: 14px;
    margin-left: 0;
    text-indent: 0;
    cursor: pointer;
    color: black;
    background: none;
}
.carousel-indicators{
    bottom: -9%;
    width: 100%;
    background-color: #f5f0ed;
    margin-left: 0;
    margin-right: 0;
}
@media(max-width: 991px){
    .carousel-indicators{
        bottom: -15%;
    }
}
.carousel-indicators .active{
    border-bottom: 3px solid #25d1e2;
}
.small, .medium, .larg{
    padding: 30px !important;
    margin-right: 20px !important;
    font-size: 20px ;
}
.active>.content {
    border: 2px solid #00a4ee;
}
.active_btn{
    border: 2px solid #00a4ee;
}
</style>
