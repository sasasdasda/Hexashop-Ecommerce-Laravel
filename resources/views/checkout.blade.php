@extends('layout.layout')
@section('content')

    <!-- ***** Product Area Starts ***** -->
    <section class="section" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="left-images">
                        <div class="d-flex justify-content-center mt-2s align-items-center">
                            <form action="{{ route('checkout.submit') }}" method="post" class="w-100 p-3">
                                @csrf
                                {{-- @method('post') --}}
                                <h3 class="mb-2">User Details</h3>
                                <div class="form-group w-100">
                                    <div class=" d-flex justify-content-between flex-grow-1">
                                        <!-- <div class=""> -->
                                        <div class="flex-grow-1 mr-1">
                                            <input type="text" name="firstname_details" id="" class="w-100 border-black pt-2 pr-2 pb-2 pl-2"
                                                placeholder="First Name" value="" required>
                                            @error('firstname_details')
                                                <div class="mt-2 rounded p-2 pl-4 alert-danger mr-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <!-- </div> -->
                                        <!-- <div class=""> -->
                                        <div class="flex-grow-1 ml-1">
                                            <input type="text" name="lastname_details" id="" class="w-100  border-black pt-2 pr-2 pb-2 pl-2"
                                                placeholder="Last Name" required>
                                            @error('lastname_details')
                                                <div class="mt-2 rounded p-2 pl-4 alert-danger ml-1">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- </div> -->
                                    </div>



                                    <input type="text" name="address" id="address" class="w-100 mt-3 border-black pt-2 pr-2 pb-2 pl-2"
                                        placeholder="Address" required>
                                    @error('address')
                                        <div class="mt-2 rounded p-2 pl-4 alert-danger mr-1">{{ $message }}</div>
                                    @enderror

                                    <input type="text" name="twoncity" id="" class="w-100 mt-3 border-black pt-2 pr-2 pb-2 pl-2"
                                        placeholder="Town/City" required>
                                    @error('twoncity')
                                        <div class="mt-2 rounded p-2 pl-4 alert-danger mr-1">{{ $message }}</div>
                                    @enderror

                                    <input type="text" name="country" id="" class="w-100 mt-3 border-black pt-2 pr-2 pb-2 pl-2"
                                        placeholder="Country" required>
                                    @error('country')
                                        <div class="mt-2 rounded p-2 pl-4 alert-danger mr-1">{{ $message }}</div>
                                    @enderror

                                    <input type="text" name="postcode" id=""
                                        class="w-100 mt-3 border-black pt-2 pr-2 pb-2 pl-2" placeholder="Postcode/Zip" required>
                                    @error('postcode')
                                        <div class="mt-2 rounded p-2 pl-4 alert-danger mr-1">{{ $message }}</div>
                                    @enderror

                                    <input type="email" name="emailaddress" id=""
                                    class="w-100 mt-3 border-black pt-2 pr-2 pb-2 pl-2" placeholder="Email Address" required>
                                    @error('emailaddress')
                                        <div class="mt-2 rounded p-2 pl-4 alert-danger mr-1">{{ $message }}</div>
                                    @enderror
                                    @error('emailaddress')
                                    <div class="mt-2 rounded p-2 pl-4 alert-danger mr-1">{{ $message }}</div>
                                    @enderror
                                    <input type="text" name="mobile" id="" class="w-100 mt-3 border-black pt-2 pr-2 pb-2 pl-2"
                                    placeholder="Mobile" required>
                                    @error('mobile')
                                        <div class="mt-2 rounded p-2 pl-4 alert-danger mr-1">{{ $message }}</div>
                                    @enderror

                                    <textarea name="notes"  id="" cols="30" rows="10" placeholder="Order Notes (Optional)" class="w-100 mt-3 border-black pt-2 pr-2 pb-2 pl-2"></textarea>

                                    {{-- {{ $ss }} --}}
                                    @if (isset($ss))
                                        <div class="alert-info">{{ $ss }}</div>
                                    @endif
                                    @error('notes')
                                        <div class="mt-2 rounded p-2 pl-4 alert-danger mr-1">{{ $message }}</div>
                                    @enderror

                                    <input type="submit" value="Submit Details" class="get-started-button-reverse pt-1 pr-4 pb-1 pl-4 w-100  mt-3">

                                    </div>

                            </form>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">

                            <div class="right-content">

                                <h4 class="text-center my-4">Submit Cart</h4>
                                <span class="price mt-4">Total Product : 30</span>
                                <span class="price mt-4">Sub Total Price : $30</span>
                                <span class="price mt-4">Total Price By Shiping : $300</span>
                                <span class="price mt-4">Payment Method : Paddle | Stripe</span>

                                <span class="w-100"></span>
                                    <div class="">
                                        <i class="fa fa-quote-left"></i>
                                        {{-- <p>You Will Pay The Price Before Shiping.</p> --}}

                                    </div>
                                <h5><div class="alert alert-primary">You Will Pay $210.00 From Your Paddle Account</div></h5>
                                <div class="total">
                                    <button class="main-border-button-two border-none text-center mt-4" onclick="setData()">PLACE ORDER</button>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    function setData(){
        let firstname       = document.querySelector("[name = 'firstname']");
        let lastname        = document.querySelector("[name = 'lastname']");
        let address         = document.querySelector("[name = 'address']");
        let twoncity        = document.querySelector("[name = 'twoncity']");
        let country         = document.querySelector("[name = 'country']");
        let postcode        = document.querySelector("[name = 'postcode']");
        let emailaddress    = document.querySelector("[name = 'emailaddress']");
        let mobile          = document.querySelector("[name = 'mobile']");
        let notes           = document.querySelector("[name = 'notes']");
        // console.log(firstname.value);
        // console.log(lastname.value);
        // console.log(address.value);
        // console.log(twoncity.value);
        // console.log(country.value);
        // console.log(postcode.value);
        // console.log(emailaddress.value);
        // console.log(mobile.value);
        // console.log(notes.value);
        let arrData = [
            firstname.value,
            lastname.value,
            address.value,
            twoncity.value,
            country.value,
            postcode.value,
            emailaddress.value,
            mobile.value,
            notes.value,
        ];
        $.ajax({
            method: "POST",
            url: "{{ route('sss') }}",
            data: { firstname: "asdasda" },
            // data: { firstname: "asdasda" },
            success: function (one ,two, three){
                console.log(one)
                console.log(two)
                console.log(three)
            }
        });
        console.log('SetData');
    }
</script>
@stop
