<?php

namespace App\Traits;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Mockery\Expectation;

trait MyFatoorahTrait
{
    function pay($price,$currency = 'usd'){
            $data = [
                "CustomerName"=>auth()->user()->firstname.' '.auth()->user()->lastname,
                "InvoiceValue"=>$price,
                "NotificationOption"=>'LNK',
                "DisplayCurrencyIso"=> $currency,
                "CustomerEmail"=>auth()->user()->email,
                "CallBackUrl"=> route('myfatoorah.callback'),
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
        return $response;
    }
}
