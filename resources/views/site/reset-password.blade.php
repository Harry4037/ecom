<!DOCTYPE html>
<html lang="en">
    @include('layouts.site.header')
    <body>
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
                                    <a href="#"><i class="icofont icofont-brand-apple"></i></a>
                                    <a href="#"><i class="icofont icofont-brand-android-robot"></i></a>
                                </li>
                            </ul>
                            <p class="mb-0 py-1">FREE CASH ON DELIVERY &amp; SHIPPING AVAILABLE OVER <span class="text-danger font-weight-bold">$499</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-nav shadow-sm"  id="navbar">
                <nav class="navbar navbar-expand-lg navbar-light bg-white pt-0 pb-0 border-bottom">
                    <div class="container">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{ asset('img/logo.png')}}" alt="gurdeep osahan designer">
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
        </div>
        <section class="section pt-5 pb-5 osahan-not-found-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center pt-5 pb-5">
                        <div id="reset_msg"></div>
                        @if(isset($msg))
                        <div style="color: green">{{$msg}}</div>
                        @endif
                        <form method="post" action="{{route('site.user.reset-password',['passcode'=> $passcode])}}" id="resetPassword">
                            @csrf
                            <input id="user_id" name="user_id" type="hidden" value="{{$user->id}}">
                            <fieldset class="form-group mt-4">
                                <label>New Password</label>
                                <input id="new_password" name="new_password" type="password" class="form-control" placeholder="New Password">
                            </fieldset>
                            <fieldset class="form-group">
                                <label>Confirm Password</label>
                                <input id="c_new_password" name="c_new_password" type="password" class="form-control" placeholder="Confirm New Password">
                            </fieldset>
                            <fieldset class="form-group">
                                <input type="submit" class="btn btn-lg btn-primary btn-block" value="Submit">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>

        </section>
        @include('layouts.site.footer')
        @include('layouts.site.cart-sidebar')
        @include('layouts.site.javascripts')   
    </body>
</html>