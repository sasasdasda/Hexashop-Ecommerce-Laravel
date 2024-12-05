<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use Illuminate\Http\Request;
use App\Models\Product;
use Symfony\Component\Uid\Uuid;
use App\Http\Requests\Api\Product\ProductRequest;
use Mockery\Generator\Method;

class ProductController extends Controller
{
    use ApiResponseTrait;

    public function index(){
        $product =  Product::get();
        $data =  ProductResource::collection($product);
        $status = 'ok';
        if($data){
        return $this->apiResponse($data,$status,200);

        }
        return $this->apiResponse($data,$status,200);
    }
    public function show($id){

        $product = Product::find($id);
        $status = 200;
        $msg['status'] = 'not found';
        if($product){
            $data =  ProductResource::collection($product);
            $msg['status'] = 'find';

            return $this->apiResponse($data,$msg,200);
        }
        return $this->apiResponse($product,$msg,$status);

    }

    public function store(ProductRequest $request){
        // Validator::make()
        // $validat = $request->validate([
        //     'name'          =>  'required|min:6|max:50',
        //     'user_id'       =>  'required|numeric',
        //     'image'         =>  'required',
        //     'category_id'   =>  'required|numeric',
        //     'price'         =>  'required|numeric',
        //     'approce'       =>  'required|numeric',
        //     'uuid'          =>  'required|uuid',
        // ]);


        // $validator = Validator::make($request->all(),[
        //     'name'          =>  'required|min:6|max:50',
        //     'user_id'       =>  'required|numeric',
        //     'image'         =>  'required',
        //     'category_id'   =>  'required|numeric',
        //     'price'         =>  'required|numeric',
        //     'approce'       =>  'required|numeric',
        //     'uuid'          =>  'required|uuid',
        // ]);
        // ProductRequest
        $product = Product::create([
            'name'=>$request->name,
            'user_id'=>$request->user_id,
            'image'=>$request->image,
            'category_id'=>$request->category_id,
            'price'=>$request->price,
            'approve'=>$request->approve,
            'description'=>$request->description,
            'uuid'=>Uuid::v4(),
        ]);
        // return ;
        if($product){
            // $data =  ProductResource::collection($product);
            return $request;
            // return $this->apiResponse($product,'ok',201);
        }
        return $request;

            // return $this->apiResponse(null,'not save',400);
    }
    public function update(Request $request,$id){
        $product = Product::find($id);
        return $product->update($request->all());
    }
    public function destroy($id){
        $product  = Product::find($id);
        return Product::destroy($id);
    }
}
