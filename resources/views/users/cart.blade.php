@extends('layout.layout')



@section('content')
<div class="container top-problem">
    <div class="untree_co-section  before-footer-section mt-4">
        {{-- <div class="s"> --}}
            <div class="mt-4"></div>
            <div class="row mb-5">
            <form class="col-md-12" method="post">
                <div class="site-blocks-table">

                @if (!$carts)
                <div class="alert alert-warning d-flex justify-content-between align-items-center"><div class="">You are not Have any Product in Cart .</div> <a href="{{ route('products') }}" class="bg-dark text-light px-3 py-1 rounded">Add Product</a></div>
                @endif
                @if ($pay_link != false)

                    <table class="table table-striped">
                        <thead>
                        <tr class="bg-dark text-white">
                            <th class="text-center product-thumbnail">Image</th>
                            <th class="text-center product-name">Product</th>
                            <th class="text-center product-price">Price</th>
                            <th class="text-center product-quantity">Quantity</th>
                            <th class="text-center product-total">Total</th>
                            <th class="text-center product-remove">Status</th>
                            <th class="text-center product-remove">Remove</th>
                        </tr>
                        </thead>
                        <tbody>


                            @foreach ($carts as $cart)
                            @foreach ($cart as $cart)
                            @if ($cart->paid == 0)
                                <tr>

                                    <td class="product-thumbnail">
                                        <img src="{{ asset('images/'.$cart->image) }}" alt="Image" class="img-fluid">
                                    </td>

                                    <td class="product-name">
                                        <h2 class="h5 text-black">{{ $cart->name }} </h2>
                                    </td>
                                    <td>${{ $cart->price }}</td>

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
                                    <td>
                                        {{-- @if ( > 0) --}}
                                            <div class="bg-dark text-center p-1 text-white rounded">In Order</div>
                                        {{-- @endif --}}
                                    </td>
                                    <td class="d-flex justify-content-center "><a href="#" class="btn text-white w-100 btn-black bg-danger btn-sm text-center">X</a></td>
                                </tr>
                                {{-- @else --}}
                                @endif
                                @endforeach
                                @endforeach
                                {{-- @if (!$cart) --}}
                                {{-- <div class="alert alert-warning">You are not Have any Product in Cart</div> --}}
                                {{-- @endif --}}
                        </tbody>
                    </table>
                @endif
                </div>
            </form>
            </div>

            @if ($pay_link)
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
                                        <button class="btn btn-dark btn-lg py-3 w-100 border-0 " onclick="window.location='{{ $pay_link }}'">Proceed To Checkout</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            @endif

            {{-- </div> --}}
        </div>
</div>

@stop
