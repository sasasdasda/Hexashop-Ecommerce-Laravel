<?php

return [
    'vendor_id' => env('PADDLE_VENDOR_ID', '23942'),
    'vendor_auth_code' => env('PADDLE_API_KEY', '0570fca86eea5cc64eba88d73868123496299e3c5251235396'),
    'public_key' => env('PADDLE_CLIENT_SIDE_TOKEN', 'test_48b1e66161444e9232976dd8f92'),
    'environment' => env('PADDLE_ENVIRONMENT', 'sandbox'), // or 'live'
    'currency' => env('CASHIER_CURRENCY_LOCALE', 'USD'),
];
