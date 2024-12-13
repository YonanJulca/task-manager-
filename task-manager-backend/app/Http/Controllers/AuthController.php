<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Display the login form view
    public function showLoginForm()
    {
        // Returns the view for the login form
        return view('auth.login');
    }

    // Handle the login process
    public function login(Request $request)
    {
        // Retrieve the email and password from the request
        $credentials = $request->only('email', 'password');

        // Attempt to log in using the provided credentials
        if (Auth::attempt($credentials)) {
            // If authentication is successful, return a JSON response with a personal access token
            return response()->json(['token' => Auth::user()->createToken('Personal Access Token')->plainTextToken]);
        }

        // If authentication fails, return an error response with status code 401 (Unauthorized)
        return response()->json(['error' => 'Invalid credentials'], 401);
    }

    // Handle the logout process
    public function logout(Request $request)
    {
        // Retrieve the authenticated user
        $user = Auth::user();
        
        // Revoke all tokens associated with the user (log the user out from all sessions)
        $user->tokens()->delete();

        // Return a success message after logout
        return response()->json(['message' => 'Logged out successfully']);
    }

    // Handle payment confirmation and upgrading the user to premium
    public function confirmPayment(Request $request)
    {
        // Get the authenticated user's ID
        $userId = $request->user()->id;

        // Retrieve payment details from the request (this should be validated and processed)
        $paymentDetails = $request->input('paymentDetails');

        // Find the user by their ID and update the `is_premium` status to true
        $user = User::find($userId);
        $user->is_premium = true;
        $user->save();

        // Return a success response indicating the user is now premium
        return response()->json(['status' => 'success']);
    }
}
