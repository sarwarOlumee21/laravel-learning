<?php

namespace App\Http\Controllers;

use App\Services\PaymentService;

// PaymentController.php

class PaymentController extends Controller
{
    public function __construct(
        protected PaymentService $payment
    ) {}

    public function index()
    {
        return $this->payment->pay();
    }
}