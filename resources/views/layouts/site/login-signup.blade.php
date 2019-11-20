<div class="modal fade login-modal-main" id="login">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body pop-border-left">
                <div class="login-modal">
                    <div class="row">
                        <div class="col-lg-6 d-flex align-items-center">
                            <div class="login-modal-left p-4 text-center pl-5">
                                <img src="img/login.jpg" alt="Gurdeep singh osahan">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <button type="button" class="close close-top-right position-absolute" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="icofont-close-line"></i></span>
                                <span class="sr-only">Close</span>
                            </button>
                            <div class="position-relative">
                                <ul class="mt-4 mr-4 nav nav-tabs-login float-right position-absolute" role="tablist">
                                    <li>
                                        <a class="nav-link-login active" data-toggle="tab" href="#login-form" role="tab"><i class="icofont-ui-lock"></i> LOGIN</a>
                                    </li>
                                    <li>
                                        <a class="nav-link-login" data-toggle="tab" href="#register" role="tab"><i class="icofont icofont-pencil"></i> REGISTER</a>
                                    </li>
                                </ul>
                                <div class="login-modal-right p-4">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="login-form" role="tabpanel">
                                            <h5 class="heading-design-h5 text-dark">LOGIN</h5>
                                            <label id="login_msg"></label>
                                            <form method="post" action="{{route('site.user.login')}}" id="loginUser">
                                                @csrf
                                                <fieldset class="form-group mt-4">
                                                    <label>Enter Email/Mobile Number</label>
                                                    <input id="email_id" name="email_id" type="text" class="form-control" placeholder="Email Address/Mobile Number">
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label>Enter Password</label>
                                                    <input id="password" name="password" type="password" class="form-control" placeholder="********">
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <input type="submit" class="btn btn-lg btn-primary btn-block" value="Enter to your account">
                                                    <!--                                                            <button formaction="profile.html" type="submit" class="btn btn-lg btn-primary btn-block">Enter to your account</button>-->
                                                </fieldset>
                                            </form>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Remember me</label>
                                            </div>
                                            <a data-toggle="tab" href="#forget-form" role="tab">Forget Password</a>
                                            <div class="login-with-sites mt-4">
                                                <p class="mb-2">or Login with your social profile:</p>
                                                <div class="row text-center">
                                                    <div class="col-6 pr-1">
                                                        <button class="btn-facebook btn-block login-icons btn-lg"><i class="icofont icofont-facebook"></i> Facebook</button>
                                                    </div>
                                                    <div class="col-6 pl-1">
                                                        <button class="btn-google btn-block login-icons btn-lg"><i class="icofont icofont-google-plus"></i> Google</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="forget-form" role="tabpanel">
                                            <h5 class="heading-design-h5 text-dark">Forget Password</h5>
                                            <label id="forget_msg"></label>
                                            <form method="post" action="{{route('site.user.forget-link')}}" id="forgetUser">
                                                @csrf
                                                <fieldset class="form-group mt-4">
                                                    <label>Enter Email/Mobile Number</label>
                                                    <input id="forget_email_id" name="forget_email_id" type="text" class="form-control" placeholder="Email Address/Mobile Number">
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <input type="submit" class="btn btn-lg btn-primary btn-block" value="Submit">
                                                </fieldset>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="register" role="tabpanel">
                                            <h5 class="heading-design-h5 text-dark">REGISTER</h5>
                                            <label id="reg_msg"></label>

                                            <form style="display: none;" method="post" action="{{route('site.user.verify-otp')}}" id="verifyOTP">
                                                @csrf
                                                <input name="user_otp_id" id="user_otp_id" type="hidden" class="form-control" value="0">
                                                <fieldset class="form-group mt-4">
                                                    <label>Enter OTP</label>
                                                    <input name="user_OTP" id="user_OTP" type="text" class="form-control" placeholder="OTP">
                                                </fieldset>

                                                <fieldset class="form-group">
                                                    <input type="submit" class="btn btn-lg btn-primary btn-block" value="Verify">
                                                </fieldset>

                                            </form>
                                            <form method="post" action="{{route('site.user.register')}}" id="registerUser">
                                                @csrf
                                                <fieldset class="form-group mt-4">
                                                    <label>Enter Name</label>
                                                    <input name="user_name" id="user_name" type="text" class="form-control" placeholder="Name">
                                                </fieldset>
                                                <fieldset class="form-group mt-4">
                                                    <label>Enter Email/Mobile</label>
                                                    <input name="user_email_mobile" id="user_email_mobile" type="text" class="form-control" placeholder="Email Address/Mobile Number">
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label>Enter Password</label>
                                                    <input name="user_password" id="user_password" type="password" class="form-control" placeholder="********">
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label>Enter Confirm Password </label>
                                                    <input name="user_c_password" id="user_c_password" type="password" class="form-control" placeholder="********">
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <input type="checkbox" id="register_term" name="register_term">
                                                    <label for="customCheck2">I Agree with <a href="#">Term and Conditions</a></label>
                                                    <div id="reg_term_div_error"></div>
                                                </fieldset>

                                                <fieldset class="form-group">
                                                    <input type="submit" class="btn btn-lg btn-primary btn-block" value="Create Your Account">
                                                </fieldset>

                                            </form>
                                            <div class="login-with-sites mt-4">
                                                <p class="mb-2">or Login with your social profile:</p>
                                                <div class="row text-center">
                                                    <div class="col-6 pr-1">
                                                        <button class="btn-facebook btn-block login-icons btn-lg"><i class="icofont icofont-facebook"></i> Facebook</button>
                                                    </div>
                                                    <div class="col-6 pl-1">
                                                        <button class="btn-google btn-block login-icons btn-lg"><i class="icofont icofont-google-plus"></i> Google</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>