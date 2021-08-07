
@extends('layouts.frontend.master')

@section('content')

@component('frontend.components.bredcrumb',['name'=>"OUR MENU",'title'=>"Choose you items"])

@endcomponent

@component('frontend.components.categoriesComponent')

@endcomponent




  <!-- shop Area Start-->
  <section class="shop-area pd-top-120 pd-bottom-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="row justify-content-center">
                    <div class="col-sm-6 align-self-center pb-4">
                        <p class="mb-0">Showing 1–8 of 12 results</p>
                    </div>
                    <div class="col-sm-6 align-self-center pb-4">
                        <select class="single-select float-sm-end">
                            <option>Default sorting</option>
                            <option value="asc">Pizza</option>
                            <option value="desc">Burger</option>
                            <option value="pop">Ramen</option>
                        </select>
                    </div>
                    <div class="col-md-6">
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
                    <div class="col-md-6">
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
                    <div class="col-md-6">
                        <div class="single-item-wrap">
                            <div class="thumb">
                                <img src="{{asset('assets/img/product/pizza/3-1.png')}}" alt="img">
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
                    <div class="col-md-6">
                        <div class="single-item-wrap">
                            <div class="thumb">
                                <img src="{{asset('assets/img/product/pizza/4-1.png')}}" alt="img">
                                <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="wrap-details">
                                <h5><a href="{{route('prodcut.details')}}">All Season Gulliver Pizza</a></h5>
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
                                    <h6 class="price">$29.00</h6>
                                </div>
                            </div>
                            <div class="btn-area">
                                <a class="btn btn-secondary" href="{{route('prodcut.details')}}">CHOOSE OPTIONS </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-item-wrap">
                            <div class="thumb">
                                <img src="{{asset('assets/img/product/pizza/5-1.png')}}" alt="img">
                                <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="wrap-details">
                                <h5><a href="{{route('prodcut.details')}}">Chicken Fajita Pizza Large</a></h5>
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
                                    <h6 class="price">$29.00</h6>
                                </div>
                                <div class="btn-area">
                                    <a class="btn btn-secondary" href="{{route('prodcut.details')}}">CHOOSE OPTIONS </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-item-wrap">
                            <div class="thumb">
                                <img src="{{asset('assets/img/product/pizza/6-1.png')}}" alt="img">
                                <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="wrap-details">
                                <h5><a href="{{route('prodcut.details')}}">BBQ Chicken Classic Pizza Large</a></h5>
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
                                        (602)
                                    </div>
                                    <h6 class="price">$27.00</h6>
                                </div>
                            </div>
                            <div class="btn-area">
                                <a class="btn btn-secondary" href="{{route('prodcut.details')}}">CHOOSE OPTIONS </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
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
                    <div class="col-md-6">
                        <div class="single-item-wrap">
                            <div class="thumb">
                                <img src="{{asset('assets/img/product/burger/2.png')}}" alt="img">
                                <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="wrap-details">
                                <h5><a href="{{route('prodcut.details')}}">Double Burger</a></h5>
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
                </div>
            </div>
            <div class="col-lg-4 order-lg-first">
                <div class="sidebar-area">
                    <div class="widget widget_search">
                        <form class="search-form">
                            <div class="form-group">
                                <input type="text" placeholder="Search your itmes">
                            </div>
                            <button class="submit-btn" type="submit"><i class="ri-search-line"></i></button>
                        </form>
                    </div>
                    <div class="widget widget_categories style-2">
                        <h4 class="widget-title">Categories</h4>
                        <ul>
                            <li><a href="#"><img src="{{asset('assets/img/category/1-1.png')}}" alt="img"> Ramen <span>(5)</span></a></li>
                            <li><a href="#"><img src="{{asset('assets/img/category/2-1.png')}}" alt="img"> Pizza <span>(9)</span> </a></li>
                            <li><a href="#"><img src="{{asset('assets/img/category/3-1.png')}}" alt="img"> Burger <span>(18)</span></a></li>
                            <li><a href="#"><img src="{{asset('assets/img/category/4-1.png')}}" alt="img"> French fries <span>(14)</span></a></li>
                            <li><a href="#"><img src="{{asset('assets/img/category/5-1.png')}}" alt="img"> Fast food <span>(10)</span></a></li>
                            <li><a href="#"><img src="{{asset('assets/img/category/6-1.png')}}" alt="img"> Soft drinks <span>(28)</span></a></li>
                        </ul>
                    </div>
                    <div class="widget widget_filter">
                        <h4 class="widget-title">Filter by Price</h4>
                        <div class="side-bar-range">
                            <div id="slider-range"></div>
                            <div class="row g-0">
                                <div class="col-lg-6 align-self-center">
                                    <a class="btn btn-base" href="#">Filter</a>
                                </div>
                                <div class="col-lg-6 align-self-center">
                                    <p>Price:
                                        <input type="text" id="amount" readonly="">
                                      </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-recent-post style-2">
                        <h4 class="widget-title">Today’s Best Deals</h4>
                        <ul>
                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{asset('assets/img/widget/01.png')}}" alt="widget">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="title"><a href="#">Patty Buns Burgers</a></h6>
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
                                        <h6 class="price">$29.00</h6>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{asset('assets/img/widget/02.png')}}" alt="widget">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="title"><a href="#">Garlic Chicken Pizza</a></h6>
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (262)
                                        </div>
                                        <h6 class="price">$20.00</h6>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{asset('assets/img/widget/03.png')}}" alt="widget">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="title"><a href="#">BBQ Chicken Pizza</a></h6>
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (262)
                                        </div>
                                        <h6 class="price">$27.00</h6>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{asset('assets/img/widget/04.png')}}" alt="widget">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="title"><a href="#">Margherita Pizza</a></h6>
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (262)
                                        </div>
                                        <h6 class="price">$35.00</h6>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a class="d-block mb-5" href="#"><img class="w-100" src="{{asset('assets/img/widget/ad.png')}}" alt="img"></a>
                </div>
            </div>
            <div class="col-12">
                <nav class="text-end">
                    <ul class="pagination">
                        <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="ri-arrow-left-s-line"></i>
                        </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="ri-arrow-right-s-line"></i>
                        </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- shop Area End -->

@endsection
