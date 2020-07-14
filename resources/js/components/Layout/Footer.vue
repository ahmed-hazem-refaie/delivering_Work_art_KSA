<template>
  <footer>
    <div class="row mb-3 pl-2">
        <div class="col-md-4 footer-col-1">
            <a href="" class="footer-logo">Ecstase</a>
            <div class="footer-info">
                <p class="lead">ecstase BV. Westplein 12 <br>
                    3016BM Rotterdam, The Netherlands</p>
            </div>
            <div class="footer-social">
                <a href="" class="custom-social-link "><i class="fa fa-facebook facebook"></i></a>
                <a href="" class="custom-social-link "><i class="fa fa-instagram instagram"></i></a>
            </div>
        </div>
        <div class="col-md-8 ">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-2 pl-5">
                    <ul class="footer-menu">
                        <li class="footer-title">
                            {{ $t("message.Limitworks") }}
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-item-link">Porta ac consectetur ac</a>
            
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-item-link">Porta ac consectetur ac</a>
            
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-2 pl-5">
                    <ul class="footer-menu">
                        <li class="footer-title">
                            {{ $t("message.company") }}
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-item-link">Porta ac consectetur ac</a>
            
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-item-link">Porta ac consectetur ac</a>
            
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-2 pl-5">
                    <ul class="footer-menu">
                        <li class="footer-title">
                            {{ $t("message.others") }}
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-item-link">Porta ac consectetur ac</a>
            
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-item-link">Porta ac consectetur ac</a>
            
                        </li>
                    </ul> 
                </div>
                <div class="col-md-6 col-lg-3 mb-2 pl-0">
                    <div class="footer-col footer-col-2">
                        <h3 class="footer-title">{{ $t("message.Newsletter") }}</h3>
                        <p >{{ $t("message.signup") }}</p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalLoginForm">{{ $t("message.SUBSCRIBE") }}</button>
                        <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title w-100 font-weight-bold">Confirm</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                    
                                    <form action="" method="">
                                        @csrf
                    
                                        <div id='consmodal' class="modal-body mx-3 text-dark">
                                            <div class="md-form mb-2">
                                                <i class="fa fa-user" v-if="$i18n.locale == 'en'"></i>
                                                <i class="fa fa-user mb-1" v-else style="float:right"></i>
                                                <div style="clear:both"></div>
                                                <input  type="text" class="form-control validate" v-if="$i18n.locale == 'en'" name="username">
                                                <input  type="text" class="form-control validate" v-else dir="rtl" name="username">
                                                <label data-error="wrong" v-if="$i18n.locale == 'en'" data-success="right" for="defaultForm-email">{{ $t("message.name") }}</label>
                                                <label data-error="wrong" v-else style="float:right" data-success="right" for="defaultForm-email">{{ $t("message.name") }}</label>
                                                <div style="clear:both"></div>
                                            </div>
                                            <div class="md-form mb-2">
                                                <i class="fa fa-envelope" v-if="$i18n.locale == 'en'"></i>
                                                <i class="fa fa-envelope mb-1" v-else style="float:right"></i>
                                                <div style="clear:both"></div>
                                                <input  type="email" class="form-control validate" v-if="$i18n.locale == 'en'" name="email">
                                                <input  type="email" class="form-control validate" v-else dir="rtl" name="email">
                                                <label data-error="wrong" data-success="right" v-if="$i18n.locale == 'en'" for="defaultForm-email">{{ $t("message.email") }}</label>
                                                <label data-error="wrong" data-success="right" v-else style="float:right" for="defaultForm-email">{{ $t("message.email") }}</label>
                                                <div style="clear:both"></div>
                                            </div>
                                            <div class="md-form mb-2">
                                                <i class="fa fa-phone" v-if="$i18n.locale == 'en'"></i>
                                                <i class="fa fa-phone mb-1" v-else style="float:right"></i>
                                                <div style="clear:both"></div>
                                                <input  type="text" name="phone" v-if="$i18n.locale == 'en'" class="form-control validate">
                                                <input  type="text" name="phone" v-else dir="rtl" class="form-control validate">
                                                <label data-error="wrong" data-success="right" v-if="$i18n.locale == 'en'" for="defaultForm-pass">{{ $t("message.phone") }}</label>
                                                <label data-error="wrong" data-success="right" v-else style="float:right" for="defaultForm-pass">{{ $t("message.phone") }}</label>
                                                <div style="clear:both"></div>
                                            </div>
                                        </div>
                                        <div class="modal-footer d-flex justify-content-center">
                                            <button class="btn btn-info btn-block">{{ $t("message.submit") }}</button>
                                        </div>
                                    </form>
                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5 mb-2 footer-img">
        <div class="col-md-6" style="padding-left: 37px">
            &COPY;ECSTASE
        </div>
        <div class="col-md-6 mr-auto img">
            <img src="/images/iconfinder_24_Apple_Pay_4518982.png" width="40" alt="Pay">
            <img src="/images/iconfinder_Master_Card_380809.png" width="40" alt="master">
            <img src="/images/iconfinder_paypal_1220357.png" width="40" alt="paypal">
            <img src="/images/iconfinder_social_visa_406088.png" width="40" alt="visa">
        </div>
    </div>
</footer>
</template>

<script>
export default {

}
</script>

<style scoped>
.row{
    margin-left: 0;
    margin-right: 0;
}

</style>