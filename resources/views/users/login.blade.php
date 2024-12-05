{{ $noNavBar = '' }}

@extends('layout.layout')

@section('content')
    @if (isset($error))
        <div class="alert-danger">{{ $error }}</div>
        @php
            var_dump($error);
        @endphp
        <div class="alert alert-danger">Error Login Details Are Not Valid.</div>
    @endif



    <div class="text-center pt-5 mt-5">
        <img src="{{ asset('assets/images/logo.png') }}" alt="">
    </div>
    <div class="d-flex justify-content-center mt-2 align-items-center">
        <form action="{{ route('login.submit') }}" method="POST" class="w-50 p-3">
            {{-- <div class="alert alert-danger">Error Login Details Are Not Valid.</div> --}}
            @csrf
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="form-group ">
                <input type="email" name="email" id="" class="w-100 border-black pt-2 pr-2 pb-2 pl-2"
                    placeholder="Email">

                <small id="emailHelps" class="form-text mt-1 mb-2 text-muted">We'll never share your email with anyone
                    else.</small>
                    @error('email')
                        <div class="alert alert-danger">Error Login Details Are Not Valid.</div>

                    @enderror
                <input type="password" name="password" id="" class="w-100 mb-2 border-black pt-2 pr-2 pb-2 pl-2"
                    placeholder="Password">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>

                @enderror
                <div class="form-check mt-3">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember My Username</label>
                </div>
                <div class="mt-3">
                    <a href="{{ route('signup') }}" class="black">(Not Have Account?) Sign up</a>
                </div>
                <input type="submit" value="Login" class="get-started-button-reverse pt-1 pr-4 pb-1 pl-4  mt-3">
            </div>

        </form>
    </div>












@stop
