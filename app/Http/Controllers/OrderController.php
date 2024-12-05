<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Models\User;
use App\Models\Order;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use App\Models\MyFatoorahPayment;
class OrderController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }
        // $order =
        $cart = Cart::where('paid',0)->where('user_id',auth()->user()->id)->sum('total_price');
        return $cart;
        // get the paid = 0 in cart
        // make paid equal the uuid of payment table
        // myfatoorah payment table make in it uuid
        //
        $user = User::find(auth()->user()->id);
        $details = $user->user_details;
        foreach($details as $details);
        // return $user->user_details;
        return view('checkout');
    }

    /**
     * Submit The Buy and pay
     * this function will redirect you to payment page 'myfatoorah or some thing else'
     * @var int
     * the var is the total price of the product in cart when paid equal 0 and auth user id
     */
    public function submit()
    {
        $cart = Cart::where('paid',0)->where('user_id',auth()->user()->id)->get();
        // Get Cart Data Where paid = 0 and the auth user id


        return $cart;
    }
    /**
     * back after pay to record the payment
     */
    //
    public function back(){
        // Create Record in payment Table
        // create uuid for payment table
        // insert userid in payment table
    }



    public function error_payment(Request $request){
        // paymentId
        $payment = MyFatoorahPayment::firstOrCreate([
            'user_id'=> auth()->user()->id,
            'payment_id'=>$request->paymentId,
        ]);
        return view('errorPayment');
    }





    public function pay(Request $request)
    {
        // Cart Total Price Customer Will Pay
        $cart = Cart::where('paid',0)->where('user_id',auth()->user()->id)->sum('total_price');

        $data = [
            "CustomerName"=>'Seif Mohammed',
            "InvoiceValue"=>$cart,
            "NotificationOption"=>'LNK',
            "CustomerEmail"=>'ahmed.emam.dev@gmail.com',
            "CallBackUrl"=> route('callback'),
            "ErrorUrl"=>route('error.payment'),
        ];
        $client = new Client();

        $response = $client->request('POST', 'https://apitest.myfatoorah.com/v2/SendPayment', [
            'headers' => [
                'Authorization' => 'Bearer ' . env('MYFATOORAH_API_KEY'),
                'Content-Type' => 'application/json',
            ],
            'json' => $data
        ]);
        $pay_details = json_decode( $response->getBody()->getContents(),true);
        $pay_link = $pay_details['Data']['InvoiceURL'];
        return view('store',compact('response'));
    }













    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderRequest $request)
    {

        $insert_order = Order::create([
            // 'product_id'    =>   0      ,
            // 'product_uuid'  =>   0      ,
            'user_id'       =>      auth()->user()->id ,
            'uuid'          =>      uuid_create() ,
            'notes'         =>      $request->notes          ,
            'address'       =>      'asd'    ,
            'towncity'      =>      'as'     ,
            'cart_total'    =>      user_cart()->sum('total_price') ,
            'postcode'      =>      '1234'   ,
            // 'quantity'      => 30       ,
        ]);
        // get cart product
        // return ;



        // $cart_products = Cart::where('order_id',0)->get();
        // foreach($cart_products as $cart_products);
        // $cart_products->update([
        //     'order_id'=>1
        // ]);



        // return $cart_products;
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }
        $user_order = Order::where('user_id',auth()->user()->id)->get();
        return view('users.orders',compact('user_order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
