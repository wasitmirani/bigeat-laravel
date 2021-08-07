@extends('layouts.frontend.master')

@section('content')

@component('frontend.components.bredcrumb',['name'=>'Blogs','title'=>'FOOD BLOG'])

@endcomponent
 <!-- blog Area Start-->
 <section class="blog-area pd-top-120 pd-bottom-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="row justify-content-center">
                    <div class="col-sm-6">
                        <div class="single-blog-wrap">
                            <div class="thumb">
                                <img src="{{asset('assets/img/blog/1.png')}}" alt="img">
                            </div>
                            <div class="wrap-details">
                                <span class="cat">
                                    <span class="date">
                                        <i class="ri-calendar-todo-fill"></i>July 14, 2021
                                    </span>
                                    <a href="#" class="tag me-0">
                                        <i class="ri-price-tag-3-fill"></i>Burgar
                                    </a>
                                </span>
                                <h5><a href="{{route('blog.details')}}">Greek yogurt breakfast bowls with toppings</a></h5>
                                <div class="wrap-hover-area">
                                    <p> It with just a touch of sauce. saucy riff, more in the style of takeout American Chinese kung pao. The sauce makes it perfect for eating with rice.
                                    </p>
                                    <a class="link-btn" href="{{route('blog.details')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="single-blog-wrap">
                            <div class="thumb">
                                <img src="{{asset('assets/img/blog/2.png')}}" alt="img">
                            </div>
                            <div class="wrap-details">
                                <span class="cat">
                                    <span class="date">
                                        <i class="ri-calendar-todo-fill"></i>July 05, 2021
                                    </span>
                                    <a href="#" class="tag me-0">
                                        <i class="ri-price-tag-3-fill"></i>Pizza
                                    </a>
                                </span>
                                <h5><a href="{{route('blog.details')}}">Broad beans, tomato, garlic & mozzarella bruschetta
                                </a></h5>
                                <div class="wrap-hover-area">
                                    <p> It with just a touch of sauce. saucy riff, more in the style of takeout American Chinese kung pao. The sauce makes it perfect for eating with rice.
                                    </p>
                                    <a class="link-btn" href="{{route('blog.details')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="single-blog-wrap">
                            <div class="thumb">
                                <img src="{{asset('assets/img/blog/3.png')}}" alt="img">
                            </div>
                            <div class="wrap-details">
                                <span class="cat">
                                    <span class="date">
                                        <i class="ri-calendar-todo-fill"></i>August 14, 2021
                                    </span>
                                    <a href="#" class="tag me-0">
                                        <i class="ri-price-tag-3-fill"></i>Pizza
                                    </a>
                                </span>
                                <h5><a href="{{route('blog.details')}}">Make authentic Italian margherita pizza at home
                                </a></h5>
                                <div class="wrap-hover-area">
                                    <p> It with just a touch of sauce. saucy riff, more in the style of takeout American Chinese kung pao. The sauce makes it perfect for eating with rice.
                                    </p>
                                    <a class="link-btn" href="{{route('blog.details')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="single-blog-wrap">
                            <div class="thumb">
                                <img src="{{asset('assets/img/blog/4.png')}}" alt="img">
                            </div>
                            <div class="wrap-details">
                                <span class="cat">
                                    <span class="date">
                                        <i class="ri-calendar-todo-fill"></i>June 12, 2021
                                    </span>
                                    <a href="#" class="tag me-0">
                                        <i class="ri-price-tag-3-fill"></i>Fresh food
                                    </a>
                                </span>
                                <h5><a href="{{route('blog.details')}}">We Have Excellent Of Quality Japanese Food
                                </a></h5>
                                <div class="wrap-hover-area">
                                    <p> It with just a touch of sauce. saucy riff, more in the style of takeout American Chinese kung pao. The sauce makes it perfect for eating with rice.
                                    </p>
                                    <a class="link-btn" href="{{route('blog.details')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="single-blog-wrap">
                            <div class="thumb">
                                <img src="{{asset('assets/img/blog/5.png')}}" alt="img">
                            </div>
                            <div class="wrap-details">
                                <span class="cat">
                                    <span class="date">
                                        <i class="ri-calendar-todo-fill"></i>June 5, 2021
                                    </span>
                                    <a href="#" class="tag me-0">
                                        <i class="ri-price-tag-3-fill"></i>Fresh food
                                    </a>
                                </span>
                                <h5><a href="{{route('blog.details')}}">Different spice for a Different cheese bruschetta

                                </a></h5>
                                <div class="wrap-hover-area">
                                    <p> It with just a touch of sauce. saucy riff, more in the style of takeout American Chinese kung pao. The sauce makes it perfect for eating with rice.
                                    </p>
                                    <a class="link-btn" href="{{route('blog.details')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="single-blog-wrap">
                            <div class="thumb">
                                <img src="{{asset('assets/img/blog/6.png')}}" alt="img">
                            </div>
                            <div class="wrap-details">
                                <span class="cat">
                                    <span class="date">
                                        <i class="ri-calendar-todo-fill"></i>September 10, 2021
                                    </span>
                                    <a href="#" class="tag me-0">
                                        <i class="ri-price-tag-3-fill"></i>Spicy
                                    </a>
                                </span>
                                <h5><a href="{{route('blog.details')}}">Celebrating the awesomeness of food.
                                </a></h5>
                                <div class="wrap-hover-area">
                                    <p> It with just a touch of sauce. saucy riff, more in the style of takeout American Chinese kung pao. The sauce makes it perfect for eating with rice.
                                    </p>
                                    <a class="link-btn" href="{{route('blog.details')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-area">
                    <div class="widget widget_search">
                        <form class="search-form">
                            <div class="form-group">
                                <input type="text" placeholder="Search your itmes">
                            </div>
                            <button class="submit-btn" type="submit"><i class="ri-search-line"></i></button>
                        </form>
                    </div>
                    <div class="widget widget-recent-post">
                        <h4 class="widget-title">Recent Post</h4>
                        <ul>
                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{asset('assets/img/widget/1.png')}}" alt="widget">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="title"><a href="#">Greek yogurt breakfast bowls with toppings</a></h6>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{asset('assets/img/widget/2.png')}}" alt="widget">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="title"><a href="#">Broad, garlic & mozzarella cheese bruschetta
                                        </a></h6>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{asset('assets/img/widget/3.png')}}" alt="widget">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="title"><a href="#">Make authentic Italian margherita pizza at home
                                        </a></h6>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{asset('assets/img/widget/4.png')}}" alt="widget">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="title"><a href="#">BBQ Chicken Classic Pizza Large</a></h6>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget-newsletter">
                        <h4 class="widget-title">Newsletter</h4>
                        <p>Subscribe to get the latest news, update and offer information. Don't worry, we won't send spam!</p>
                        <form class="newsletter-form">
                            <div class="form-group">
                                <input type="email" placeholder="Enter e-mail">
                            </div>
                            <button class="submit-btn" type="submit"><i class="ri-arrow-right-line"></i></button>
                        </form>
                    </div>
                    <div class="widget widget_categories">
                        <h4 class="widget-title">Categories</h4>
                        <ul>
                            <li><a href="#">Inspiration <span>(5)</span></a></li>
                            <li><a href="#">Recipes <span>(9)</span> </a></li>
                            <li><a href="#">Others <span>(18)</span></a></li>
                        </ul>
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
<!-- blog Area End -->


@endsection
