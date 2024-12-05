@extends('layout.layout')
@section('content')
    <section class="profile-container container">
        <h1 class="order-header">My Orders</h1>

        @forelse ($user_order as $order)
            <div class="order">
                <div class="order-details">
                    <div>
                        <div>Order : 1</div>
                        <div>Total Product : 2</div>
                    </div>
                    <div class="{{ $order->status }}">{{ Str::ucfirst( $order->status) }}</div>
                </div>
                <div class="order-line"></div>
                <div class="order-detail">
                    <div class="">Price : 200$</div>
                    <div class="">Vendor : Seif Mohamed</div>
                    <div class="">Quantity: 20</div>
                </div>
                <div class="order-line"></div>
                <div class="order-map"></div>
                <div class="order-delevery bg-dangers">
                    <div class="order-image-container">
                        <img src="{{ asset('/images/product/baner-right-image-04.jpg') }}" alt="" class="order-delevery-image">
                        <div class="ssp">
                            <span>Seif</span>
                            <div class="delvery-title">Delevery</div>
                        </div>
                    </div>
                    <div class="order-chat-btn">Chat</div>
                </div>
            </div>
        @empty
            <div class="alert alert-warning my-5">You Are Not Buy Any Product.</div>
        @endforelse



        {{-- <div class="order">
            <div>
                <div>Order : 1</div>
                <div>Total Product : 10</div>
            </div>
            <div class="success">Success</div>
        </div>
        <div class="order">
            <div>
                <div>Order : 1</div>
                <div>Total Product : 10</div>
            </div>
            <div class="reject">Rejected</div>
        </div>

        <div class="order">
            <div>
                <div>Order : 1</div>
                <div>Total Product : 10</div>
            </div>
            <div class="in-progress">Progress</div>
        </div> --}}

    </section>
@stop

