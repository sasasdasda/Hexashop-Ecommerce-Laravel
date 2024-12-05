@extends('layout.layout')
@section('content')
@php
    $productCount = 0
@endphp
<section class="profile-container container">
    <div class="d-flex profile-links">
        <a href="">Back</a>
        <a href="{{ route('logout') }}" class="logout">Logout</a>
    </div>
    <div class="profile">
        <div class="profile-image">
            <div class="image-center">
                <img src="{{ profile_image() }}" alt="" class="profile-img">
            </div>
            <div class="other-profile d-flex ">
                <div class="user-intro  ">
                    <div><h3> {{ ($user->firstname) }} {{ ($user->lastname) }}</h3></div>


                    @php
                        echo __('messages.welcome');
                    @endphp
                    <div>{{ check_confirm($user_detail,'country') }}</div>
                    <div class="text-success">
                        @if(check_confirm($user_detail,'rate') == 0)
                        <span class="text-danger">Not Verfied</span>
                        @elseif (check_confirm($user_detail,'rate') == 1)
                        <span class="text-primary">Verfied</span>
                        @elseif (check_confirm($user_detail,'rate') == 2)
                        <span class="text-success">Verfied Pro</span>
                        @endif
                    </div>
                </div>
                {{-- <div class="edit"> --}}
                    <a href="{{ route('user.detail') }}" class="edit">
                        <i class="fas fa-edit"></i>
                    </a>
                {{-- </div> --}}
            </div>
        </div>
        <div class="profile-content">
            <div class="subscribe subscribe-profile d-flexs">
                <div class="profile-details-1 d-flex">
                    <div class="">Products: {{ $user_products_count }}</div>
                    <div class="">Rate: 30% <i class="fas fa-star"></i></div>
                    <div class="">Articale: 43</div>
                </div>
                <div>
                    <ul>
                        <li>Store Location:<br>
                        <span>
                            {{ check_confirm($user_detail,'store_location') }}
                        </span></li>
                    </ul>
                    <ul>
                        <li>Email:<br><span>{{ check_confirm($user_detail,'email_work') }}</span></li>
                        <li>Social Media:<br><span><a href="#">Facebook</a>, <a
                                    href="#">Instagram</a>, <a href="#">Behance</a>, </span></li>
                                    {{-- <form action="">
                                        <div class="">
                                            <div class="d-flex">
                                                <i class="fas fa-search mr-2s bg-danger flex-grow-1s p-3" >s</i>
                                                <input type="text" name="" id="" placeholder="Facebook Link" class="mb-3">
                                            </div>
                                            <input type="text" name="" id="" placeholder=" Instagram Link" class="mb-3">
                                            <input type="text" name="" id="" placeholder=" Behance Link" class="mb-3">
                                            <input type="submit" value="Edit">
                                        </div>
                                    </form> --}}
                                    <form id="subscribea" action="" method="get">
                                        <div class="row">
                                            <div class="col-lg-12 mb-3">
                                                <fieldset>
                                                    <input name="name" type="text" id="name" placeholder="Facebook Link"
                                                        required="">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                                <fieldset>
                                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                                        placeholder="Instagram Link" required="">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                                <fieldset>
                                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                                        placeholder="Behance Link" required="">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset>
                                                    <button type="submit" id="form-submit" class="main-dark-button w-100"><i
                                                            class="fa fa-paper-plane"></i></button>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </form>
                    </ul>
                    {{-- <a href="" class="chat-profile-btn">Chat</a>
                    <a href="" class="chat-profile-btns">Chat</a> --}}
                </div>

            </div>
            <div class="latest-product mt-4">
                <h3>Latest Product</h3>
                <div class="products flex">
                    {{-- @foreach ($user_products as $u_pro) --}}

                    {{-- @endforeach --}}
                    @forelse ($user_products as $u_pro)

                    @php
                        $productCount ++;
                    @endphp
                    <div class="product">
                        <div class="product-img flex-col">
                            <img src="{{ asset('images/'.$u_pro->image) }}" alt="">
                            <caption class="mt-2"></caption>
                        </div>
                        <div class="product-details">
                            <div class="product-text ">{{ $u_pro->name }}</div>
                            <div class="product-price">
                                {{-- <div> --}}
                                    ${{ $u_pro->price }}
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="alert alert-warning w-100 rounded">Sorry There's No Product For You ! <a href="{{ route('add.product') }}">Add Product</a> </div>
                    @endforelse

                </div>
                <div class="center">
                    <a href="{{ route('yourproduct') }}" id="form-submit" class=" get-started-buttons text-secondary get-started">Your Products <i
                        class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="profile-about mt-4">
                <div class="d-flex about">
                    <h3>About</h3>
                </div>
                {{ $user_detail->about }}
                {{-- <p class="w-100 bg-success soverflow-auto ml-2 mt-2">{{ check_confirm($user_detail,'about') }}</p> --}}
            </div>
        </div>
    </div>
</sectio n>
@stop

