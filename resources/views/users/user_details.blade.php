@extends('layout.layout')

@section('content')


    <!-- ***** Kids Area Ends ***** -->

    <!-- ***** Explore Area Ends ***** -->


    <!-- ***** Social Area Ends ***** -->

    <!-- ***** Subscribe Area Starts ***** -->
    <div class="subscribe">
        <div class="container">
            <h1 class="text-center Edit-Account">Edit Account</h1>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8   ">
                    {{-- <div class="section-heading">
                        <h2>By Subscribing To Our Newsletter You Can Get 30% Off</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div> --}}
                    <div class="d-flex justify-content-center">
                        <form id="subscribe"  method="post" action="{{ route('user.detail.submit') }}" class="form-detail" enctype="multipart/form-data">
                            @csrf
                            <div class="d-flex justify-content-center">
                                {{-- <div class="add-profile-image">
                                    Profile Image
                                </div> --}}
                            </div>
                            <div class="col ">
                                <fieldset class="mb-3">
                                    <input name="firstname" type="text" id="firstname" value="{{ $user_detail->lastname }}" placeholder="First Name">
                                </fieldset>
                                @error('firstname')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <fieldset class="mb-3">
                                    <input name="lastname" type="text" id="lastname" value="{{ $user_detail->lastname }}" placeholder="Second Name"
                                        required="">
                                </fieldset>
                                @error('lastname')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <fieldset class="mb-3">
                                    <input name="country" type="text" id="country" value="{{ $user_detail->country }}" placeholder="Your Country"
                                        required="">
                                </fieldset>
                                @error('country')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <fieldset class="mb-3">
                                    <img src="{{ asset("images/$user_detail->profile_image") }}" alt="" class="img-edit w-100 h-50">
                                    <input name="profile_image" type="file" id="profileImage" >
                                        <small class="bg-success p-1 text-white">Profile Image</small>
                                </fieldset>
                                @error('profile_image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <fieldset class="mb-3">
                                    <input name="store_location" type="text" id="store_location" value="{{ $user_detail->store_location }}" placeholder="Store Location"
                                        >
                                </fieldset>
                                @error('store_location')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <fieldset class="mb-3">
                                    <textarea name="about" placeholder="About" id="about" cols="30" rows="10" class="textarea-detail">{{ $user_detail->about }}</textarea>
                                </fieldset>
                                @error('about')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <fieldset  class="mb-3">
                                    <input name="email" type="email" id="email" value="{{ $user_detail->email_work }}" pattern="[^ @]*@[^ @]*"
                                        placeholder="Your Email Address" required="">
                                        <small class="bg-success p-1 text-white">We Will Send An Email To You to Verify</small>
                                        <small class="bg-success p-1 text-white">This is the email work it will be public for any user</small>
                                </fieldset>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <fieldset>
                                    <button type="submit" id="form-submit" class="w-100 main-dark-button"><i
                                            class="fa fa-paper-plane mr-1"></i></button>
                                </fieldset>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ***** Subscribe Area Ends ***** -->
@stop
