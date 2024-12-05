{{ $noNavBar = '' }}
@extends('layout.layout')
@section('content')


<div class="d-flex justify-content-center mt-2 align-items-center">
    <form action="{{ route('signup.submit') }}" method="post" class="w-50 p-3">
        @csrf
        {{-- @method('post') --}}
        <h4 class="mb-3">Full Name</h4>

        <div class="form-group w-100">

            <div class=" d-flex justify-content-between flex-grow-1">
                <!-- <div class=""> -->
                <div class="flex-grow-1 mr-1">
                    <input type="text" name="firstname" id="" class="w-100 border-black pt-2 pr-2 pb-2 pl-2"
                        placeholder="First Name" required>
                    @error('firstname')
                        <div class="mt-2 rounded p-2 pl-4 alert-danger mr-1">{{ $message }}</div>
                    @enderror
                </div>
                <!-- </div> -->
                <!-- <div class=""> -->
                <div class="flex-grow-1 ml-1">
                    <input type="text" name="lastname" id="" class="w-100  border-black pt-2 pr-2 pb-2 pl-2"
                        placeholder="Last Name" required>
                    @error('lastname')
                        <div class="mt-2 rounded p-2 pl-4 alert-danger ml-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- </div> -->
            </div>








            <input type="submit" value="SAVE" class="get-started-button-reverse pt-1 pr-4 pb-1 pl-4  mt-3">
        </div>

    </form>

</div>



<div class="d-flex justify-content-center mt-2 align-items-center">
    <form action="{{ route('signup.submit') }}" method="post" class="w-50 p-3">
        @csrf
        {{-- @method('post') --}}
        <div class="form-group w-100">



            <h4>Store Location</h4>

            <input type="emails" name="email" id="" class="w-100 mt-3 border-black pt-2 pr-2 pb-2 pl-2"
                placeholder="Store Location" required>
            @error('email')
                <div class="mt-2 rounded p-2 pl-4 alert-danger mr-1">{{ $message }}</div>
            @enderror



            <input type="submit" value="SAVE" class="get-started-button-reverse pt-1 pr-4 pb-1 pl-4  mt-3">
        </div>

    </form>

</div>

<div class="d-flex justify-content-center mt-2 align-items-center">
    <form action="{{ route('signup.submit') }}" method="post" class="w-50 p-3">
        @csrf
        {{-- @method('post') --}}
        <div class="form-group w-100">




            <h4>Social Media</h4>
            <input type="emails" name="email" id="" class="w-100 mt-3 border-black pt-2 pr-2 pb-2 pl-2"
                placeholder="Name of Website" required>
            @error('email')
                <div class="mt-2 rounded p-2 pl-4 alert-danger mr-1">{{ $message }}</div>
            @enderror

            <input type="emails" name="email" id="" class="w-100 mt-3 border-black pt-2 pr-2 pb-2 pl-2"
                placeholder="Link to Website" required>
            @error('email')
                <div class="mt-2 rounded p-2 pl-4 alert-danger mr-1">{{ $message }}</div>
            @enderror



            <input type="submit" value="Make" class="get-started-button-reverse pt-1 pr-4 pb-1 pl-4  mt-3">
        </div>

    </form>

</div>

<div class="d-flex justify-content-center mt-2 align-items-center">
    <form action="{{ route('signup.submit') }}" method="post" class="w-50 p-3">
        @csrf
        {{-- @method('post') --}}
        <div class="form-group w-100">

            <h4 class="mb-3">Tell us About You</h4>

            <textarea name="" id="" cols="30" rows="10" class="w-100 p-3" placeholder="About"></textarea>
            @error('email')
                <div class="mt-2 rounded p-2 pl-4 alert-danger mr-1">{{ $message }}</div>
            @enderror



            <input type="submit" value="SAVE" class="get-started-button-reverse pt-1 pr-4 pb-1 pl-4  mt-3">
        </div>

    </form>

</div>

<div class="d-flex justify-content-center mt-2 align-items-center">
    <form action="{{ route('signup.submit') }}" method="post" class="w-50 p-3">
        @csrf
        {{-- @method('post') --}}
        <div class="form-group w-100">



            <h4>Phone Number</h4>

            <input type="text" name="email" id="" class="w-100 mt-3 border-black pt-2 pr-2 pb-2 pl-2"
                placeholder="Phone" required>
            @error('email')
                <div class="mt-2 rounded p-2 pl-4 alert-danger mr-1">{{ $message }}</div>
            @enderror



            <input type="submit" value="SAVE" class="get-started-button-reverse pt-1 pr-4 pb-1 pl-4  mt-3">
        </div>

    </form>

</div>
