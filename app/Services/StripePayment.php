<?php

namespace App\Services;

use App\Contracts\PaymentGateway;

class StripePayment implements PaymentGateway
{
    public function pay()
    {
        return "Stripe";
    }
}