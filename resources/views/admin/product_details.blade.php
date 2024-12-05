@extends('admin.AdLayout.AdLayout')
@section('content')
<div class="alert alert-success">success</div>

    <body class="grey lighten-4">
        {{--
        @foreach ($product as $pro)
            {{ $pro->name }}
        @endforeach --}}

        <!-- Section: Details -->
        <section class="section section-Details grey lighten-4">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s12 m6">
                                        <span class="card-title">Product Details</span>
                                        @if ($product->approve === 1)
                                            <small class="green-user">Product Approved</small>
                                        @else
                                            <small class="red-error">Product Rejected</small>
                                        @endif
                                    </div>
                                    <div class="col s12 m6 center">
                                        <img src="{{ asset('assets/admin/img/person2.jpg') }}" alt=""
                                            class="responsive-img circle" style="width: 40px; margin-left: 10px;">
                                        <p>Product By - {{ Str::ucfirst(auth('admin')->user()->firstname)}} {{ Str::ucfirst(auth('admin')->user()->lastname) }}</p>
                                        <p>On Jan 12, 2018 </p>
                                    </div>
                                </div>
                                <form action="{{ route('update.product',$product->id) }}" method="get">
                                    @csrf
                                    <div class="input-field">
                                        <input type="text" name="name" id="title" value="{{ $product->name }}">
                                        <label for="title">Name</label>
                                    </div>
                                    <div class="input-field">
                                        <input type="text" name="price" id="title" value="${{ $product->price }}">
                                        <label for="title">Price</label>
                                    </div>
                                    <div class="input-field">
                                        <select value="3"name="category">
                                            <option value="" disabled>Select Option</option>
                                            <option value="1" selected>Web Developement</option>
                                            <option value="2">Graphic Design</option>
                                            <option value="3">Tech Gadgets</option>
                                            <option value="4">Other</option>
                                        </select>
                                        <label>Category</label>
                                    </div>
                                    <div class="input-field">
                                        <textarea name="body" id="body" class="materialize-textarea">{{ $product->description }}</textarea>
                                        <label>Description</label>
                                    </div>
                                    <div class="card-action">
                                        <input type="submit" class="btn green" value="Save">
                                        <a class="btn red" href="{{ route('delete.product', $product->id) }}">Delete</a>
                                        @if ($product->approve === 0)
                                            <a class="btn warning" href="{{ route('approve.product',$product->id) }}">Approve</a>
                                        @else
                                            <a class="btn orange" href="{{ route('deny.product',$product->id) }}">Deny</a>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Footer -->
        <footer class="section blue darken-2 white-text center">
            <p>Madmin Panel Copyright &copy; 2018</p>
        </footer>


    @stop
