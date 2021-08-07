@extends('layouts.frontend.master')

@section('content')


<section class="banner-area">
    <div class="banner-thumb">
        <img src="{{asset('assets/img/banner/banner-1.png')}}" alt="img">
    </div>
    <div class="banner-bg-img"></div>
    <div class="banner-shape-1"><img src="{{asset('assets/img/banner/shape-1-1.png')}}" alt="img"></div>
    <div class="banner-shape-2"><img src="{{asset('assets/img/banner/shape-2-1.png')}}" alt="img"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 align-self-center">
                <div class="banner-inner text-center">
                    <h3>Do not miss it!</h3>
                    <h1>Pizza tastes better than skinny feels.</h1>
                    <a class="btn btn-secondary" href="{{route('shop')}}">GET IT NOW</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Category Area --}}
@component('frontend.components.categoriesComponent')

@endcomponent
<!-- category Area End -->

<!-- offer Area Start-->
@component('frontend.components.offerComponent')

@endcomponent
<!-- offer Area End -->

<!-- populer Area Start-->
@component('frontend.components.populerComponent')

@endcomponent
<!-- populer Area End -->

<!-- featured Area Start-->
@component('frontend.components.featuredComponent')

@endcomponent
<!-- featured Area End -->

<!-- about Area Start-->
@component('frontend.components.aboutComponent')

@endcomponent
<!-- about Area End -->

