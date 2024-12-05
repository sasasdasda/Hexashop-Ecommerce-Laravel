{{ $noNavBar = '' }}
@extends('layout.layout')
@section('content')

    <div class="text-center pt-5 mt-5">
        <img src="{{ asset('assets/images/logo.png') }}" alt="">
    </div>
    <div class="d-flex justify-content-center mt-2 align-items-center">
        <form action="{{ route('signup.submit') }}" method="post" class="w-50 p-3">
            @csrf
            {{-- @method('post') --}}
            <div class="form-group w-100">
                <div class="d-flex justify-content-between mb-2">
                    <a class="oauth-links a1 mr-1 border-black">
                        <img src="{{ asset('assets/images/facebook.png') }}" alt="">
                    </a>
                    <a class="oauth-links a2 text-white text-center ml-1 border-black">
                        <img src="{{ asset('assets/images/facebook.png') }}" alt="">
                    </a>
                </div>
                <div class=" d-flex justify-content-between flex-grow-1">
                    <div class="flex-grow-1 mr-1">
                        <input type="text" name="firstname" id="" class="w-100 border-black pt-2 pr-2 pb-2 pl-2"
                            placeholder="First Name" required>
                        @error('firstname')
                            <div class="mt-2 rounded p-2 pl-4 alert-danger mr-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex-grow-1 ml-1">
                        <input type="text" name="lastname" id="" class="w-100  border-black pt-2 pr-2 pb-2 pl-2"
                            placeholder="Last Name" required>
                        @error('lastname')
                            <div class="mt-2 rounded p-2 pl-4 alert-danger ml-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>



                <input type="emails" name="email" id="" class="w-100 mt-3 border-black pt-2 pr-2 pb-2 pl-2"
                    placeholder="Email" required>
                @error('email')
                    <div class="mt-2 rounded p-2 pl-4 alert-danger mr-1">{{ $message }}</div>
                @enderror
                <input type="text" name="username" id="" class="w-100 mt-3 border-black pt-2 pr-2 pb-2 pl-2"
                    placeholder="Username" required>
                @error('username')
                    <div class="mt-2 rounded p-2 pl-4 alert-danger mr-1">{{ $message }}</div>
                @enderror
                <input type="password" name="password" id="" class="w-100 mt-3 border-black pt-2 pr-2 pb-2 pl-2"
                    placeholder="Password" required>
                @error('password')
                    <div class="mt-2 rounded p-2 pl-4 alert-danger mr-1">{{ $message }}</div>
                @enderror
                <input type="password" name="confirmPassword" id=""
                    class="w-100 mt-3 border-black pt-2 pr-2 pb-2 pl-2" placeholder="Confirm Password" required>
                {{-- {{ $ss }} --}}
                @if (isset($ss))
                    <div class="alert-info">{{ $ss }}</div>
                @endif
                @error('confirmPassword')
                    <div class="mt-2 rounded p-2 pl-4 alert-danger mr-1">{{ $message }}</div>
                @enderror

                <div class="mt-3">
                    <a href="{{ route('login') }}" class="black">(Have Account?) Login</a>
                </div>
                <input type="submit" value="Create Account" class="get-started-button-reverse pt-1 pr-4 pb-1 pl-4  mt-3">
            </div>

        </form>
    </div>


    <!--
                                                                                                                                                                                                                                <form id="subscribe" action="" class="d-flex justify-content-center bg-success" method="get">
                                                                                                                                                                                                                                    <div class="col bg-danger w-50">
                                                                                                                                                                                                                                        <div class="col-lg-5">
                                                                                                                                                                                                                                        <fieldset>
                                                                                                                                                                                                                                        <input name="name" type="text" id="name" placeholder="Username" required="">
                                                                                                                                                                                                                                        </fieldset>
                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                        <div class="col-lg-5">
                                                                                                                                                                                                                                        <fieldset>
                                                                                                                                                                                                                                            <input name="password" type="text" id="password" pattern="[^ @]*@[^ @]*" placeholder="Password" required="">
                                                                                                                                                                                                                                        </fieldset>
                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                        <div class="col-lg-2">
                                                                                                                                                                                                                                        <fieldset>
                                                                                                                                                                                                                                            <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                                                                                                                                                                                                                                        </fieldset>
                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                </form> -->


    </body>

    </html>
@stop
