<!-- ***** Header Area Start ***** -->


@php
    use App\Models\User;
@endphp

<header class="header-area header-sticky mb-5 ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ route('home') }}" class="logo">
                        <img src="{{ asset('assets/images/logo.png') }}">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{ route('home') }}" class="active">{{ trans('app.home') }}</a></li>
                        <li class="scroll-to-section link-profile"><a href="{{ route('home') }}">Profile</a></li>
                        @guest
                                    <li><a href="{{ route('login') }}">{{ trans('app.login') }}</a></li>
                                    <li><a href="{{ route('signup') }}">{{ trans('app.signup') }}</a></li>
                        @endguest
                        <li class="submenu ">
                            <a href="javascript:;">{{ trans('app.pages') }}</a>
                            <ul>
                                <li><a href="{{ route('about') }}">{{ trans('app.aboutus') }}</a></li>
                                <li><a href="{{ route('products') }}">{{ trans('app.products') }}</a></li>
                                {{-- <li><a href="{{ route('single-product') }}">Single Product</a></li> --}}
                                <li><a href="{{ route('contact') }}">{{ trans('app.contactus') }}</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:;">{{ trans('app.category') }}</a>
                            <ul>
                                @foreach (category() as $cat)
                                    <li><a href="{{ route('category.products',$cat->name) }}">{{ $cat->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="javascript:;">{{ trans('app.feature') }}</a>
                            <ul>
                                <li><a href="#">Features Page 1</a></li>
                                <li><a href="#">Features Page 2</a></li>
                                <li><a href="#">Features Page 3</a></li>
                                <li><a rel="nofollow" href="https://templatemo.com/page/4" target="_blank">Template
                                        Page 4</a></li>
                            </ul>
                        </li>
                        @guest
                            <li class="scroll-to-section"><a href="#explore">{{ trans('app.explore') }}</a></li>
                        @endguest
                        @auth
                            {{-- <li class="pic-profile ">
                                <a href="{{ route('profile') }}" class="ssss">
                                    <caption class="text-black">Seif M</caption>
                                    <div>
                                        <img src="{{ asset('assets/admin/img/person2.jpg') }}" alt=""class="User-Profile-Image-Auth">
                                    </div>
                                </a>
                            </li> --}}

                            <li class="submenu">
                                {{-- <div   class="ssss"> --}}
                                    <a href="javascript:;">
                                        <img src="{{ profile_image()  }}" alt=""class="User-Profile-Image-Auth ">

                                    </a>
                                    <div>
                                    </div>
                                {{-- </div> --}}
                                <ul>

                                    <li><a href="{{ route('profile') }}">Profile</a></li>
                                    <li><a href="{{ route('cart') }}">Cart</a></li>
                                    <li><a href="{{ route('add.product') }}">Add Product</a></li>
                                    <li><a href="{{ route('yourproduct')}}">My Product</a></li>
                                    <li><a href="{{ route('orders')}}">Order</a></li>

                                    <li><a href="#">Settings</a></li>
                                    <li><a href="{{ route('logout') }}">Logout</a></li>

                                </ul>
                            </li>
                        @endauth
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <div class="">
                    </div>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

