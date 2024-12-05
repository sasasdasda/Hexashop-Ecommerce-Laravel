<?php

namespace App\Http\Controllers;

use App\Models\MyFatoorahPayment;
use Laravel\Paddle\Checkout;
use Illuminate\Http\Request;
use Laravel\Paddle\Subscription;
use App\Models\User;
use GuzzleHttp\Client;
use Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory;

class PaymentsController extends Controller
{
    public function buy(Request $request)
    {

        $client = new Client();
        $response = $client->request('GET', 'https://demo.MyFatoorah.com/KWT/le/050424223190946');

        // Get the response body
        $body = $response->getBody();
        return $body;
    }
    // public function pay(){
    //     return view('store',[
    //         'payLink' => auth()->user()->charge(12.99,'Action Figure')
    //     ]);
    // }
    // {
        public function pay(Request $request)
        {
            $data = [
                "CustomerName"=>'Seif Mohammed',
                "InvoiceValue"=>'100',
                "NotificationOption"=>'LNK',
                "CustomerEmail"=>'ahmed.emam.dev@gmail.com',
                "CallBackUrl"=> route('callback'),
                "ErrorUrl"=>route('error.payment'),
            ];
            $client = new Client();

            $response = $client->request('POST', 'https://apitest.myfatoorah.com/v2/SendPayment', [
                'headers' => [
                    // 'authorization' =>'Bearer '.env('MYFATOORAH_API_KEY'),
                    'Authorization' => 'Bearer ' . env('MYFATOORAH_API_KEY'),
                    'Content-Type' => 'application/json',
                ],
                'json' => $data
            ]);
            return $response;
            // return view('store',compact('response'));
        }
        function myFatoorahCallback(Request $request){
            $order = MyFatoorahPayment::firstOrCreate([
                'user_id'=>auth()->user()->id,
                'payment_id'=>$request->paymentId
            ]);
            return view('successPayment');

        }

        function paystatus(){
            $client = new Client();
            $data = [
                "Key"=>  "100430210000000268",
                "KeyType"=>  "paymentId",
                // 'SS'=>'SS',
            ];
            $response = $client->request('POST', 'https://apitest.myfatoorah.com/v2/getPaymentStatus', [
                'headers' => [
                    // 'authorization' =>'Bearer '.env('MYFATOORAH_API_KEY'),
                    'Authorization' => 'Bearer ' . env('MYFATOORAH_API_KEY'),
                    'Content-Type' => 'application/json',
                ],
                'json' => $data,
                // "name"=> "100430210000000234",
                // "Key"=>  "100430210000000234",
                // "KeyType"=>  "InvoiceId",
            ]);
            return $response;
        }
}
