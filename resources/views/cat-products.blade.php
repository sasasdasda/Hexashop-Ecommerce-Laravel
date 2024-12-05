@extends('layout.layout')
@section('content')

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>{{ ucfirst($cat->name) }} Products</h2>
                        <span>{{ ucfirst($cat->description) }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Latest {{ ucfirst($cat->name) }} Products</h2>
                        <span>Check out all of our products.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                {{-- Check If The Var Is Exist Or No --}}

                @if (isset($products))
                    {{-- Var is Exists --}}
                    {{-- Foreach The Var --}}
                    @forelse ($products as $product)
                        <div class="col-lg-4">
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                            <li><a href="{{ route('single-product',$product->uuid) }}"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('images/'.$product->image) }}" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>{{ $product->name }}</h4>
                                    ss
                                    <span>$75.00</span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="alert alert-primary w-100 mr-1 ml-1">
                            <h3 class="mb-3">Oops Empty Category!!!</h3>
                            <div class="alert alert-primary w-100">We Will Purchase New Products in This Category Keep Wait? <br> <a href="{{ route('home') }}">HexaShop</a></div>
                        </div>
                    @endforelse
                @endif
                <div class="col-lg-12">
                    <div class="pagination">
                        <ul>
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li class="active">
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->
@stop
