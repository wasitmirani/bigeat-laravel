

@extends('layouts.frontend.master')

@section('content')

@component('frontend.components.bredcrumb',['name'=>"Checkout",'title'=>"Checkout"])

@endcomponent


<!-- checkout area start -->
<div class="checkout-area pd-top-120 pd-bottom-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="bill-payment-wrap">
                    <h5>Billing details
                    </h5>
                    <form class="default-form-wrap style-2">
                        <div class="row">
                            <div class="col-md-6">
                                <label>First Name</label>
                                <div class="single-input-wrap">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Last Name</label>
                                <div class="single-input-wrap">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>Country</label>
                                <div class="single-input-wrap">
                                    <input type="text" class="form-control" placeholder="Type Your Country">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Street address</label>
                                <div class="single-input-wrap">
                                    <input type="text" class="form-control" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Permanent address</label>
                                <div class="single-input-wrap">
                                    <input type="text" class="form-control" placeholder="Address">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="order-area">
                    <h5 class="title">Your order</h5>
                    <div class="order-product">
                        <div class="thumb">
                            <img src="{{asset('assets/img/widget/01.png')}}" alt="img">
                        </div>
                        <div class="details">
                            <h6>All Season Gulliver Pizza</h6>
                            <ul>
                                <li><span>Select Size: </span>Large</li>
                                <li><span>Select Crust: </span>Double Crust</li>
                            </ul>
                        </div>
                    </div>
                    <ul class="amount">
                        <li>Subtotal<span>$50.00</span></li>
                        <li class="total">Total<span>$50.00</span></li>
                    </ul>
                    <div class="peyment-method">
                        <h6>Check payments</h6>
                        <ul class="card-area">
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                    </label>
                                </div>
                                <div class="details">
                                    <h6>Credit Cart <img src="{{asset('assets/img/icon/peyment-card.png')}}" alt="img"></h6>
                                    <p>Pay with visa, Anex, MasterCard, Maestro,Discover and many other credit and debit credit vai paypal</p>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                    </label>
                                </div>
                                <div class="details">
                                    <h6>PayPal <img src="{{asset('assets/img/icon/paypal-card.png')}}" alt="img"></h6>
                                    <p>Pay easily, fast and secure with PayPal.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a class="btn btn-secondary w-100" href="#"> PLACE ORDER</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- checkout area end -->


@endsection
