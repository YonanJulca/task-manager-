<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal;

class PayPalController extends Controller
{
    // Constructor to initialize the PayPal service
    public function __construct()
    {
        // Instantiate the PayPal service
        $this->paypal = new PayPal();
    }

    // Create a PayPal payment and redirect the user to the PayPal approval URL
    public function createPayment(Request $request)
    {
        // Create the payment with the required parameters (amount, currency, return and cancel URLs)
        $payment = $this->paypal->createPayment([
            'amount' => $request->amount,    // Amount of the payment
            'currency' => 'USD',             // Currency used for the payment
            'return_url' => route('paypal.success'), // URL to redirect after a successful payment
            'cancel_url' => route('paypal.cancel'),  // URL to redirect if the payment is canceled
        ]);

        // Redirect the user to the PayPal payment approval page
        return redirect($payment['paypal_link']);
    }

    // Handle PayPal's success response after payment approval
    public function paymentSuccess(Request $request)
    {
        // Retrieve payment details from the request (paymentId and PayerID)
        $paymentId = $request->paymentId;
        $payerId = $request->PayerID;

        // Execute the payment with the PayPal service
        $payment = $this->paypal->executePayment($paymentId, $payerId);

        // Check if the payment was approved
        if ($payment['state'] == 'approved') {
            // Payment was successful, redirect to home page with a success message
            return redirect()->route('home')->with('success', 'Payment successful!');
        } else {
            // Payment failed, redirect to home page with an error message
            return redirect()->route('home')->with('error', 'Payment failed!');
        }
    }

    // Handle the payment cancellation by the user
    public function paymentCancel()
    {
        // Redirect to home page with a payment cancellation message
        return redirect()->route('home')->with('error', 'Payment cancelled!');
    }
}
