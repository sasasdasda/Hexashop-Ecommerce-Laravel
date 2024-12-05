@extends('layout.layout')
@section('content')
<section class="profile-container container">
    <div class="d-flex profile-links">
        <a href="">Back</a>
    </div>
    <div class="profile">
        <div class="profile-image">
            <div class="image-center">
                <img src="{{ asset('assets/admin/img/person2.jpg') }}" alt="">
            </div>
            <div class="other-profile d-flex ">
                <div class="user-intro  ">
                    <div><h3> {{ ucfirst($user->firstname.' ') }} {{ ucfirst($user->lastname) }}</h3></div>
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

            </div>
        </div>
        <div class="profile-content">
            <div class="subscribe subscribe-profile d-flex">
                <div>
                    <div class="mb-4">
                        <a href="" class="chat-profile-btn">Chat</a>
                        <a href="" class="chat-profile-btns">Chat</a>
                    </div>
                    <ul>
                        <li>Store Location:<br>
                        <span>
                            {{ check_confirm($user_detail,'store_location') }}
                        </span></li>
                        <li>Phone:<br>
                            <span>
                                {{ check_confirm($user_detail,'phone') }}
                            </span>
                        </li>
                    </ul>
                    <ul>
                        <li>Email:<br><span>{{ check_confirm($user_detail,'email_work') }}</span></li>
                        <li>Social Media:<br><span><a href="#">Facebook</a>, <a
                                    href="#">Instagram</a>, <a href="#">Behance</a>, <a
                                    href="#">Linkedin</a></span></li>
                    </ul>

                </div>

            </div>
            <div class="latest-product mt-4">
                <h3>Latest Product</h3>
                <div class="products flex">
                    <div class="product">
                        <div class="product-img flex-col">
                            <img src="{{ asset('assets/images/instagram-03.jpg') }}" alt="">
                            <caption class="mt-2"></caption>
                        </div>
                        <div class="product-details">
                            <div class="product-text ">A Dress To Girls</div>
                            <div class="product-price">
                                {{-- <div> --}}
                                    399$
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img flex-col">
                            <img src="{{ asset('assets/images/instagram-03.jpg') }}" alt="">
                            <caption class="mt-2"></caption>
                        </div>
                        <div class="product-details">
                            <div class="product-text ">A Dress To Girls</div>
                            <div class="product-price">
                                {{-- <div> --}}
                                    399$
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img flex-col">
                            <img src="{{ asset('assets/images/instagram-03.jpg') }}" alt="">
                            <caption class="mt-2"></caption>
                        </div>
                        <div class="product-details">
                            <div class="product-text ">A Dress To Girls</div>
                            <div class="product-price">
                                {{-- <div> --}}
                                    399$
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="center">
                    <a href="signup.html" id="form-submit" class=" get-started-buttons text-secondary get-started">Your Products <i
                        class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="profile-about mt-4">
                <div class="d-flex about">
                    <h3>About</h3>
                </div>
                <p class=" ml-2 mt-2">{{ check_confirm($user_detail,'about') }}</p>
            </div>
        </div>
    </div>
</section>
    @stop

