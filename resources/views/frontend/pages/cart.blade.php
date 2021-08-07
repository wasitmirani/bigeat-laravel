@extends('layouts.frontend.master')

@section('content')

@component('frontend.components.bredcrumb',['name'=>'Cart Page ','title'=>'CHECK YOUR BOX'])

@endcomponent

<!-- cart area start -->
<div class="cart-area pd-top-120 pd-bottom-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="table-responsive mb-4">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="blank"></th>
                                <th class="blank"></th>
                                <th class="blank"></th>
                                <th class="title-name">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="table-close-btn"><a href="#"><i class="ri-close-line"></i></a></td>
                                <th scope="row"><img src="assets/img/widget/01.png" alt="img"></th>
                                <td colspan="2" class="item-name">
                                    <div class="details">
                                        <h5>All Season Gulliver Pizza</h5>
                                        <ul>
                                            <li><span>Select Size: </span>Large</li>
                                            <li><span>Select Crust: </span>Double Crust</li>
                                        </ul>
                                    </div>
                                </td>
                                <td>$50.00</td>
                                <td class="table-quantity">
                                    <form>
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus">
                                            <input type="number" class="input-text qty text" step="1" min="1" max="10000" name="quantity" value="1">
                                            <input type="button" value="+" class="plus">
                                        </div>
                                    </form>
                                </td>
                                <td>$40.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="promotional-area">
                    <form class="default-form-wrap">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="single-input-wrap">
                                    <input type="text" class="form-control" placeholder="Coupon Code">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <button type="submit" class="btn btn-secondary">APPLY COUPON</button>
                            </div>
                            <div class="col-md-4 col-sm-6 text-md-end">
                                <button type="submit" class="btn btn-base">UPDATE CART</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="order-cart-area">
                    <div class="order-cart">
                        <h5>Cart totals</h5>
                        <ul>
                            <li>Subtotal<span>$50.00</span></li>
                            <li class="total">Total<span>$50.00</span></li>
                        </ul>
                    </div>
                    <a class="btn btn-secondary w-100" href="#"> PROCEED TO CHECKOUT</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cart area end -->

@endsection
