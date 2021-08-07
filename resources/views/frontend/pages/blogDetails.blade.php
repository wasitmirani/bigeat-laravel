@extends('layouts.frontend.master')

@section('content')

@component('frontend.components.bredcrumb',['name'=>'Food Blog','title'=>'Blog Details'])

@endcomponent

 <!-- blog single start -->
 <div class="blog-single-area pd-top-120 pd-bottom-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details-inner">
                    <div class="thumb pb-4">
                        <img src="{{asset('assets/img/blog/single.png')}}" alt="img">
                    </div>
                    <span class="cat">
                        <span class="date">
                            <i class="ri-calendar-todo-fill"></i>July 14, 2021
                        </span>
                        <a href="#" class="tag me-0">
                            <i class="ri-price-tag-3-fill"></i>Burgar
                        </a>
                    </span>
                    <h3>Greek yogurt breakfast bowls with toppings</h3>
                    <p> Pizza, dish of Italian origin consisting of a flattened disk of bread dough topped with some combination of olive oil, oregano, tomato, olives, mozzarella or other cheese, and many other ingredients, baked quickly—usually, in a commercial setting, using a wood-fired oven heated to a very high temperature—and served hot

                        It with just a touch of sauce. saucy riff, more in the style of takeout American Chinese kung pao. The sauce makes it perfect for eating with rice. lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                    <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                    <div class="row">
                        <div class="col-6">
                            <div class="thumb mb-0">
                                <img class="w-100" src="{{asset('assets/img/blog/single-2.png')}}" alt="img">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="thumb mb-0">
                                <img class="w-100" src="{{asset('assets/img/blog/single-3.png')}}" alt="img">
                            </div>
                        </div>
                    </div>
                    <p class="pt-4">One of the simplest and most traditional pizzas is the Margherita, which is topped with tomatoes or tomato sauce, mozzarella, and basil. Popular legend relates that it was named for Queen Margherita, wife of Umberto I, who was said to have liked its mild fresh flavour and to have also noted that its topping colours—green, white, and red—were those of the Italian flag.</p>
                </div>
                <div class="tag-share-area">
                    <div class="row">
                        <div class="col-sm-6 align-self-center">
                            <div class="tag-inner">
                                <span>Tags: </span>
                                <a href="#">Fresh Food, </a>
                                <a href="#">Spicy, </a>
                                <a href="#">Delicious</a>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-3 mt-sm-0 align-items-center">
                            <ul class="social-area text-sm-end mt-md-0 mt-2">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="comment-area">
                    <h5 class="title">03 Comments</h5>
                    <div class="media">
                        <div class="media-left">
                            <img src="{{asset('assets/img/blog/comment.png')}}" alt="img">
                        </div>
                        <div class="media-body">
                            <a class="btn btn-base float-end" href="#">Reply</a>
                            <h6>Haslida heris</h6>
                            <span>20 Feb 2020 at 4:00 pm</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                        </div>
                    </div>
                </div>
                <form class="default-form-wrap">
                    <h5 class="title">Comments</h5>
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
                                <textarea rows="4" placeholder="Message..."></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-base">Submit your Message</button>
                </form>
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
        </div>
    </div>
</div>
<!-- blog single end -->

@endsection
