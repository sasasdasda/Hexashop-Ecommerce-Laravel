<?php
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
if(!function_exists('check_confirm')){
    function check_confirm($confirm,$value)
    {
        if(!empty($confirm) && !empty($confirm->$value)){
            return $confirm->$value;
        }
        return "Not Confirmed";
    }
}

if(!function_exists('profile_image')){
    function profile_image(string $id = null){
        if(Auth::check() or !$id){
            // $user = User::find(auth()->user()->id)->user_details;
            $user = $id ? User::find($id)->user_details : User::find(auth()->user()->id)->user_details;
            return $user->profile_image ? asset('images/'.$user->profile_image) : asset('assets/admin/img/person1.jpg') ;
        }
    }
}

if(!function_exists('category')){
    function category(){
        return $category = Category::get();
    }
}

if(!function_exists('user_cart')){
    function user_cart(){
        $userid = auth()->user()->id;
        return User::find($userid)->cart->where('paid',0);
    }
}
