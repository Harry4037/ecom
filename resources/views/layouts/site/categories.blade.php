<nav  class="navbar navbar-expand-lg navbar-light bg-white pt-0 pb-0">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="dropdown-custom">
                <button class="dropbtn"><i class="fa fa-bars" aria-hidden="true"></i> Shop by Department</button>
                <div class="dropdown-content">
                    @if($categories)
                    @foreach($categories as $category)
                    <a href="#">{{$category->name}}</a>
                    @endforeach
                    @endif
                </div>
            </div>                  	
            <ul class="navbar-nav mr-auto main-nav-left">
                @if($categories)
                @foreach($categories as $category)
                <li class="nav-item">
                    <a class="nav-link" href="/">{{$category->name}}</a>
                </li>
                @endforeach
                @endif


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