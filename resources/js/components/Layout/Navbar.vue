<template>
    <nav class="navbar navbar-expand-lg navbar-light px-3 sticky-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/"><img class="logo-ecs" src="//cdn.shopify.com/s/files/1/3000/4362/t/109/assets/logo-ecs.png?v=2452931808056810559" width="32px" alt=""></a>
        <LanguageDropdown></LanguageDropdown>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav  mx-auto mt-2 mt-lg-0" v-if="$i18n.locale == 'en'">
                <li class="nav-item active">
                    <router-link to="/">
                        <a class="nav-link"> {{ $t("message.home") }}<span class="sr-only">(current)</span></a>
                    </router-link>

                </li>
                <li class="nav-item">
                    <router-link to="/shop">
                        <a class="nav-link">{{ $t("message.shopart") }}</a>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/about">
                        <a class="nav-link">{{ $t("message.about") }}</a>
                    </router-link>
                </li>
            </ul>
            <ul class="navbar-nav  mx-auto mt-2 mt-lg-0" v-else>
                <li class="nav-item">
                    <router-link to="/about">
                        <a class="nav-link">{{ $t("message.about") }}</a>
                    </router-link>
                </li>

                <li class="nav-item">
                    <router-link to="/shop">
                        <a class="nav-link">{{ $t("message.shopart") }}</a>
                    </router-link>
                </li>
                <li class="nav-item active">
                    <router-link to="/">
                        <a class="nav-link"> {{ $t("message.home") }}<span class="sr-only">(current)</span></a>
                    </router-link>

                </li>
            </ul>
        </div>
            <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
            <button class="nav-btns" @click="showModal = true">
        <img src="//cdn.shopify.com/s/files/1/3000/4362/t/109/assets/nav_icons_bag.svg?v=8412811641524949656" alt="Shopping Cart" width="33px">
         <span id="count">{{cartItemCount}}</span>
          </button>
            <div v-if="showModal">
                <transition name="modal">
                <div class="modal-mask">
                    <div class="modal-wrapper">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">


                            <h5 class="modal-title"> {{ $t("message.cartname") }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" @click="showModal = false">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" >

<!-- -------------------------------------------pallalet cart----------------- -->
                            <div class="row mt-2 border-bottom"
                                 v-for="(item,index) in cart "
                                 :key="{index}">
                                <div class="col-md-sm-4 ml-3">
                                    <img :src="item.product.img">
                                </div>
                                <div class="col-md-sm-8 ml-3">
                                    <span> <strong>{{ item.product.name }}</strong></span>
                                    <h6 >{{ item.product.L_size }}</h6>
                                     <!-- <h6 >{{ item.avilableTarget }}</h6> -->
                                    <h6>{{ item.quantity }} x ${{item.price}}</h6>
                                </div>
                                  <div>
                                <v-form style="width:50%;display:inline-block">
                                    <!-- <v-text-field  v-model=" item.quantity  ">
                                        <v-icon slot="append" @click="addToCart(item.product )">mdi-plus</v-icon>
                                        <v-icon slot="prepend"  @click.prevent="decreaseProduct(item.product)"  >mdi-minus</v-icon>
                                    </v-text-field> -->
                                </v-form>
                                <button class="ml-3 btn btn-danger" @click.prevent="clearProductFromCart(index)"> {{ $t("message.remove") }}</button>
                            </div>
                            </div>



                        </div>

                        <div class="modal-footer">
                            <router-link style="margin: auto;color: #fff;"
                            :to="{ path: '/payment', query: { myprop: this.pallatecart }}">
                                <button type="button" class="btn btn-dark" style="font-size: 18px;"> {{ $t("message.total") }}: {{cartTotalPrice}} &nbsp;  <strong>.</strong> &nbsp;  {{ $t("message.checkout") }}</button>
                            </router-link>

                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </transition>
            </div>
    </nav>
</template>

<script>
import LanguageDropdown from './LanguageDropdown';
export default {
    computed: {
    cartTotalPrice() {
      return this.$store.getters.cartTotalPrice;
    },
    cart() {
      return this.$store.state.cart;
    },
    cartItemCount(){
      return this.$store.getters.cartItemCount
    }
  },
    components:{LanguageDropdown},
    data(){
        return {
            showModal: false,
            value:1,
            pallatecart:[],
            cartcount:''
        }
    },
    created(){
        axios.get('/api/getpallatecart')
        .then(res=>{
            this.cartcount = res.data.palettes.length
            this.pallatecart=res.data.palettes
            })
        .catch(error => console.log(error.response.data))
    },
    methods:{
           decreaseProduct(product){

            this.$store.dispatch('decreaseProduct',{
                 product,
                quantity:1
            })
        },
         addToCart(product){
             console.log(product)
            this.$store.dispatch('addProductToCart',{
                 product,
                quantity:1
            })
        },
         clearProductFromCart(index){
      this.$store.dispatch("deleteCartItem",index)
    },
    clearCartItems(){
      this.$store.dispatch("clearCartItems")
    },

        plus($id){
            this.value +=1
        },
        minus(){
            this.value -=1
            if(this.value <= 0){
                this.value = 0
            }
        },
        remove($id){
            axios.post('/api/removefromcart?id='+ $id)
            .then(res => {
                this.pallatecart.splice(res.data.paletteCart,1)
                $('#count')[0].innerText--;
                })
            .catch(error => console.log(error.response.data))
        }
    }
}
</script>

<style scoped>
.modal-mask {
  position: fixed;

  top: 0;
  left: 0;
  width: 100%;

  background-color: rgba(0, 0, 0, .5);
  display: block;
  transition: opacity .3s ease;
}

.modal-wrapper {
  display: table-cell;
  vertical-align: middle;
  float: right;
}
.modal-content{
    top: -27px;
    overflow: scroll;

    min-height: 800px;

}
.modal-body {
    position: relative;
    -ms-flex: 1 1 auto;
    max-height: 500px;
    flex: 1 1 auto;
    overflow: auto;
    padding: 1rem;
}
/* .modal-body{
    position: absolute;
    width: 400px;
        overflow: scroll;
} */
.modal-body img{
    width: 62px;
    height: 40px;
}
</style>
