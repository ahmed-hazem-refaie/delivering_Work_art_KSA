<template>
  <footer>
    <div class="row mb-3">
        <div class="col-md-4 footer-col-1">
            <a href="" class="footer-logo">ECSTASE</a>
            <div class="footer-info">
                <p class="lead">ecstase BV. Westplein 12 </br>
                    3016BM Rotterdam, The Netherlands</p>
            </div>
            <div class="footer-social">
                <a href="" class="custom-social-link"><i class="fa fa-facebook"></i></a>
                <a href="" class="custom-social-link"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-2">
                    <ul class="footer-menu">
                        <li class="footer-title">
                            limitworks
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-item-link">Porta ac consectetur ac</a>
            
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-item-link">Porta ac consectetur ac</a>
            
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-2">
                    <ul class="footer-menu">
                        <li class="footer-title">
                            Company
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-item-link">Porta ac consectetur ac</a>
            
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-item-link">Porta ac consectetur ac</a>
            
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-2">
                    <ul class="footer-menu">
                        <li class="footer-title">
                            others
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-item-link">Porta ac consectetur ac</a>
            
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-item-link">Porta ac consectetur ac</a>
            
                        </li>
                    </ul> 
                </div>
                <div class="col-md-6 col-lg-3 mb-2">
                    <div class="footer-col footer-col-2">
                        <h3 class="footer-title">NEWSLETTER</h3>
                        <p >Sign up for a notification email when new limited artworks are released.</p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalLoginForm">SUBSCRIBE</button>
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
                                                <i class="fa fa-user"></i>
                                                <input  type="text" class="form-control validate" name="username">
                                                <label data-error="wrong" data-success="right" for="defaultForm-email">Your Name</label>
                                            </div>
                                            <div class="md-form mb-2">
                                                <i class="fa fa-user"></i>
                                                <input  type="email" class="form-control validate" name="email">
                    
                                                <label data-error="wrong" data-success="right" for="defaultForm-email">Your Email</label>
                                            </div>
                                            <div class="md-form mb-2">
                                                <i class="fa fa-phone"></i>
                                                <input  type="text" name="phone" class="form-control validate">
                                                <label data-error="wrong" data-success="right" for="defaultForm-pass">Your Phone</label>
                                            </div>
                                        </div>
                                        <div class="modal-footer d-flex justify-content-center">
                                            <button class="btn btn-info btn-block">Submit</button>
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

<style>

</style>