<!-- product Area Start-->
<section class="product-area pd-bottom-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center">
                    <h3 class="sub-title">Our signature</h3>
                    <h2 class="title">Delicious Deals for Delicious Meals</h2>
                </div>
                <ul class="product-nav nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-ramen-tab" data-bs-toggle="pill" data-bs-target="#pills-ramen" type="button" role="tab" aria-controls="pills-ramen" aria-selected="true"><img src="assets/img/category/1-1.png" alt="img">Ramen</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-pizza-tab" data-bs-toggle="pill" data-bs-target="#pills-pizza" type="button" role="tab" aria-controls="pills-pizza" aria-selected="false"><img src="assets/img/category/2-1.png" alt="img">Pizza</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-burger-tab" data-bs-toggle="pill" data-bs-target="#pills-burger" type="button" role="tab" aria-controls="pills-burger" aria-selected="false"><img src="assets/img/category/3-1.png" alt="img">Burger</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-french-fry-tab" data-bs-toggle="pill" data-bs-target="#pills-french-fry" type="button" role="tab" aria-controls="pills-french-fry" aria-selected="false"><img src="assets/img/category/4-1.png" alt="img">French fries</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-fast-food-tab" data-bs-toggle="pill" data-bs-target="#pills-fast-food" type="button" role="tab" aria-controls="pills-fast-food" aria-selected="false"><img src="assets/img/category/5-1.png" alt="img">Fast food</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-drinks-tab" data-bs-toggle="pill" data-bs-target="#pills-drinks" type="button" role="tab" aria-controls="pills-drinks" aria-selected="false"><img src="assets/img/category/6-1.png" alt="img">Soft drinks</button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-ramen" role="tabpanel" aria-labelledby="pills-ramen-tab">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item-wrap">
                            <div class="thumb">
                                <img src="assets/img/product/pizza/1-1.png" alt="img">
                                <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="wrap-details">
                                <h5><a href="{{route('prodcut.details')}}">Margherita Pizza</a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>
                                        (200)
                                    </div>
                                    <h6 class="price">$17.00</h6>
                                </div>
                            </div>
                            <div class="btn-area">
                                <a class="btn btn-secondary" href="{{route('prodcut.details')}}">CHOOSE OPTIONS </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item-wrap">
                            <div class="thumb">
                                <img src="assets/img/product/pizza/2-1.png" alt="img">
                                <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="wrap-details">
                                <h5><a href="{{route('prodcut.details')}}">Maxican Pizza Test Better</a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>
                                        (928)
                                    </div>
                                    <h6 class="price">$29.00</h6>
                                </div>
                                <div class="btn-area">
                                    <a class="btn btn-secondary" href="{{route('prodcut.details')}}">CHOOSE OPTIONS </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item-wrap">
                            <div class="thumb">
                                <img src="assets/img/product/burger/1-1.png" alt="img">
                                <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="wrap-details">
                                <h5><a href="{{route('prodcut.details')}}">Patty Buns Burgers</a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>
                                        (462)
                                    </div>
                                    <h6 class="price">$27.00</h6>
                                </div>
                            </div>
                            <div class="btn-area">
                                <a class="btn btn-secondary" href="{{route('prodcut.details')}}">CHOOSE OPTIONS </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-pizza" role="tabpanel" aria-labelledby="pills-pizza-tab">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item-wrap">
                            <div class="thumb">
                                <img src="assets/img/product/pizza/1-1.png" alt="img">
                                <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="wrap-details">
                                <h5><a href="{{route('prodcut.details')}}">Margherita Pizza</a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>
                                        (200)
                                    </div>
                                    <h6 class="price">$17.00</h6>
                                </div>
                            </div>
                            <div class="btn-area">
                                <a class="btn btn-secondary" href="{{route('prodcut.details')}}">CHOOSE OPTIONS </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item-wrap">
                            <div class="thumb">
                                <img src="assets/img/product/pizza/2-1.png" alt="img">
                                <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="wrap-details">
                                <h5><a href="{{route('prodcut.details')}}">Maxican Pizza Test Better</a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>
                                        (928)
                                    </div>
                                    <h6 class="price">$29.00</h6>
                                </div>
                                <div class="btn-area">
                                    <a class="btn btn-secondary" href="{{route('prodcut.details')}}">CHOOSE OPTIONS </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item-wrap">
                            <div class="thumb">
                                <img src="assets/img/product/pizza/3-1.png" alt="img">
                                <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="wrap-details">
                                <h5><a href="{{route('prodcut.details')}}">Roasted Garlic Chicken Pizza </a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>
                                        (462)
                                    </div>
                                    <h6 class="price">$27.00</h6>
                                </div>
                            </div>
                            <div class="btn-area">
                                <a class="btn btn-secondary" href="{{route('prodcut.details')}}">CHOOSE OPTIONS </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item-wrap">
                            <div class="thumb">
                                <img src="assets/img/product/pizza/4-1.png" alt="img">
                                <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="wrap-details">
                                <h5><a href="{{route('prodcut.details')}}">All Season Gulliver Pizza </a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>
                                        (462)
                                    </div>
                                    <h6 class="price">$27.00</h6>
                                </div>
                            </div>
                            <div class="btn-area">
                                <a class="btn btn-secondary" href="{{route('prodcut.details')}}">CHOOSE OPTIONS </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item-wrap">
                            <div class="thumb">
                                <img src="assets/img/product/pizza/5-1.png" alt="img">
                                <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="wrap-details">
                                <h5><a href="{{route('prodcut.details')}}">Chicken Fajita Pizza Large </a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>
                                        (200)
                                    </div>
                                    <h6 class="price">$37.00</h6>
                                </div>
                            </div>
                            <div class="btn-area">
                                <a class="btn btn-secondary" href="{{route('prodcut.details')}}">CHOOSE OPTIONS </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item-wrap">
                            <div class="thumb">
                                <img src="assets/img/product/pizza/6-1.png" alt="img">
                                <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="wrap-details">
                                <h5><a href="{{route('prodcut.details')}}">BBQ Chicken Classic Pizza Large </a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>
                                        (928)
                                    </div>
                                    <h6 class="price">$35.00</h6>
                                </div>
                            </div>
                            <div class="btn-area">
                                <a class="btn btn-secondary" href="{{route('prodcut.details')}}">CHOOSE OPTIONS </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-burger" role="tabpanel" aria-labelledby="pills-burger-tab">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item-wrap">
                            <div class="thumb">
                                <img src="assets/img/product/pizza/1-1.png" alt="img">
                                <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="wrap-details">
                                <h5><a href="{{route('prodcut.details')}}">Margherita Pizza</a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>
                                        (200)
                                    </div>
                                    <h6 class="price">$17.00</h6>
                                </div>
                            </div>
                            <div class="btn-area">
                                <a class="btn btn-secondary" href="{{route('prodcut.details')}}">CHOOSE OPTIONS </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item-wrap">
                            <div class="thumb">
                                <img src="assets/img/product/pizza/2-1.png" alt="img">
                                <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="wrap-details">
                                <h5><a href="{{route('prodcut.details')}}">Maxican Pizza Test Better</a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>
                                        (928)
                                    </div>
                                    <h6 class="price">$29.00</h6>
                                </div>
                                <div class="btn-area">
                                    <a class="btn btn-secondary" href="{{route('prodcut.details')}}">CHOOSE OPTIONS </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item-wrap">
                            <div class="thumb">
                                <img src="assets/img/product/burger/1-1.png" alt="img">
                                <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="wrap-details">
                                <h5><a href="{{route('prodcut.details')}}">Patty Buns Burgers</a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>
                                        (462)
                                    </div>
                                    <h6 class="price">$27.00</h6>
                                </div>
                            </div>
                            <div class="btn-area">
                                <a class="btn btn-secondary" href="{{route('prodcut.details')}}">CHOOSE OPTIONS </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-french-fry" role="tabpanel" aria-labelledby="pills-french-fry-tab">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item-wrap">
                            <div class="thumb">
                                <img src="assets/img/product/pizza/1-1.png" alt="img">
                                <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="wrap-details">
                                <h5><a href="{{route('prodcut.details')}}">Margherita Pizza</a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>
                                        (200)
                                    </div>
                                    <h6 class="price">$17.00</h6>
                                </div>
                            </div>
                            <div class="btn-area">
                                <a class="btn btn-secondary" href="{{route('prodcut.details')}}">CHOOSE OPTIONS </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item-wrap">
                            <div class="thumb">
                                <img src="assets/img/product/pizza/2-1.png" alt="img">
                                <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="wrap-details">
                                <h5><a href="{{route('prodcut.details')}}">Maxican Pizza Test Better</a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>
                                        (928)
                                    </div>
                                    <h6 class="price">$29.00</h6>
                                </div>
                                <div class="btn-area">
                                    <a class="btn btn-secondary" href="{{route('prodcut.details')}}">CHOOSE OPTIONS </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item-wrap">
                            <div class="thumb">
                                <img src="assets/img/product/burger/1-1.png" alt="img">
                                <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="wrap-details">
                                <h5><a href="{{route('prodcut.details')}}">Patty Buns Burgers</a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>
                                        (462)
                                    </div>
                                    <h6 class="price">$27.00</h6>
                                </div>
                            </div>
                            <div class="btn-area">
                                <a class="btn btn-secondary" href="{{route('prodcut.details')}}">CHOOSE OPTIONS </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-fast-food" role="tabpanel" aria-labelledby="pills-fast-food-tab">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item-wrap">
                            <div class="thumb">
                                <img src="assets/img/product/pizza/1-1.png" alt="img">
                                <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="wrap-details">
                                <h5><a href="{{route('prodcut.details')}}">Margherita Pizza</a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>
                                        (200)
                                    </div>
                                    <h6 class="price">$17.00</h6>
                                </div>
                            </div>
                            <div class="btn-area">
                                <a class="btn btn-secondary" href="{{route('prodcut.details')}}">CHOOSE OPTIONS </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item-wrap">
                            <div class="thumb">
                                <img src="assets/img/product/pizza/2-1.png" alt="img">
                                <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="wrap-details">
                                <h5><a href="{{route('prodcut.details')}}">Maxican Pizza Test Better</a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>
                                        (928)
                                    </div>
                                    <h6 class="price">$29.00</h6>
                                </div>
                                <div class="btn-area">
                                    <a class="btn btn-secondary" href="{{route('prodcut.details')}}">CHOOSE OPTIONS </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item-wrap">
                            <div class="thumb">
                                <img src="assets/img/product/burger/1-1.png" alt="img">
                                <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="wrap-details">
                                <h5><a href="{{route('prodcut.details')}}">Patty Buns Burgers</a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>
                                        (462)
                                    </div>
                                    <h6 class="price">$27.00</h6>
                                </div>
                            </div>
                            <div class="btn-area">
                                <a class="btn btn-secondary" href="{{route('prodcut.details')}}">CHOOSE OPTIONS </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-drinks" role="tabpanel" aria-labelledby="pills-drinks-tab">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item-wrap">
                            <div class="thumb">
                                <img src="assets/img/product/pizza/1-1.png" alt="img">
                                <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="wrap-details">
                                <h5><a href="{{route('prodcut.details')}}">Margherita Pizza</a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>
                                        (200)
                                    </div>
                                    <h6 class="price">$17.00</h6>
                                </div>
                            </div>
                            <div class="btn-area">
                                <a class="btn btn-secondary" href="{{route('prodcut.details')}}">CHOOSE OPTIONS </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item-wrap">
                            <div class="thumb">
                                <img src="assets/img/product/pizza/2-1.png" alt="img">
                                <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="wrap-details">
                                <h5><a href="{{route('prodcut.details')}}">Maxican Pizza Test Better</a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>
                                        (928)
                                    </div>
                                    <h6 class="price">$29.00</h6>
                                </div>
                                <div class="btn-area">
                                    <a class="btn btn-secondary" href="{{route('prodcut.details')}}">CHOOSE OPTIONS </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item-wrap">
                            <div class="thumb">
                                <img src="assets/img/product/burger/1-1.png" alt="img">
                                <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="wrap-details">
                                <h5><a href="{{route('prodcut.details')}}">Patty Buns Burgers</a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>
                                        (462)
                                    </div>
                                    <h6 class="price">$27.00</h6>
                                </div>
                            </div>
                            <div class="btn-area">
                                <a class="btn btn-secondary" href="{{route('prodcut.details')}}">CHOOSE OPTIONS </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product Area End -->

<!-- subscribe Area Start-->
<section class="subscribe-area pd-bottom-150" style="background-image: url(assets/img/other/location-1.png);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9 col-md-10">
                <div class="section-title text-center">
                    <h3 class="sub-title text-secondary">Our Location</h3>
                    <h2 class="title text-white">Find BigEat stores in your area</h2>
                    <form>
                        <div class="single-input-wrap mb-0 with-btn">
                            <input type="email" placeholder="Zip code or state providence">
                            <button class="btn btn-base">SEE LOCATION</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subscribe Area End -->

<!-- testimonial Area Start-->
@component('frontend.components.testimonial')

@endcomponent
<!-- testimonial Area End -->

<!-- blog Area Start-->
    @component('frontend.components.blogComponent')

    @endcomponent
<!-- blog Area End -->
@endsection
