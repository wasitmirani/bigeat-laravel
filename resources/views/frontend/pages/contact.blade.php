@extends('layouts.frontend.master')

@section('content')

@component('frontend.components.bredcrumb',['name'=>"CONTACT",'title'=>"Contact with Us"])

@endcomponent
  <!-- contact start -->
  <div class="contact-area pd-top-120 pd-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <ul class="contact_info_list">
                    <li class="single-info-item">
                        <img src="{{asset('assets/img/icon/location.png')}}" alt="icon">
                        <div class="details">
                            4920 Trails End Road Ft  United States, FL 33311
                        </div>
                    </li>
                    <li class="single-info-item">
                        <img src="{{asset('assets/img/icon/envelope.png')}}" alt="icon">
                        <div class="details">
                            ordernow@bigeat.com
                        </div>
                    </li>
                    <li class="single-info-item">
                        <img src="{{asset('assets/img/icon/phone.png')}}" alt="icon">
                        <div class="details">
                            +997 509 153 849
                        </div>
                    </li>
                </ul>
                <p>We’re an award-winning creative design studio with a small team and big ideas. We pour passion into projects big and small, providing our expert clients with solutions.</p>
            </div>
            <div class="col-lg-6">
                <form class="default-form-wrap border-0 p-0 mt-4 mt-lg-0">
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
        </div>
    </div>
</div>
<!-- contact end -->

<div class="location-map">
    <div class="responsive-map">
        <iframe src="https://www.google.com/maps/" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>


@endsection
