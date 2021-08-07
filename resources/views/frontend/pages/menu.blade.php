@extends('layouts.frontend.master')

@section('content')

@component('frontend.components.bredcrumb',['name'=>"OUR MENU",'title'=>"Choose you items"])

@endcomponent

@component('frontend.components.categoriesComponent')

@endcomponent
 <!-- populer Area Start-->
 <section class="populer-area pd-top-50 pd-bottom-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-item-wrap">
                    <div class="thumb">
                        <img src="{{asset('assets/img/product/pizza/1.png')}}" alt="img">
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
                        <img src="{{asset('assets/img/product/pizza/2.png')}}" alt="img">
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
                        <img src="{{asset('assets/img/product/pizza/3.png')}}" alt="img">
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
                        <img src="{{asset('assets/img/product/pizza/4.png')}}" alt="img">
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
            <div class="col-lg-4 col-md-6">
                <div class="single-item-wrap">
                    <div class="thumb">
                        <img src="{{asset('assets/img/product/pizza/5.png')}}" alt="img">
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
            <div class="col-lg-4 col-md-6">
                <div class="single-item-wrap">
                    <div class="thumb">
                        <img src="{{asset('assets/img/product/pizza/6.png')}}" alt="img">
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
            <div class="col-lg-4 col-md-6">
                <div class="single-item-wrap">
                    <div class="thumb">
                        <img src="{{asset('assets/img/product/burger/1.png')}}" alt="img">
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
            <div class="col-lg-4 col-md-6">
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
            <div class="col-lg-4 col-md-6">
                <div class="single-item-wrap">
                    <div class="thumb">
                        <img src="{{asset('assets/img/product/burger/1.png')}}" alt="img">
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
            <div class="col-12">
                <nav>
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
<!-- populer Area End -->

@endsection
