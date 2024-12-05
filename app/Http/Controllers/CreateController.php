<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\CreateProductRequest;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\Todo;
use App\Http\Requests\TodoRequest;
use App\Models\ProductImage2;

class CreateController extends Controller
{
    // This Function For Create User To Blog & Shop
    public function create_user(AdminRequest $request)
    {
        if ($request->password2 === $request->password1) {
            User::create([
                'name' => $request->name,
                // 'username' => $request->username,
                'firstname'=>$request->firstname,
                'lastname'=>$request->lastname,
                'email' => $request->email,
                'password' => $request->password2,
                'uuid'=>uuid_create(1),
            ]);
            return redirect()->route('dashboard');
        } else {
            return redirect()->to('admin/dashboard')->withErrors('errorss', 'password');
        }

        return redirect()->to('admin/dashboard');
    }
    // This Function For Create Category To Both Blog & Shop
    public function create_category(CreateCategoryRequest $request)
    {
        Category::create([
            'name' => $request->title,
            'description' => $request->description,
            'uuid'=>uuid_create(1),
        ]);
        return redirect()->route('dashboard');
    }
    // This Function For Create Post To The Blog Website
    public function create_post(CreatePostRequest $request)
    {
        Post::create([
            'title' => $request->post_title,
            'category_id' => $request->select_category,
            'body' => $request->post_body,
        ]);
        return redirect()->route('dashboard');
    }

    public function create_product(CreateProductRequest $request)
    {
        $img = $request->file('product_image')->getClientOriginalName();
        $path = $request->file('product_image')->storeAs('product',$img,'imgs');
        // product_image_2

        $new_product = Product::create([
            'name' => $request->product_name,
            'image' =>$path,
            'category_id' => intval($request->product_category),
            'user_id' => auth('admin')->user()->id,
            'description' => $request->product_description,
            'price' => $request->product_price,
            'approve'=> 0,
            'uuid'=>uuid_create(1),
        ]);
        // Insert Image_2 In Database
        $img_2 = $request->file('product_image_2')->getClientOriginalName();
        $path_2 = $request->file('product_image_2')->storeAs('product',$img_2,'imgs');
        $product_img_2 = ProductImage2::create([
            'image'=>$path_2,
            'product_id'=>$new_product->id,
        ]);
        // return uuid_create(1);
        // return $request;
        return redirect()->back()->with(['success','Product Created Successfully !']);

    }
    public function create_todo(TodoRequest $request)
    {
        $todo = Todo::create([
            'name' => $request->tod,
        ]);
        return redirect()->route('dashboard');
    }
}
