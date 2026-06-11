<?php

namespace App\Http\Controllers\payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return view('payment.checkout');
    }
    
    public function payment_success()
    {
        return view('payment.payment-success');
    }
    public function payment_failed()
    {
        return view('payment.payment-failed');
    }
}
