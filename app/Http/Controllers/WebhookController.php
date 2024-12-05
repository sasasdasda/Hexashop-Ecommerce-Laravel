<?php

use Illuminate\Http\Request;
use Laravel\Paddle\Http\Controllers\WebhookController as PaddleWebhookController;

class WebhookController extends PaddleWebhookController
{
    public function handle(Request $request)
    {
        // Handle webhook events
        return parent::handle($request);
    }
}
