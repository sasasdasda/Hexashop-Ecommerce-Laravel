@extends('layout.layout')

@section('content')

    <div class="subscribe">
        <div class="container">
            <h1 class="text-center Edit-Account">Edit Product</h1>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8   ">
                    {{-- <div class="section-heading">
                        <h2>By Subscribing To Our Newsletter You Can Get 30% Off</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div> --}}
                    <div class="d-flex justify-content-center">
                        <form id="subscribe"  method="post" action="{{ route('product.update',$product->uuid) }}" enctype="multipart/form-data" class="form-detail">
                            @csrf
                            <div class="d-flex justify-content-center">
                                {{-- <div class="add-profile-image">
                                    Profile Image
                                </div> --}}
                            </div>
                            <div class="col ">

                                <div class="bg-dangers d-flex">
                                    <fieldset class="mb-3">
                                    <img src="{{ asset("images/$product->image") }}" alt="" class="w-100">

                                        <input name="product_image" type="file" id="product_image" >
                                            <small class="bg-success p-1 text-white">Product Image 1</small>
                                    </fieldset>
                                    <fieldset class="mb-3">
                                    <img src="{{ asset("images/$productImage") }}" alt="" class="w-100">

                                        <input name="product_image_2" type="file" value="{{ $productImage }}" id="product_image" >
                                            <small class="bg-success p-1 text-white">Product Image 2</small>
                                    </fieldset>

                                </div>
                                @error('product_image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <fieldset class="mb-3">
                                    <input name="product_name" value="{{ $product->name }}" type="text" id="product_name" placeholder="Name"
                                        >
                                </fieldset>
                                @error('product_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <fieldset  class="mb-3">
                                    <label for=""a>Name</label>
                                    <input name="product_price" type="number" value="{{ $product->price }}" id="product_price" max="10000"
                                        placeholder="Price" required="">
                                        <small class="bg-success p-1 text-white  mr-1">The Price Will be By The Doller </small>
                                        <small class="bg-success p-1 bg-warning text-danger w-100">Max Price is 10K</small>
                                </fieldset>
                                @error('product_price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <fieldset class="mb-3">

                                        <select name="product_category" id="" class="w-100 p-2">
                                            <option value="" disabled>Select Category</option>

                                            @forelse ($categories as $cat)
                                            @if ($cat->id == $category['id'])
                                                <option value="{{ $category['id'] }}"selected >{{ Str::ucfirst($category['name']) }}</option>
                                                @continue
                                            @endif
                                                <option value="{{ $cat->id }}">{{ Str::ucfirst($cat->name) }}</option>
                                            @empty

                                            @endforelse
                                        </select>
                                </fieldset>
                                @error('product_category')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <fieldset class="mb-3">
                                    <textarea name="product_description"  placeholder="Description" id="product_description" cols="30" rows="10" class="textarea-detail">{{ $product->description }}</textarea>
                                </fieldset>
                                @error('product_description')
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
