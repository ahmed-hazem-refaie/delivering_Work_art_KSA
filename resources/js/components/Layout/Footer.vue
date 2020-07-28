<template>
  <footer  class="myhome">
    <div class="row mb-3 pl-2">
        <div class="col-md-4 footer-col-1">
            <a href="" class="footer-logo">{{$t("message.logo") }}</a>
            <div class="footer-info">
                <p class="lead">{{ $t("message.lorem") }}<br>
                  {{ $t("message.lorem") }}</p>
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
                            <a href="#" class="footer-menu-item-link">  {{ $t("message.lorem") }}</a>

                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-item-link">  {{ $t("message.lorem") }}</a>

                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-2 pl-5">
                    <ul class="footer-menu">
                        <li class="footer-title">
                            {{ $t("message.company") }}
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-item-link">{{ $t("message.lorem") }}</a>

                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-item-link">{{ $t("message.lorem") }}</a>

                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-2 pl-5">
                    <ul class="footer-menu">
                        <li class="footer-title">
                            {{ $t("message.others") }}
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-item-link">{{ $t("message.lorem") }}</a>

                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-item-link">{{ $t("message.lorem") }}</a>

                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-2 pl-0">
                    <div class="footer-col footer-col-2">
                        <h3 class="footer-title">{{ $t("message.Newsletter") }}</h3>
                        <p >{{ $t("message.signup") }}</p>
                        <a class="btn signUp btn-primary" data-toggle="modal" data-target="#modalLoginForms">{{ $t("message.SUBSCRIBE") }}</a>
                        <div class="modal fade" id="modalLoginForms" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title-sign w-100 font-weight-bold"> <span>Sign</span> Up</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>



                            <div   v-if="errors.length > 0 && !message" class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Sorry!</strong> You should check in on some of those fields below.
                                    <br>
                                    <ul >
                                        <li v-for="item in errors">
                                            {{ item }}
                                        </li>
                                    </ul>



                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div   v-if=" message.length >0 " class="alert alert-warning alert-dismissible fade show" role="alert">
                                  <h1> {{message}}</h1>

                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>

                                    <form @submit.prevent="send">
                                        <!-- @csrf -->

                                        <div id='consmodal' class="modal-body mx-3 text-dark">
                                            <div class="md-form mb-2">
                                                <i class="fa fa-user" v-if="$i18n.locale == 'en'"></i>
                                                <i class="fa fa-user mb-1" v-else style="float:right"></i>

                                                  <label data-error="wrong" v-if="$i18n.locale == 'en'" data-success="right" for="defaultForm-email">{{ $t("message.name") }}</label>
                                                <label data-error="wrong" v-else style="float:right" data-success="right" for="defaultForm-email">{{ $t("message.name") }}</label>
                                                <input   v-model="form.name" type="text" class="form-control validate" v-if="$i18n.locale == 'en'" >
                                                <input  v-model="form.name" type="text" class="form-control validate" v-else dir="rtl" >


                                            </div>
                                            <div class="md-form mb-2">
                                                <i class="fa fa-envelope" v-if="$i18n.locale == 'en'"></i>
                                                <i class="fa fa-envelope mb-1" v-else style="float:right"></i>

                                                 <label data-error="wrong" data-success="right" v-if="$i18n.locale == 'en'" for="defaultForm-email">{{ $t("message.email") }}</label>
                                                <label data-error="wrong" data-success="right" v-else style="float:right" for="defaultForm-email">{{ $t("message.email") }}</label>
                                                <input  type="email" class="form-control validate" v-if="$i18n.locale == 'en'"  v-model="form.email">
                                                <input  type="email" class="form-control validate" v-else dir="rtl"  v-model="form.email" >


                                            </div>
                                            <div class="md-form mb-2">
                                                <i class="fa fa-phone" v-if="$i18n.locale == 'en'"></i>
                                                <i class="fa fa-phone mb-1" v-else style="float:right"></i>

                                                   <label data-error="wrong" data-success="right" v-if="$i18n.locale == 'en'" for="defaultForm-pass">{{ $t("message.phone") }}</label>
                                                <label data-error="wrong" data-success="right" v-else style="float:right" for="defaultForm-pass">{{ $t("message.phone") }}</label>
                                                <input  type="text"  v-model="form.phone" v-if="$i18n.locale == 'en'" class="form-control validate">
                                                <input  type="text"  v-model="form.phone" v-else dir="rtl" class="form-control validate">


                                            </div>
                                        </div>
                                        <div class="modal-footer d-flex justify-content-center">
                                            <button type="submit" class="btn btn-info btn-block">{{ $t("message.submit") }}</button>
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

            data:()=>({
                form:{phone:'',name:'',email:''},
                errors:[],
                message:''
            }),
            methods:{
                send(){
            axios.post('/api/artist-request',this.form)
            .then(res =>{

                if (!res.data.status)
                {
                    console.log(res.data);
                    this.errors = res.data.errors;


                }else{
                    console.log(res.data);
                    this.message = 'Successful';
                    this.form.phone="";
                    this.form.name="";
                    this.form.email="";


                }
            })
            .catch(error => this.errors = error.response.data.errors)
                }
            }
}


</script>

<style scoped>

#modalLoginForms .modal-content{
    /* background: linear-gradient(-45deg , white 50% , #0c6bd1 50%); */
    font-weight: bold;
    color: gray;
    border:1px solid white;
   /* border-radius: 40px; */
    overflow: hidden;

}

.modal-header{
      background:#0c6bd1
}

#modalLoginForms .modal-content .fa{
 color: #0c6bd1;
}
#modalLoginForms .modal-footer{
    padding: 0;
}
#modalLoginForms .md-form{
    padding: 13px;
}

#modalLoginForms .modal-content .btn-info{
    margin: 0;
    border-radius: 0;
    background: #0c6bd1;
    padding: 10px;
}


.form-control{
    border: 1px solid #0c6bd1;

}

.modal-title-sign{
     color:orangered;
    font-size: 30px;
}
.modal-title-sign span{

        color:white;


}

.modal-header .close{
    color: white;
}
.row{
    margin-left: 0;
    margin-right: 0;
}

</style>
