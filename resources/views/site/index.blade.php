@extends('layouts.site.app')

@section('content')

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

@endsection