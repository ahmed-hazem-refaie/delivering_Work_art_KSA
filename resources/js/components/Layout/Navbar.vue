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
            <button class="nav-btns" @click="showModal = true"> <img src="//cdn.shopify.com/s/files/1/3000/4362/t/109/assets/nav_icons_bag.svg?v=8412811641524949656" alt="Shopping Cart" width="33px"> <span>0</span> </button>
            <div v-if="showModal">
                <transition name="modal">
                <div class="modal-mask">
                    <div class="modal-wrapper">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Cart</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" @click="showModal = false">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-sm-4 ml-3">
                                    <img src="//cdn.shopify.com/s/files/1/3000/4362/products/Ehmiyat_Walltones_Product_Image_1.jpg?v=1581337922">
                                </div>
                                <div class="col-md-sm-8 ml-3">
                                    <span>All I Ever Wanted Was Everything</span>
                                    <h6 >70x93.5cm (28x37")</h6>
                                    <h6>$70.00</h6>
                                </div>
                            </div>

                            <div>
                                <v-form style="width:50%;display:inline-block">
                                    <v-text-field  v-model="value">

                                        <v-icon slot="append" @click="plus">mdi-plus</v-icon>
                                        <v-icon slot="prepend" @click="minus">mdi-minus</v-icon>
                                    </v-text-field>
                                </v-form>
                                <v-btn class="ml-3">Remove</v-btn>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <router-link style="margin: auto;color: #fff;" to="/payment">
                                <button type="button" class="btn btn-dark" style="font-size: 18px;">$890 &nbsp;  <strong>.</strong> &nbsp; Checkout</button>
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
    components:{LanguageDropdown},
    data(){
        return {
            showModal: false,
            value:1,
        }
    },
    methods:{
        plus(){
            this.value +=1
        },
        minus(){
            this.value -=1
            if(this.value <= 0){
                this.value = 0
            }
        }
    }
}
</script>

<style scoped>
.modal-mask {
  position: fixed;
  z-index: 9998;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
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
    height: 947px;

}
.modal-body img{
    width: 62px;
    height: 70px;
}
</style>
