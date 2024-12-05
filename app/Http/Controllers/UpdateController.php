<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class UpdateController extends Controller
{
    public function update_product(Request $request, $id)
    {
        if (isset($id) && is_numeric($id) && $id > 0) {
            $product = Product::find($id);
            // return $request->category;
            // return $request;

            $req = [
                'name'          => $request->name,
                'category_id'   => $request->category,
                'price'         => $request->price,
                'user_id'       => $request->asd,
                'description'   => $request->body,
                'user_id'       => auth()->user()->id,
            ];

            if ($product->update($req)) {
                return redirect()->back()->with(['success' => 'Product Updated Successfully!']);
            } else {
                redirect()->back()->with(['fail' => 'Product Not Updated']);
            }
        }
        return redirect()->back();
    }
    public function approve_product($id)
    {
        if(isset($id) && is_numeric($id)){
            $deny = Product::find($id);
            $deny->update([
                'approve'=>1
            ]);
            return redirect()->back()->with(['success'=>'Product has ben Approved Successfully']);
        }

        return 'Approve Product';
    }

    public function deny_product($id)
    {
        if(isset($id) && is_numeric($id)){
            $deny = Product::find($id);
            $deny->update([
                'approve'=>0
            ]);
            return redirect()->back()->with(['success'=>'Product has ben Denied Successfully']);
        }
        return redirect()->back();
    }
}
