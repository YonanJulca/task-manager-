<?php

// app/Http/Controllers/PremiumController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PremiumController extends Controller
{
    // Method to activate premium features for the user
    public function activate(Request $request)
    {
        // Get the authenticated user
        $user = Auth::user();

        // Get the payment ID from the request (if needed for validation)
        $paymentId = $request->input('paymentId');

        // Logic to activate premium features for the user
        // You can add logic here to validate the paymentId if needed,
        // like verifying the payment with an external service or checking in the database.

        // Mark the user as premium
        $user->is_premium = true;
        $user->save();

        // Return a successful response in JSON format
        return response()->json(['message' => 'Premium features activated successfully'], 200);
    }
}
