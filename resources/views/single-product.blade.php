@extends('layout.layout')
@section('content')


<div class="alert alert-danger">SS</div>

    <!-- ***** Main Banner Area End ***** -->
    @foreach ($product as $p)
    @endforeach


    <!-- ***** Product Area Starts ***** -->
    <section class="section" id="product">
        <div class="container">
            @guest
                <div class="alert alert-danger">Please <a href="{{ route('login') }}">Login</a> or <a href="{{ route('signup') }}">Signup</a> For Buy This Product !</div>
            @endguest
            <div class="row">
                <div class="col-lg-8">
                    <div class="left-images">
                        <img src="{{ asset("images/$p->image") }}" alt="">
                        <img src="{{ asset("images/$image->image") }}" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mt-2 d-flex ">
                        <a href="{{ route('user.profile',$user->uuid) }}" class="d-flex">
                            <img src="{{ asset('assets/admin/img/person2.jpg') }}" alt=""class="User-Profile-Image-Auth">
                            <div class="ml-2 text-bold">
                                {{ Str::ucfirst($user->firstname) }}
                                {{ Str::ucfirst($user->lastname) }}
                                {{-- <div class="text-success">Verfid</div> --}}
                                <div class="text-danger">Not Verfid</div>
                                {{-- <div class="text-success">Verfid Pro</div> --}}
                            </div>
                        </a>

                    </div>
                    <hr>
                    @if ($product != null)
                            <div class="right-content">

                                <h4>{{ $p->name }}</h4>
                                <span class="price">${{ $p->price }} <span id="price" class="d-none"> {{ $p->price }}</span></span>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>

                                <span class="w-100">{{$p->description}}</span>
                                    <div class="">
                                        <i class="fa fa-quote-left"></i>
                                        <p>Category : {{ Str::ucfirst($p->category->name) }}</p>
                                        <p>Browse <a href="{{ route('category.products',$p->category->name) }}">{{ Str::ucfirst($p->category->name) }}</a> Category</p>
                                    </div>
                                    {{-- <div class="quantity-content">
                                        <div class="left-content">
                                            <h6>No. of Orders</h6>
                                        </div>
                                        <div class="right-content">
                                            <div class="quantity buttons_added">
                                                <input type="button" value="-" class="minus" onclick="return minus()">
                                                <input type="number" id="num" step="1" min="1" max="99" disabled name="quantity" value="5" title="Quantity"
                                            class="input-text qty text" size="4" pattern="" inputmode="">
                                            <input type="button" value="+" class="plus" onclick="return plus()">
                                        </div>
                                    </div>
                                </div> --}}
                                @auth
                                    @if(auth()->user()->id == $user->id)
                                        <div class="alert alert-danger  ">Note: You are Can't Buy Your Product</div>
                                    @endif
                                @endauth

                                <div class="total">
                                    {{-- ${{ $p->price * 3 }} --}}
                                    <h4>Total: <span id="total"></span> </h4>
                                    {{-- @if (isset($denied))
                                        {{ $denied }}
                                    @endif --}}
                                    <div class="main-border-button"><a href="{{ route('add.to.cart',[3,$p->uuid]) }}">Add To Cart</a></div>
                                </div>
                            </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>
<script src="{{ asset('assets/admin/js/jquery-2.1.0.min.js') }}"></script>
<script>
    var num = document.getElementById('num')

    var max = num.getAttribute('max')
    var min = num.getAttribute('min')
    let value = num.getAttribute('value')

    console.log(value );
    num = +num.value
    var price = document.getElementById('price').innerHTML
    price = +price
    var total = price * num
    $('#total').append(total)
// total

    console.log()

    function plus(){
        // if()
        console.log('clicked')
        total += price * num
        console.log(total)
        var total_vv = document.getElementById('total')
        total_vv.innerHTML = total
        console.log(value)
    }
    console.log(num)
    function minus(){
        if(value == 1){
            console.log('ssss')
        }

            console.log(value)
            total -= price * num
            // console.log(total)
            var total_vv = document.getElementById('total')
            total_vv.innerHTML = total

    }
</script>
    <!-- ***** Product Area Ends ***** -->
@stop
