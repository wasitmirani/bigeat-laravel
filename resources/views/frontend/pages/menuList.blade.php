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
            <div class="col-lg-5 col-md-8">
                <div class="section-title text-center">
                    <h3 class="sub-title">Our signature</h3>
                    <h2 class="title">Foodka Main Dishes</h2>
                    <p>Amet amet parturient sed posuere vulputate pharetra a sapien, habitant. Enim vel elit pharetra.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="single-item-wrap style-2">
                    <div class="media">
                        <div class="thumb">
                            <img src="{{asset('assets/img/product/burger/1-1.png')}}" alt="img">
                        </div>
                        <div class="wrap-details">
                            <h5><a href="{{route('prodcut.details')}}">All Season Gulliver Pizza</a></h5>
                            <p>Pizza is a savory dish of Italian origin consisting of a usually round, flattened base of leavened.</p>
                            <div class="wrap-footer">
                                <h6 class="price">$17.00</h6>
                                <button type="submit" class="btn btn-secondary">ADD TO CART</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-item-wrap style-2">
                    <div class="media">
                        <div class="thumb">
                            <img src="{{asset('assets/img/product/burger/1-1.png')}}" alt="img">
                        </div>
                        <div class="wrap-details">
                            <h5><a href="">All Season Gulliver Pizza</a></h5>
                            <p>Pizza is a savory dish of Italian origin consisting of a usually round, flattened base of leavened.</p>
                            <div class="wrap-footer">
                                <h6 class="price">$17.00</h6>
                                <button type="submit" class="btn btn-secondary">ADD TO CART</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-item-wrap style-2">
                    <div class="media">
                        <div class="thumb">
                            <img src="{{asset('assets/img/product/burger/1-1.png')}}" alt="img">
                        </div>
                        <div class="wrap-details">
                            <h5><a href="{{route('prodcut.details')}}">All Season Gulliver Pizza</a></h5>
                            <p>Pizza is a savory dish of Italian origin consisting of a usually round, flattened base of leavened.</p>
                            <div class="wrap-footer">
                                <h6 class="price">$17.00</h6>
                                <button type="submit" class="btn btn-secondary">ADD TO CART</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-item-wrap style-2">
                    <div class="media">
                        <div class="thumb">
                            <img src="{{asset('assets/img/product/burger/1-1.png')}}" alt="img">
                        </div>
                        <div class="wrap-details">
                            <h5><a href="{{route('prodcut.details')}}">All Season Gulliver Pizza</a></h5>
                            <p>Pizza is a savory dish of Italian origin consisting of a usually round, flattened base of leavened.</p>
                            <div class="wrap-footer">
                                <h6 class="price">$17.00</h6>
                                <button type="submit" class="btn btn-secondary">ADD TO CART</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-item-wrap style-2">
                    <div class="media">
                        <div class="thumb">
                            <img src="{{asset('assets/img/product/burger/1-1.png')}}" alt="img">
                        </div>
                        <div class="wrap-details">
                            <h5><a href="{{route('prodcut.details')}}">All Season Gulliver Pizza</a></h5>
                            <p>Pizza is a savory dish of Italian origin consisting of a usually round, flattened base of leavened.</p>
                            <div class="wrap-footer">
                                <h6 class="price">$17.00</h6>
                                <button type="submit" class="btn btn-secondary">ADD TO CART</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-item-wrap style-2">
                    <div class="media">
                        <div class="thumb">
                            <img src="{{asset('assets/img/product/burger/1-1.png')}}" alt="img">
                        </div>
                        <div class="wrap-details">
                            <h5><a href="{{route('prodcut.details')}}">All Season Gulliver Pizza</a></h5>
                            <p>Pizza is a savory dish of Italian origin consisting of a usually round, flattened base of leavened.</p>
                            <div class="wrap-footer">
                                <h6 class="price">$17.00</h6>
                                <button type="submit" class="btn btn-secondary">ADD TO CART</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-item-wrap style-2">
                    <div class="media">
                        <div class="thumb">
                            <img src="{{asset('assets/img/product/burger/1-1.png')}}" alt="img">
                        </div>
                        <div class="wrap-details">
                            <h5><a href="{{route('prodcut.details')}}">All Season Gulliver Pizza</a></h5>
                            <p>Pizza is a savory dish of Italian origin consisting of a usually round, flattened base of leavened.</p>
                            <div class="wrap-footer">
                                <h6 class="price">$17.00</h6>
                                <button type="submit" class="btn btn-secondary">ADD TO CART</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-item-wrap style-2">
                    <div class="media">
                        <div class="thumb">
                            <img src="{{asset('assets/img/product/burger/1-1.png')}}" alt="img">
                        </div>
                        <div class="wrap-details">
                            <h5><a href="{{route('prodcut.details')}}">All Season Gulliver Pizza</a></h5>
                            <p>Pizza is a savory dish of Italian origin consisting of a usually round, flattened base of leavened.</p>
                            <div class="wrap-footer">
                                <h6 class="price">$17.00</h6>
                                <button type="submit" class="btn btn-secondary">ADD TO CART</button>
                            </div>
                        </div>
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
