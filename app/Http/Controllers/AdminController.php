<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Todo;
use App\Http\Requests\ResultRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\WebsiteSetting;
use App\Models\Admin;
use App\Models\Notification;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        // return $this->middleware('AdminCheck');

        return $this->middleware('auth:admin')->except(['login','login_submit']);
    }

    public function login()
    {
        // if(!Auth::guard('admin')->check()){
            // return redirect()->route('dashboard');
            // return 1;
            // return redirect()->back()->with(['field'=>'Please Try Login Again.']);
            // return view('admin.login');
            // return 'Field';
        // }
        return view('admin.login');
        // return 'Success';
    }

    public function login_submit(Request $request){

        $admin = $request->only(['email','password']);
        Auth::guard('admin')->attempt($admin);
        if( Auth::guard('admin')->check() ){
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('admin_login');
        }
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('admin_login');
    }

    public function index($id = 4)
    {
        // ---------------------------------
        // Index Page 'Dashboard'
        // Route 'Admin/Dashboard' This is The Main Page
        // ---------------------------------
        // This Data For View In Page
        // ---------------------------------
        // ---------------------------------
        $products = Product::select('*')->limit(4)->get();
        $posts = Post::select('*')->limit(4)->get();
        //Index Page In Admin Panel
        $all_product = Product::count();
        $all_posts = Post::count();
        $all_users = User::count();
        $all_comments = Comment::count();
        // $blog_comment = Comment::select('*')->where('type', 'blog')->get();
        // $shop_comment = Comment::select('*')->where('type', 'shop')->limit(3)->get();
        // ---------------------------------
        // ---------------------------------

        // Todo Result
        // Get Result Num
        if (isset($id) && is_numeric($id)) {
            $res = $id;
        } else {
            $res = 3;
        }
        // $todos = Todo::limit($res)->get();
        // The Variables Will Be Transform To View
        $var = [
            'all_product',
            'all_posts',
            'all_users',
            'products',
            'posts',
            'all_product',
            'all_comments',
            'res',
        ];

        return view('admin.index', compact($var));
    }

    public function comments()
    {
        // --Start Comment Count--
        $all_comments = Comment::count();
        $shop_comment_count = Comment::where('type', 'blog')->count();
        $blog_comment_count = Comment::where('type', 'blog')->count();
        // --End Comment Count--
        $comments = 10;
        $blog_comment = Comment::select('*')->where('type', 'blog')->get();
        $shop_comment = Comment::select('*')->where('type', 'shop')->limit(3)->get();
        $var = [
            'all_comments',
            'shop_comment_count',
            'blog_comment_count',
        ];
        return view('admin.comments', compact($var));
    }

    public function users()
    {
        // --------------------------
        // Users Page In Admin Panel
        // --------------------------
        $users = User::get();
        $users->makeHidden(['updated_at', 'email_verified_at', 'id']);
        return view('admin.users', compact('users'));
    }

    public function result(ResultRequest $request)
    {
        // $request->result;
        return redirect()->route('dashboard', $request->result);
    }
    public function get_user_details($id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.user_details', compact('user'));
    }
    public function notification(){
        $notification = Notification::where('see',0)->get();
        // return $notification;
        return view('admin.notification',compact('notification'));
    }
    public function edit_site(){
        $website_name = WebsiteSetting::where('key','website_name')->first();
        $phone_number = WebsiteSetting::where('key','phone_number')->first();
        // return $website_name;
        return view('admin.edit_site', [
            'website_name' => $website_name,
            'phone_number' => $phone_number,
        ] );
    }
}
