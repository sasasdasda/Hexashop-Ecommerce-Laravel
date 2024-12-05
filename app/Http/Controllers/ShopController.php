<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Events\WellcomeUser;
use App\Models\UserDetails;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\EditAccountRequest;
use App\Http\Requests\LoginRequest;
use App\Models\LoginMail;
use App\Traits\MyFatoorahTrait;
use DeepCopy\Filter\Filter;

use Illuminate\Http\Response;

class ShopController extends Controller
{
    use MyFatoorahTrait;
    public function home()
    {
        $pro = Category::where('name','kids')->get();
        foreach($pro as $pro);
        $kids = $pro->count() ? Product::where('category_id',$pro->id)->get() : [] ;

        $me = Category::where('name','mens')->get();
        foreach($me as $me);
        $men = $me->count() ? Product::where('category_id', $me->id)->get() : [] ;
        // The Product In Womens Category
        $wom = Category::where('name','womens')->get();
        foreach($wom as $wom);
        $women = $wom->count() ? Product::where('category_id', $wom->id)->get() : [] ;

        $all_product = Product::get()->count();
        if(Auth::check()){
            $user_detail = UserDetails::where('user_id',auth()->user()->id)->get();
        }
        // $kids = [];
        // return $pro;
        // return $products;
        return view('index', compact(['men', 'women', 'kids','all_product']));
    }

    public function page($name)
    {

        // $cat = Product::where('category');
        return view('products');
    }

    public function login()
    {
        if(Auth::check()){
            return redirect()->back();
        }
        return view('users.login');
    }
    public function login_submit(LoginRequest $request)
    {
        // $request->validate([
        //     'email' => 'required|string',
        //     'password' => 'required|string'
        // ]);
        $credentials = $request->only('email', 'password');
        $user_verify = User::where('email',$request->email)->where('password',$request->password)->get();
        // return $user_verify;
        // if($user_verify->email_verified_at){
            if (Auth::attempt($credentials)) {
                if(!auth()->user()->user_details){
                    UserDetails::create([
                        'user_id'   =>  auth()->user()->id,
                    ]);
                }
                return redirect()->route('home');
            }
        // }

        $error = 'Login Detail Are Not Valid Please Retry!';
        return redirect()->back()->with('error',$error);
        // return route('');
    }

    public function user_details(){
        $user_detail = User::find(auth()->user()->id)->user_details()->first();
        if(!Auth::check()){
            return redirect()->route('home');
        }
        // return $user_detail;
        return view('users.user_details',compact('user_detail'));
    }
    public function user_details_submit(EditAccountRequest $request){
        // Update First Name And Last Name
        $user_id = Auth::user()->id;

        $img = $request->file('profile_image')->getClientOriginalName();
        $path = $request->file('profile_image')->storeAs('profile',$img,'imgs');

        $user= UserDetails::where('user_id',$user_id);
        $user->update([
            'firstname'         =>  $request->firstname,
            'lastname'          =>  $request->lastname,
            'country'           =>  $request->country,
            'email_work'        =>  $request->email,
            'about'             =>  $request->about,
            'store_location'    =>  $request->store_location,
            'profile_image'     =>  $path,
            // 'user_id'           =>  $user_id,
        ]);
        return redirect()->back();



        return redirect()->route('profile');
    }
    public function addtocart($quantity,$id){
        $findProduct = Product::where('uuid',$id)->first();
        // foreach($findProduct as $findProduct);

        $userid = auth()->user()->id;
        if($findProduct && $userid !== $findProduct->user_id && is_numeric($quantity)){
            $add_to_cart = Cart::create([
                'quantity'      =>  $quantity,
                'vendor_id'     =>  $findProduct->user_id ,
                'product_id'    =>  $id,
                'user_id'       =>  $userid,
                'total_price'   =>  $findProduct->price * $quantity,
            ]);
        }else{
            return redirect()->back()->with([
                "denied" =>  "You Can't Buy Your Product !",
                "age"    =>  "40",
            ]);
        }
        return $findProduct;
        return $userid;
    }
    public function cart(){

        // Theres Bug Here
        // Error When The User Deosn't Have Any Product in Cart and you Open The Cart Page
        $carts = [];
        foreach(user_cart() as $cart_user){

            $carts[] = Product::where('uuid',$cart_user->product_id)->get();

        }
        // return $carts;
        if(!Auth::check()){

            return redirect()->route('login');

        }

        // Cart Total Price Customer Will Pay
        $cart = Cart::where('paid',0)->where('user_id',auth()->user()->id)->sum('total_price') ?? false;
        $pay_link = false;
        if($cart == true){

            $pay = $this->pay($cart);

            $pay_details = json_decode( $pay->getBody()->getContents(),true);

            $pay_link = $pay_details['Data']['InvoiceURL'] ?? '#';

        }
        return view('users.cart',compact('carts','pay_link'));
    }
    public function checkout(){
        return view('checkout');
    }
    public function signup()
    {
        if(Auth::check()){
            return redirect()->route('home');
        }
        // Session::flush();

        return view('users.signup');
    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('home');
    }
    public function signup_submit(UserRequest $request)
    {



        $user = User::create(
            [
                'name' => $request->username,
                'email' => $request->email,
                'password' => $request->confirmPassword,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'uuid'=> uuid_create(),
            ]
        );
        if($user){
            $user = UserDetails::firstOrCreate([
                    'user_id'   =>  $user->id,
                    'profile_image'   => 'person1.png',
            ]);
        }

        return redirect()->route('verfication.login.email.send',$request->email);
    }

    public function user_product(){
        return view('users.product');
    }


    public function profile()
    {
        if(!Auth::check()){
            return redirect()->route('home');
        }
        $user_detail = User::find(auth()->user()->id)->user_details()->first();
        $user =  User::find(auth()->user()->id);
        $user_products = Product::select('*')->where('user_id',auth()->user()->id)->limit(3)->get();
        $user_products_count = Product::select('*')->where('user_id',auth()->user()->id)->count();
        return view('users.profile',compact('user_detail','user_products','user','user_products_count'));
    }



    public function category_products($name){
        $cat = Category::where('name',$name)->get();
        if($cat->count()){
            foreach($cat as $cat);
            $products = Product::where('category_id',$cat->id)->get();
            return view('cat-products',compact('cat','products'));
        }
        return redirect()->back()->with(['error',"There's Was an Error Please Try Again."]);
    }


    public function contact()
    {
        if(!Auth::check()){
            return redirect()->route('home');
        }
        return view('contact');
    }
    public function user_profile($id){
        $user = User::where('uuid',$id)->get();

        if($user->count()){
            foreach($user as $user);
            $user_detail = User::find($user->id)->user_details()->first();
            if($user->id == auth()->user()->id){
                return redirect()->route('profile');
            }
            return view('users.user_profile',compact('user','user_detail'));
        }
        return redirect()->back();
    }
    public function notification(){
        return 'notification';
    }
    public function about()
    {
        return view('about');
    }
}
