<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\Product;


class DeleteController extends Controller
{
    public function delete_todo($id)
    {
        if(isset($id) && is_numeric($id)){
            $todo = Todo::find($id);
            if($todo->delete()){
                return redirect()->back()->with(['success'=>'Todo Deleted']);
            }
        }
        if(!$id){
            return redirect()->back()->with(['error'=>'Sorry There\'s Wrong! Retry']);
        }
        return 'Controller';
    }
    public function delete_product($id){
        if(isset($id) && is_numeric($id)){
            $product = Product::find($id);
            if($product->delete()){
                return redirect()->route('products')->with(['success'=>'Product Deleted Successfully']);
            }
        }
        return $id;
    }
}
