<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{






    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // The Index Page Of Product
        $products = Product::select('*')->get();//Select All Product
        $product_count = $products->count();
        //Index Page In Admin Panel
        return view('admin.products', compact('products','product_count'));
        // return view('admin.products');
    }
    public function ss(){
        return "seif";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function details($id)
    {
        //Function To Get One Product
        $product = Product::find($id);
        return view('admin.product_details', compact('product'));
    }
    public function postDetails($id)
    {
        $post = Post::find($id);
        return view('admin.details', compact('post'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $products = Product::where('uuid',$id)->limit(1)->get();
        foreach($products as $p)

        $find = Product::find($p->id);
        DB::table('users')->where('uuid',$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $products = Product::where('uuid',$id)->limit(1)->get();
        foreach($products as $p)

        $find = Product::find($p->id);

        $image_1 = 'images/'.$find->image;
        $image_2 = 'images/'.$find->image2->image;
        if(File::exists($image_1) && File::exists($image_2)){
            File::delete($image_1);
            File::delete($image_2);
        }
        $find->delete();

        if($find){


            return redirect()->back();
        }
        return redirect()->back();
    }


}
