@extends('layouts.frontend.master')

@section('content')
 <!-- bredcrumb Area Start-->
@component('frontend.components.bredcrumb',['name'=>'About us','title'=>'Who are we?'])

@endcomponent
<!-- bredcrumb Area End -->

<!-- about Area Start-->
<section class="about-area pd-top-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-sm-8">
                <div class="thumb mb-4 mb-lg-0">
                    <img src="{{asset('assets/img/other/about-2.png')}}" alt="img">
                </div>
            </div>
            <div class="col-lg-6 order-lg-first align-self-center">
                <div class="section-title mb-0 text-center text-lg-start">
                    <h3 class="sub-title">Our History</h3>
                    <h2 class="title">Origins of the restaurant</h2>
                    <p>Sharing knowledge and skills is what we do. With passion. That’s why the Alimentarium organises daily culinary workshops and classes led by qualified chefs. A neque malesuada in tortor eget justo mauris nec dolor. Consequat risus vitae, ac ac et preparation.</p>
                    <p>Nunc quam nibh diam in eget. Tortor amet, eleifend sed viverra ac eu porta netus pulvinar. Quis sem donec pharetra viverra consectetur aliquam, platea egestas. Egestas quis fringilla cursus nullam. Nisl vulputate aliquam odio massa mattis.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about Area End -->

<!-- about Area Start-->
@component('frontend.components.aboutComponent')

@endcomponent
<!-- about Area End -->

<!-- video Area Start-->
<section class="video-area featured-area pd-bottom-150" style="background-image: url({{asset('assets/img/other/video.png')}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title text-lg-start text-center">
                    <h3 class="sub-title text-secondary">Why choose us</h3>
                    <h2 class="title text-white">Visit our kitchens to see how we prepare your favorite dish</h2>
                </div>
            </div>
            <div class="col-lg-6 align-self-center text-center">
                <a class="play-btn" href="#"><i class="ri-play-circle-fill"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- video Area End -->

<!-- testimonial Area Start-->
@component('frontend.components.testimonial')

@endcomponent
<!-- testimonial Area End -->

<!-- blog Area Start-->
@component('frontend.components.blogComponent')

@endcomponent
<!-- blog Area End -->

@endsection
