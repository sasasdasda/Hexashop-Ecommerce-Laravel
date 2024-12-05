@extends('layout.layout')



@section('content')
<div class="container top-problem">
    <div class="untree_co-section  before-footer-section mt-4">
        {{-- <div class="s"> --}}
            <div class="mt-4"></div>
            <h1>Your Orders</h1>
            <div class="row mb-5">
            <form class="col-md-12" method="post">
                <div class="site-blocks-table">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th class="product-thumbnail">Image</th>
                        <th class="product-name">Product</th>
                        <th class="product-price">Price</th>
                        <th class="product-quantity">Quantity</th>
                        <th class="product-total">Total</th>
                        <th class="product-remove">Remove</th>
                    </tr>
                    </thead>
                    <tbody> 
                    <tr>
                        <td class="product-thumbnail">
                        <img src="{{ asset('assets/images/instagram-03.jpg') }}" alt="Image" class="img-fluid">
                        </td>
                        <td class="product-name">
                        <h2 class="h5 text-black">Product 1</h2>
                        </td>
                        <td>$49.00</td>
                        <td>
                        <div class="input-group mb-3 d-flex align-items-center quantity-container border-dark" style="max-width: 120px;">
                            <div class="quantity buttons_added">
                                <input type="button" value="-" class="minus"><input type="number" step="1"
                                min="1" max="" name="quantity" value="1" title="Qty"
                            class="input-text qty text" size="4" pattern="" inputmode=""><input
                            type="button" value="+" class="plus">
                        </div>
                        </div>

                        </td>
                        <td>$49.00</td>
                        <td><a href="#" class="btn btn-black btn-sm">X</a></td>
                    </tr>

                    @foreach ($carts as $cart)
                        <tr>
                            <td class="product-thumbnail">
                            <img src="{{ asset('assets/admin/img/person1.jpg') }}" alt="Image" class="img-fluid">
                            </td>
                            <td class="product-name">
                            <h2 class="h5 text-black">{{ $cart->product_id }} </h2>
                            </td>
                            <td>$49.00</td>
                            <td>
                            <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                                <div class="input-group-prepend">
                                <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                                </div>
                                <input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                <div class="input-group-append">
                                <button class="btn btn-outline-black increase" type="button">&plus;</button>
                                </div>
                            </div>

                            </td>
                            <td>$49.00</td>
                            <td><a href="#" class="btn btn-black btn-sm">X</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </form>
            </div>

            <div class="row">
            <div class="col-md-6">
                <div class="row mb-5">
                <div class="col-md-6 mb-3 mb-md-0">
                    <button class="btn btn-dark  border-0  btn-black btn-sm btn-block">Update Cart</button>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-dark  border-0 rounded-pills btn-outline-black btn-sm btn-block">Continue Shopping</button>
                </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                    <label class="text-black h4" for="coupon">Coupon</label>
                    <p class="text-dark">Enter your coupon code if you have one.</p>
                </div>
                <div class="col-md-8 mb-3 mb-md-0">
                    <input type="text" class="form-control  border-dark outline-dark" id="coupon" placeholder="Coupon Code">
                </div>
                <div class="col-md-4">
                    <button class="btn btn-dark  border-0 rounded-pill">Apply Coupon</button>
                </div>
                </div>
            </div>
            <div class="col-md-6 pl-5">
                <div class="row justify-content-end">
                <div class="col-md-7">
                    <div class="row">
                    <div class="col-md-12 text-right border-bottom mb-5">
                        <h3 class="text-black h4 text-uppercase text-center">Cart Totals</h3>
                    </div>
                    </div>
                    <div class="row mb-3">
                    <div class="col-md-6">
                        <span class="text-black">Subtotal</span>
                    </div>
                    <div class="col-md-6 text-right">
                        <strong class="text-black">$230.00</strong>
                    </div>
                    </div>
                    <div class="row mb-5">
                    <div class="col-md-6">
                        <span class="text-black">Total</span>
                    </div>
                    <div class="col-md-6 text-right">
                        <strong class="text-black">$230.00</strong>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-dark btn-lg py-3 w-100 border-0 " onclick="window.location='checkout.html'">Proceed To Checkout</button>
                        <div class="main-border-button btn btn-black"><a href="#">Add To Cart</a></div>

                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        {{-- </div> --}}
        </div>
</div>

@stop
