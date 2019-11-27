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
        @include('layouts.site.categories')           
    </div>

    <div class="">
        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="mobile" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.4.8.2 auto mode -->
            <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8.2">
                <ul>	<!-- SLIDE  -->
                    @if($banners)
                    @foreach($banners as $banner)
                    <li data-index="rs-1{{$banner->id}}" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="assets/web-banner-1-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{$banner->image_name}}"  alt="" title="web-banner-1"  width="1400" height="350" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                    </li>
                    @endforeach
                    @endif
                    <!-- SLIDE  -->
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	</div>
        </div><!-- END REVOLUTION SLIDER -->
    </div>
</div>