@extends('layouts.frontend.master')

@section('content')
 <!-- bredcrumb Area Start-->
<!-- bredcrumb Area End -->

    <!-- shop-details Area Start-->
    <div class="shop-details-area pd-top-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="sticy-product">
                        <div class="product-thumbnail-wrapper">
                            <div class="single-thumbnail-slider">
                                <div class="slider-item">
                                    <img src="{{asset('assets/img/shop/single-1.png')}}" alt="item">
                                </div>
                                <div class="slider-item">
                                    <img src="{{asset('assets/img/shop/single-2.png')}}" alt="item">
                                </div>
                                <div class="slider-item">
                                    <img src="{{asset('assets/img/shop/single-3.png')}}" alt="item">
                                </div>
                                <div class="slider-item">
                                    <img src="{{asset('assets/img/shop/single-4.png')}}" alt="item">
                                </div>
                                <div class="slider-item">
                                    <img src="{{asset('assets/img/shop/single-5.png')}}" alt="item">
                                </div>
                            </div>
                            <div class="product-thumbnail-carousel">
                                <div class="single-thumbnail-item">
                                    <img src="{{asset('assets/img/shop/1.png')}}" alt="item">
                                </div>
                                <div class="single-thumbnail-item">
                                    <img src="{{asset('assets/img/shop/2.png')}}" alt="item">
                                </div>
                                <div class="single-thumbnail-item">
                                    <img src="{{asset('assets/img/shop/3.png')}}" alt="item">
                                </div>
                                <div class="single-thumbnail-item">
                                    <img src="{{asset('assets/img/shop/4.png')}}" alt="item">
                                </div>
                                <div class="single-thumbnail-item">
                                    <img src="{{asset('assets/img/shop/5.png')}}" alt="item">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="shop-item-details">
                        <nav>
                            <ul class="breadcrumb">
                              <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                              <li class="breadcrumb-item"><a href="{{route('shop')}}">Shop</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Shop Details</li>
                            </ul>
                        </nav>
                        <h2 class="entry-title">Maxican Pizza Test Better</h2>
                        <div class="row">
                            <div class="col-lg-6 order-lg-last align-self-center">
                                <div class="rating text-lg-end">
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
                            </div>
                            <div class="col-lg-6 align-self-center">
                                <h4 class="price">$27.00</h4>
                            </div>
                        </div>
                        <p class="mt-4">Pizza is a savory dish of Italian origin consisting of a usually round, flattened base of leavened wheat-based dough topped with tomatoes, cheese, and often various other ingredients, which is then baked at a high temperature, traditionally in a wood-fired oven. A small pizza is sometimes called a pizzetta.</p>
                        <div class="row">
                            <div class="col-lg-6 align-self-center">
                                <div class="variation">
                                    <h6>Select Size</h6>
                                    <ul class="size">
                                        <li><a href="#">10"</a></li>
                                        <li><a href="#">12"</a></li>
                                        <li><a href="#">14"</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="variation">
                                    <h6>Select Crust</h6>
                                    <select class="single-select">
                                        <option>--Choose youe Size--</option>
                                        <option value="asc">Pizza</option>
                                        <option value="desc">Burger</option>
                                        <option value="pop">Ramen</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <form>
                            <div class="quantity buttons_added">
                                <input type="button" value="-" class="minus">
                                <input type="number" class="input-text qty text" step="1" min="1" max="10000" name="quantity" value="1">
                                <input type="button" value="+" class="plus">
                            </div>
                            <button type="submit" class="btn btn-secondary">ADD TO CART</button>
                        </form>
                        <ul class="cat">
                            <li> SKU: PZ2866</li>
                            <li>Categories: <a href="#">Pizza</a>  </li>
                            <li>Tags: <a href="#">Boscaiola,</a><a href="#">Pizza</a></li>
                        </ul>
                        <div class="shop-tabs">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Description</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Additional information</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Reviews (1) </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <p class="mb-4">Pizza, dish of Italian origin consisting of a flattened disk of bread dough topped with some combination of olive oil, oregano, tomato, olives, mozzarella or other cheese, and many other ingredients, baked quickly—usually, in a commercial setting, using a wood-fired oven heated to a very high temperature—and served hot </p>
                                    <div class="row">
                                        <div class="col-6">
                                            <img class="w-100" src="{{asset('assets/img/blog/single-2.png')}}" alt="img">
                                        </div>
                                        <div class="col-6">
                                            <img class="w-100" src="{{asset('assets/img/blog/single-3.png')}}" alt="img">
                                        </div>
                                    </div>
                                    <p class="mt-4">One of the simplest and most traditional pizzas is the Margherita, which is topped with tomatoes or tomato sauce, mozzarella, and basil. Popular legend relates that it was named for Queen Margherita, wife of Umberto I, who was said to have liked its mild fresh flavour and to have also noted that its topping colours—green, white, and red—were those of the Italian flag.</p>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <h6 class="title">About Product</h6>
                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centu but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of lorem Ipsum.</p>
                                    <div class="quick-view mt-4">
                                        <h6 class="title mb-4">Quick View</h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="single-about-wrap style-2">
                                                    <img src="{{asset('assets/img/icon/1-1.png')}}" alt="img">
                                                    Fresh food
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-about-wrap style-2">
                                                    <img src="{{asset('assets/img/icon/2-1.png')}}" alt="img">
                                                    Fast Delivery
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-about-wrap style-2">
                                                    <img src="{{asset('assets/img/icon/3-1.png')}}" alt="img">
                                                    Quality Maintain
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-about-wrap style-2">
                                                    <img src="{{asset('assets/img/icon/4-1.png')}}" alt="img">
                                                    24/7 Service
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="comment-area">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="{{asset('assets/img/blog/comment.png')}}" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <h6>Haslida heris</h6>
                                                <span>20 Feb 2020 at 4:00 pm</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <form class="default-form-wrap style-2">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="single-input-wrap">
                                                    <input type="text" class="form-control" placeholder="Your Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-input-wrap">
                                                    <input type="text" class="form-control" placeholder="Your Email">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="single-textarea-wrap">
                                                    <textarea rows="4" placeholder="Review..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-base">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop-details Area End -->

    <!-- related-product Area Start-->
    <section class="related-product-area pd-top-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title mb-0">
                        <h2 class="title">Related Products</h2>
                    </div>
                    <div class="related-product-slider owl-carousel style-2">
                        <div class="item">
                            <div class="single-item-wrap">
                                <div class="thumb">
                                    <img src="{{asset('assets/img/product/pizza/1-1.png')}}" alt="img">
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
                        <div class="item">
                            <div class="single-item-wrap">
                                <div class="thumb">
                                    <img src="{{asset('assets/img/product/pizza/2-1.png')}}" alt="img">
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
                        <div class="item">
                            <div class="single-item-wrap">
                                <div class="thumb">
                                    <img src="{{asset('assets/img/product/burger/1-1.png')}}" alt="img">
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
    <!-- related-product Area End -->
@endsection
