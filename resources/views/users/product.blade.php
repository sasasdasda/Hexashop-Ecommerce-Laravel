@extends('layout.layout')
@section('content')

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Your Products</h2>
                        <span>Awesome &amp; Creative HTML CSS layout by TemplateMo</span>
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
                        <h2>Your Products</h2>
                        <span>Check out all of Your products. {{ $count }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                {{-- Check If The Var Is Exist Or No --}}

                @if (isset($products) && count($products) >= 1)
                    {{-- Var is Exists --}}
                    {{-- Foreach The Var --}}
                    @foreach ($products as $product)
                        <div class="col-lg-4">
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="{{ route('single-product',$product->uuid) }}"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('product.edit',$product->uuid) }}"><i class="fa fa-edit"></i></a></li>
                                            <li><a href="{{ route('product.delete',$product->uuid) }}"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('images/'.$product->image) }}" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>{{ $product->name }}</h4>
                                    ss
                                    <span>${{ $product->price }}</span>
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
                    @endforeach
                    @else
                    <div class="alert alert-warning m-2 w-100">You Are Not Have Any Product. <a href="{{ route('add.product') }}">Add Product</a></div>
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
