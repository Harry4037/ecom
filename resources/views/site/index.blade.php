<!DOCTYPE html>
<html lang="en">
    @include('layouts.site.header')
    <body>
        <div class="alert alert-info fade in show btn-primary pt-2 pb-2" style="border-radius: 0px;border: none;margin: 0px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a href="shop.html" class="mb-0 text-white">
                            40% CASHBACK FOR NEW USERS | CODE: <strong><span class="text-light">GURDEEPOSAHAN40 <span class="mdi mdi-tag-faces"></span></span> </strong>  
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="font-size: 16px;">
                                <span aria-hidden="true" style="font-size:20px">×</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
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
                                                            <label>Enter Email</label>
                                                            <input id="email_id" name="email_id" type="text" class="form-control" placeholder="Email Address">
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
        <div class="bg-light">
            <div class="header-top border-bottom bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-inline float-right mb-0">
                                <li class="list-inline-item border-right border-left py-1 pr-2 mr-2 pl-2">
                                    <a href=""><i class="icofont icofont-iphone"></i> +1-123-456-7890</a>
                                </li>
                                <li class="list-inline-item border-right py-1 pr-2 mr-2">
                                    <a href="contact-us.html"><i class="icofont icofont-headphone-alt"></i> Contact Us</a>
                                </li>
                                <li class="list-inline-item">
                                    <span>Download App</span> &nbsp;
                                    <!--<a href="#"><i class="icofont icofont-brand-windows"></i></a>-->
                                    <a href="#"><i class="icofont icofont-brand-apple"></i></a>
                                    <a href="#"><i class="icofont icofont-brand-android-robot"></i></a>
                                </li>
                            </ul>
                            <p class="mb-0 py-1">FREE CASH ON DELIVERY &amp; SHIPPING AVAILABLE OVER <span class="text-danger font-weight-bold">$499</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-nav shadow-sm" id="navbar">
                <nav class="navbar navbar-expand-lg navbar-light bg-white pt-0 pb-0 border-bottom">
                    <div class="container">
                        <a class="navbar-brand" href="index.html">
                            <img src="img/logo.png" alt="gurdeep osahan designer">
                        </a>
                        <form class="form-inline my-2 my-lg-0 top-search">
                            <div class="cat-drop">
                                <select  class="select2 form-control border-form-control">
                                    <option value="">All</option>
                                    <option value="smartphone">Smartphone</option>
                                    <option value="sounds">Sounds</option>
                                    <option value="technology">Technology</option>
                                </select> 
                            </div>                  	
                            <input class="form-control mr-sm-2" type="search" placeholder="Search for products, brands and more" aria-label="Search">
                            <button class="btn-link" type="submit"><i class="icofont-search"></i></button>
                        </form>
                        <ul class="navbar-nav profile-nav-right">
                            @if(auth('web')->user())
                            <li class="nav-item dropdown">
                                <a class="nav-link ml-0 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img alt="Generic placeholder image" src="{{ asset('img/user/1.png')}}" class="nav-osahan-pic rounded-pill"> My Account
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow-sm border-0">
                                    <a class="dropdown-item" href="profile.html"><i class="icofont-ui-user"></i> My Profile</a>
                                    <a class="dropdown-item" href="profile.html"><i class="icofont-location-pin"></i> My Address</a>
                                    <a class="dropdown-item" href="profile.html"><i class="icofont-heart"></i> Wish List</a>
                                    <a class="dropdown-item" href="profile.html"><i class="icofont-list"></i> Order List</a>
                                    <a class="dropdown-item" href="profile.html"><i class="icofont-file-document"></i> Order Status</a>
                                    <a class="dropdown-item" href="{{route('site.user.logout')}}"><i class="icofont-logout"></i> Logout</a>
                                </div>
                            </li>
                            <li class="nav-item cart-nav">
                                <a data-toggle="offcanvas" class="nav-link" href="#">
                                    <i class="icofont-basket"></i> Cart
                                    <span class="badge badge-danger">5</span>
                                </a>
                            </li>
                            @else
                            <li class="nav-item">
                                <a href="#" data-target="#login" data-toggle="modal" class="nav-link ml-0">
                                    <i class="icofont-ui-user"></i> Login/Sign Up
                                </a>
                            </li>

                            @endif

                        </ul>                  
                    </div>
                </nav>
                <nav  class="navbar navbar-expand-lg navbar-light bg-white pt-0 pb-0">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="dropdown-custom">
                                <button class="dropbtn"><i class="fa fa-bars" aria-hidden="true"></i> Shop by Department</button>
                                <div class="dropdown-content">
                                    <a href="#">Home Audio & Theathers</a>
                                    <a href="#">TV & Videos</a>
                                    <a href="#">Camera, Photos & Videos</a>
                                    <a href="#">Cellphones & Accessories</a>
                                    <a href="#">Jeans</a>
                                    <a href="#">Formal Trousers</a>
                                    <a href="#">T-Shirts</a>
                                </div>
                            </div>                  	
                            <ul class="navbar-nav mr-auto main-nav-left">
                                <li class="nav-item">
                                    <a class="nav-link" href="product-grid.html">Electronics</a>
                                </li>
                                <li class="nav-item dropdown mega-drop-main">
                                    <a class="nav-link dropdown-toggle" href="product-grid.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        WOMEN
                                    </a>
                                    <div class="dropdown-menu mega-drop  shadow-sm border-0" aria-labelledby="navbarDropdown">
                                        <div class="row ml-0 mr-0">
                                            <div class="col-lg-2 col-md-2">
                                                <div class="mega-list">
                                                    <a class="mega-title" href="product-grid.html">Lingerie & Sleepwear</a>
                                                    <a href="product-grid.html">Bras & Lingerie Sets</a>
                                                    <a href="product-grid.html">Briefs</a>
                                                    <a href="product-grid.html">Shapewear</a>
                                                    <a href="product-grid.html">Sleepwear & Loungewear</a>
                                                    <a href="product-grid.html">Swimwear</a>
                                                    <a href="product-grid.html">Camisoles & Thermals</a>
                                                    <a href="product-grid.html">Blazers & Coats</a>
                                                    <a href="product-grid.html">Suits</a>
                                                    <a href="product-grid.html">Rain Jackets</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2">
                                                <div class="mega-list">
                                                    <a class="mega-title" href="product-grid.html">Bottomwear</a>
                                                    <a href="product-grid.html">                    Jeans</a>
                                                    <a href="product-grid.html">Casual Trousers</a>
                                                    <a href="product-grid.html">Formal Trousers</a>
                                                    <a href="product-grid.html">Shorts</a>
                                                    <a href="product-grid.html">Track Pants & Joggers</a>
                                                    <a href="product-grid.html">T-Shirts</a>
                                                    <a href="product-grid.html">Sweatshirts</a>
                                                    <a href="product-grid.html">Casual Shirts</a>
                                                    <a href="product-grid.html">Formal Shirts</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2">
                                                <div class="mega-list">
                                                    <a class="mega-title" href="product-grid.html">Western Wear</a>
                                                    <a href="product-grid.html">Sweaters</a>
                                                    <a href="product-grid.htproduct-grid.htmll">Jackets</a>
                                                    <a href="product-grid.html">Blazers & Coats</a>
                                                    <a href="product-grid.html">Suits</a>
                                                    <a href="product-grid.html">Rain Jackets</a>
                                                    <a href="product-grid.html">T-Shirts</a>
                                                    <a href="product-grid.html">Casual Shirts</a>
                                                    <a href="product-grid.html">Formal Shirts</a>
                                                    <a href="product-grid.html">Sweatshirts</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2">
                                                <div class="mega-list">
                                                    <a class="mega-title" href="product-grid.html">Footwear</a>
                                                    <a href="product-grid.html">Casual Shoes</a>
                                                    <a href="product-grid.html">Sports Shoes</a>
                                                    <a href="product-grid.html">Formal Shoes</a>
                                                    <a href="product-grid.html">Sandals & Floaters</a>
                                                    <a href="product-grid.html">Flip Flops</a>
                                                    <a href="product-grid.html">Socks</a>
                                                    <a href="product-grid.html">Formal Shirts</a>
                                                    <a href="product-grid.html">Sneakers</a>
                                                    <a href="product-grid.html">Sweatshirts</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2">
                                                <div class="mega-list">
                                                    <a class="mega-title" href="product-grid.html">Lingerie & Sleepwear</a>
                                                    <a href="product-grid.html">Bras & Lingerie Sets</a>
                                                    <a href="product-grid.html">Briefs</a>
                                                    <a href="product-grid.html">Shapewear</a>
                                                    <a href="product-grid.html">Sleepwear & Loungewear</a>
                                                    <a href="product-grid.html">Swimwear</a>
                                                    <a href="product-grid.html">Camisoles & Thermals</a>
                                                    <a href="product-grid.html">Blazers & Coats</a>
                                                    <a href="product-grid.html">Suits</a>
                                                    <a href="product-grid.html">Rain Jackets</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2">
                                                <div class="mega-list">
                                                    <a class="mega-title" href="product-grid.html">Bottomwear</a>
                                                    <a href="product-grid.html">                    Jeans</a>
                                                    <a href="product-grid.html">Casual Trousers</a>
                                                    <a href="product-grid.html">Formal Trousers</a>
                                                    <a href="product-grid.html">Shorts</a>
                                                    <a href="product-grid.html">Track Pants & Joggers</a>
                                                    <a href="product-grid.html">T-Shirts</a>
                                                    <a href="product-grid.html">Sweatshirts</a>
                                                    <a href="product-grid.html">Casual Shirts</a>
                                                    <a href="product-grid.html">Formal Shirts</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown mega-drop-main">
                                    <a class="nav-link dropdown-toggle" href="product-grid.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        MEN</a>
                                    <div class="dropdown-menu mega-drop  shadow-sm border-0" aria-labelledby="navbarDropdown">
                                        <div class="row ml-0 mr-0">
                                            <div class="col-lg-3 col-sm-3 col-xs-3 col-md-3">
                                                <div class="mega-list">
                                                    <a class="mega-title" href="product-grid.html">Topwear</a>
                                                    <a href="product-grid.html">T-Shirts</a>
                                                    <a href="product-grid.html">Casual Shirts</a>
                                                    <a href="product-grid.html">Formalproduct-grid.htmlShirts</a>
                                                    <a href="product-grid.html">Sweatshirts</a>
                                                    <a href="product-grid.html">Sweaters</a>
                                                    <a href="product-grid.html">Jackets</a>
                                                    <a href="product-grid.html">Blazers & Coats</a>
                                                    <a href="product-grid.html">Suits</a>
                                                    <a href="product-grid.html">Rain Jackets</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-3 col-xs-3 col-md-3">
                                                <div class="mega-list">
                                                    <a class="mega-title" href="product-grid.html">Western Wear</a>
                                                    <a href="product-grid.html">Sweaters</a>
                                                    <a href="product-grid.html">Jackets</a>
                                                    <a href="product-grid.html">Blazers & Coats</a>
                                                    <a href="product-grid.html">Suits</a>
                                                    <a href="product-grid.html">Rain Jackets</a>
                                                    <a href="product-grid.html">T-Shirts</a>
                                                    <a href="product-grid.html">Casual Shirts</a>
                                                    <a href="product-grid.html">Formal Shirts</a>
                                                    <a href="product-grid.html">Sweatshirts</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-3 col-xs-3 col-md-3">
                                                <div class="mega-list">
                                                    <a class="mega-title" href="product-grid.html">Bottomwear</a>
                                                    <a href="product-grid.html">                    Jeans</a>
                                                    <a href="product-grid.html">Casual Trousers</a>
                                                    <a href="product-grid.html">Formal Trousers</a>
                                                    <a href="product-grid.html">Shorts</a>
                                                    <a href="product-grid.html">Track Pants & Joggers</a>
                                                    <a href="product-grid.html">T-Shirts</a>
                                                    <a href="product-grid.html">Sweatshirts</a>
                                                    <a href="product-grid.html">Casual Shirts</a>
                                                    <a href="product-grid.html">Formal Shirts</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-3 col-xs-3 col-md-3">
                                                <div class="mega-list">
                                                    <a class="mega-title" href="product-grid.html">Footwear</a>
                                                    <a href="product-grid.html">Casual Shoes</a>
                                                    <a href="product-grid.html">Sports Shoes</a>
                                                    <a href="product-grid.html">Formal Shoes</a>
                                                    <a href="product-grid.html">Sneakers</a>
                                                    <a href="product-grid.html">Sweatshirts</a>
                                                    <a href="product-grid.html">Sandals & Floaters</a>
                                                    <a href="product-grid.html">Flip Flops</a>
                                                    <a href="product-grid.html">Socks</a>
                                                    <a href="product-grid.html">Formal Shirts</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about-us.html">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact-us.html">Contact Us</a>
                                </li>                        
                            </ul>
                        </div>
                    </div>
                </nav>            
            </div>
            <div class="">
                <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="mobile" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                    <!-- START REVOLUTION SLIDER 5.4.8.2 auto mode -->
                    <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8.2">
                        <ul>	<!-- SLIDE  -->
                            <li data-index="rs-10" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="assets/web-banner-1-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="img/banner/1.png"  alt="" title="web-banner-1"  width="1400" height="350" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                            </li>
                            <!-- SLIDE  -->
                            <li data-index="rs-12" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="assets/web-banner-3-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="img/banner/2.png"  alt="" title="web-banner-3"  width="1400" height="350" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                            </li>
                            <!-- SLIDE  -->
                            <li data-index="rs-5" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="assets/web-banner-2-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="img/banner/3.png"  alt="" title="web-banner-2"  width="1400" height="350" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                            </li>
                            <!-- SLIDE  -->
                            <li data-index="rs-11" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="assets/web-banner-4-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="img/banner/4.png"  alt="" title="web-banner-4"  width="1400" height="350" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                            </li>
                        </ul>
                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	</div>
                </div><!-- END REVOLUTION SLIDER -->
            </div>
        </div>
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="offers-block"><a href="#">
                                <img class="img-fluid" src="img/offer-1.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="offers-block"> <a href="#"><img class="img-fluid mb-3" src="img/offer-3.png" alt=""></a></div>
                        <div class="offers-block"><a href="#"><img class="img-fluid" src="img/offer-4.png" alt=""></a></div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="offers-block"><a href="#"><img class="img-fluid mb-3" src="img/offer-2.png" alt=""></a></div>
                            </div>
                            <div class="col-md-6">
                                <div class="offers-block"><a href="#"><img class="img-fluid mb-3" src="img/offer-5.png" alt=""></a></div>
                            </div>
                            <div class="col-md-6">
                                <div class="offers-block"><a href="#"><img class="img-fluid" src="img/offer-6.png" alt=""></a></div>
                            </div>
                            <div class="col-md-6">
                                <div class="offers-block"><a href="#"><img class="img-fluid" src="img/offer-7.png" alt=""></a></div>
                            </div>                  	                  	                  	
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-list pbc-5 pb-4 pt-5 bg-light">
            <div class="container">
                <h6 class="mt-1 mb-0 float-right"><a href="#">View All Items</a></h6>
                <h4 class="mt-0 mb-3 text-dark font-weight-normel">Best Selling Items</h4>
                <div class="row">
                    <div class="col-6 col-md-3">
                        <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                            <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                            <a href="product-detail.html">
                                <span class="badge badge-danger">NEW</span>
                                <img src="img/item/1.jpg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">Women’s Casual Wear</h6>
                                <div class="stars-rating"><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span></div>
                                <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                            <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                            <a href="product-detail.html">
                                <span class="badge badge-success">50% OFF</span>
                                <img src="img/item/2.jpg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">Casual Sleeveless Cotton Blend Jacket</h6>
                                <div class="stars-rating"><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span></div>
                                <p class="mb-0 text-dark">$ 135.00 <span class="text-black-50"><del>$500.00 </del></span> <span class="bg-danger  rounded-sm pl-1 ml-1 pr-1 text-white small"> 50% OFF</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                            <span class="like-icon"><a class="active" href="#"> <i class="icofont icofont-heart"></i></a></span>
                            <a href="product-detail.html">
                                <span class="badge badge-danger">NEW</span>
                                <img src="img/item/3.jpg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">Blue Color Casual Short Dresses</h6>
                                <div class="stars-rating"><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span></div>
                                <p class="mb-0 text-dark">$ 135.00 <span class="text-black-50"><del>$500.00 </del></span> <span class="bg-info rounded-sm pl-1 ml-1 pr-1 text-white small"> 50% OFF</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                            <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                            <a href="product-detail.html">
                                <span class="badge badge-success">50% OFF</span>
                                <img src="img/item/4.jpg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">Gofab Blue Denim Lycra Jeggings</h6>
                                <div class="stars-rating"><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span></div>
                                <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                            <a href="product-detail.html">
                                <span class="badge badge-danger">NEW</span>
                                <img src="img/item/5.jpg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">Bodycon Skirts For Women Casual Wear</h6>
                                <div class="stars-rating"><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span></div>
                                <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                            <span class="like-icon"><a class="active" href="#"> <i class="icofont icofont-heart"></i></a></span>
                            <a href="product-detail.html">
                                <span class="badge badge-success">50% OFF</span>
                                <img src="img/item/6.jpg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">Dede’S Blue Poly Crepe A Line Dress</h6>
                                <div class="stars-rating"><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span></div>
                                <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                            <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                            <a href="product-detail.html">
                                <span class="badge badge-danger">NEW</span>
                                <img src="img/item/7.jpg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">Black Printed Round Neck T Shirt</h6>
                                <div class="stars-rating"><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span></div>
                                <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                            <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                            <a href="product-detail.html">
                                <span class="badge badge-success">50% OFF</span>
                                <img src="img/item/8.jpg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">Hooded Henley Tshirts</h6>
                                <div class="stars-rating"><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span></div>
                                <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="offer-product py-5">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="cat-block">
                        <h6>TVs and Appliances</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-fluid mb-3" src="img/appli-1.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid mb-3" src="img/appli-2.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid mb-3" src="img/appli-3.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid mb-3" src="img/appli-4.jpg" alt="">
                            </div>
                        </div>
                        <p>Up to 60% off | Extra cashback up to ₹5,000</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="cat-block">
                        <h6>TVs and Appliances</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-fluid mb-3" src="img/appli-1.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid mb-3" src="img/appli-2.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid mb-3" src="img/appli-3.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid mb-3" src="img/appli-4.jpg" alt="">
                            </div>
                        </div>
                        <p>Up to 60% off | Extra cashback up to ₹5,000</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="cat-block">
                        <h6>TVs and Appliances</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-fluid mb-3" src="img/appli-1.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid mb-3" src="img/appli-2.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid mb-3" src="img/appli-3.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid mb-3" src="img/appli-4.jpg" alt="">
                            </div>
                        </div>
                        <p>Up to 60% off | Extra cashback up to ₹5,000</p>
                    </div>
                </div>               
            </div>
        </div>
    </section>      
    <section class="product-list pbc-5 pb-4 pt-5 bg-light">
        <div class="container">
            <h6 class="mt-1 mb-0 float-right"><a href="#">View All Items</a></h6>
            <h4 class="mt-0 mb-3 text-dark">Blockbuster Deals</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-carousel-category owl-theme">
                        <div class="item">
                            <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                                <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                                <a href="product-detail.html">
                                    <span class="badge badge-danger">NEW</span>
                                    <img src="img/item/1.jpg" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h6 class="card-title mb-1">Women’s Casual Wear</h6>
                                    <div class="stars-rating"><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span></div>
                                    <p class="mb-0 text-dark">$ 135.00 <span class="text-black-50"><del>$500.00 </del></span> <span class="bg-danger  rounded-sm pl-1 ml-1 pr-1 text-white small"> 50% OFF</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                                <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                                <a href="product-detail.html">
                                    <span class="badge badge-success">50% OFF</span>
                                    <img src="img/item/2.jpg" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h6 class="card-title mb-1">Casual Sleeveless Cotton Blend Jacket</h6>
                                    <div class="stars-rating"><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span></div>
                                    <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                                <span class="like-icon"><a class="active" href="#"> <i class="icofont icofont-heart"></i></a></span>
                                <a href="product-detail.html">
                                    <span class="badge badge-danger">NEW</span>
                                    <img src="img/item/3.jpg" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h6 class="card-title mb-1">Blue Color Casual Short Dresses</h6>
                                    <div class="stars-rating"><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span></div>
                                    <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                                <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                                <a href="product-detail.html">
                                    <span class="badge badge-success">50% OFF</span>
                                    <img src="img/item/4.jpg" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h6 class="card-title mb-1">Gofab Blue Denim Lycra Jeggings</h6>
                                    <div class="stars-rating"><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span></div>
                                    <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                                <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                                <a href="product-detail.html">
                                    <span class="badge badge-danger">NEW</span>
                                    <img src="img/item/5.jpg" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h6 class="card-title mb-1">Bodycon Skirts For Women Casual Wear</h6>
                                    <div class="stars-rating"><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span></div>
                                    <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                                <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                                <a href="product-detail.html">
                                    <span class="badge badge-success">50% OFF</span>
                                    <img src="img/item/6.jpg" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h6 class="card-title mb-1">Dede’S Blue Poly Crepe A Line Dress</h6>
                                    <div class="stars-rating"><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span></div>
                                    <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="offer-product py-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="offers-block"><a href="#"><img class="img-fluid" src="img/ad/1.png" alt=""></a></div>
                </div>
                <div class="col-6">
                    <div class="offers-block"><a href="#"><img class="img-fluid" src="img/ad/2.png" alt=""></a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="product-list pbc-5 pb-4 pt-5 bg-light">
        <div class="container">
            <h6 class="mt-1 mb-0 float-right"><a href="#">View All Items</a></h6>
            <h4 class="mt-0 mb-3 text-dark">Best Sellers in Toys & Games</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-carousel-category owl-theme">
                        <div class="item">
                            <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                                <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                                <a href="product-detail.html">
                                    <span class="badge badge-danger">NEW</span>
                                    <img src="img/item/9.jpg" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h6 class="card-title mb-1">Bike 6V Battery Operated Ride On Blue</h6>
                                    <div class="stars-rating"><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span></div>
                                    <p class="mb-0 text-dark">$ 135.00 <span class="text-black-50"><del>$500.00 </del></span> <span class="bg-danger  rounded-sm pl-1 ml-1 pr-1 text-white small"> 50% OFF</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                                <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                                <a href="product-detail.html">
                                    <span class="badge badge-success">50% OFF</span>
                                    <img src="img/item/10.jpg" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h6 class="card-title mb-1">Kashish Toys Pink Fur Teddy Bear</h6>
                                    <div class="stars-rating"><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span></div>
                                    <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                                <span class="like-icon"><a class="active" href="#"> <i class="icofont icofont-heart"></i></a></span>
                                <a href="product-detail.html">
                                    <span class="badge badge-danger">NEW</span>
                                    <img src="img/item/11.jpg" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h6 class="card-title mb-1">Baby Blue Tricycle For Kids</h6>
                                    <div class="stars-rating"><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span></div>
                                    <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                                <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                                <a href="product-detail.html">
                                    <span class="badge badge-danger">NEW</span>
                                    <img src="img/item/9.jpg" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h6 class="card-title mb-1">Bike 6V Battery Operated Ride On Blue</h6>
                                    <div class="stars-rating"><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span></div>
                                    <p class="mb-0 text-dark">$ 135.00 <span class="text-black-50"><del>$500.00 </del></span> <span class="bg-danger  rounded-sm pl-1 ml-1 pr-1 text-white small"> 50% OFF</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                                <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                                <a href="product-detail.html">
                                    <span class="badge badge-success">50% OFF</span>
                                    <img src="img/item/10.jpg" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h6 class="card-title mb-1">Kashish Toys Pink Fur Teddy Bear</h6>
                                    <div class="stars-rating"><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span></div>
                                    <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                                <span class="like-icon"><a class="active" href="#"> <i class="icofont icofont-heart"></i></a></span>
                                <a href="product-detail.html">
                                    <span class="badge badge-danger">NEW</span>
                                    <img src="img/item/11.jpg" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h6 class="card-title mb-1">Baby Blue Tricycle For Kids</h6>
                                    <div class="stars-rating"><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span></div>
                                    <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>           

    @include('layouts.site.footer')
    @include('layouts.site.cart-sidebar')
    @include('layouts.site.javascripts')
</body>
</html>