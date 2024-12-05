<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage2;
use Illuminate\Support\Facades\File;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();
        return view('products', compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('products.add-product',compact('categories'));
    }
    public function ss(){
        // return 1;
        $categories = Category::get();

        return view('products.add-product',compact('categories'));

    }

    // public function page($name)
    // {

    //     // $cat = Product::where('category');
    //     return view('products');
    // }

    public function your_products(){
        $user = User::find(auth()->user()->id);
        $products = $user->product;
        $count = $user->product()->count();
        // return $products;
        return view('users.product',compact('products','count'));
    }
    public function single_product($id)
    {
        $product = null;
        // check is the is is exist in URI
        if(isset($id)){
            $product = Product::where('uuid',$id)->get();
            // Check if the id is exist in database
            if($product->count()){
                foreach($product as $pro);
                $user = $pro->user;
                $image = $pro->image2;
                return view('single-product',compact('product','user','image'));
            }
            return redirect()->back()->with(['error',"Something Error Try again."]);
        }
    }
    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $product = Product::where('uuid',$id)->first();
        return view('products.edit');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $product = DB::table('products')->where('uuid',$id)->limit(1)->first();
        $category = Category::where('id',$product->category_id)->first()->only(['name',"id"]);
        $categories = Category::get();
        $productImage = ProductImage2::where('product_id',$product->id)->first()->image;
        // Str::ucfirst($string);

        // return $product->image;
        return view('products.edit',compact('product','category','categories','productImage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $img = $request->file('product_image')->getClientOriginalName();
        $path = $request->file('product_image')->storeAs('product',$img,'imgs');

        // product_image_2
        $img_2 = $request->file('product_image_2')->getClientOriginalName();
        $path_2 = $request->file('product_image_2')->storeAs('product',$img,'imgs');

        $product = Product::where('uuid',$id)->first();
        $product_image_2 = ProductImage2::where('product_id',$product->id)->first();

        // Get Images And Delete It Before Update
        $image_1 = 'images/'.$product->image;
        $image_2 = 'images/'.$product->image2->image;

        if(File::exists($image_1) && File::exists($image_2)){
            File::delete($image_1);
            File::delete($image_2);
        }

        $product = $product->update([
            'name'=>$request->product_name,
            'category_id'=>$request->product_category,
            'image'=>$path,
            'price'=>$request->product_price,
            'description'=>$request->product_description,
        ]);
        $product_image_2->update([
            'image'=>$path_2,
        ]);
        return $product;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::where('uuid',$id)->limit(1)->first();
        // foreach($products as $p)

        $find = Product::find($product->id);

        $image_1 = 'images/'.$find->image;
        $image_2 = 'images/'.$find->image2->image;
        if(File::exists($image_1) && File::exists($image_2)){
            File::delete($image_1);
            File::delete($image_2);
        }
        $find->delete();

        if($find){


            return redirect()->back()->with(['success'=>'Product Was Deleted Successfully.']);
        }
        return redirect()->back();
    }
}
