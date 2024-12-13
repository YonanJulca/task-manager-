<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PremiumController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

// Routes that require authentication via Sanctum middleware
Route::middleware('auth:sanctum')->group(function () {

    Route::put('/tasks/{task}', [TaskController::class, 'update']);
    // Retrieve all tasks
    Route::get('/tasks', [TaskController::class, 'index']);

    // Create a new task
    Route::post('/tasks', [TaskController::class, 'store']);


    // Delete a specific task by ID
    Route::delete('/tasks/{task}', [TaskController::class, 'destroy']);

    // Log out the current user and revoke their API tokens
    Route::post('/logout', [AuthController::class, 'logout']);

    // Activate premium features for the authenticated user
    Route::post('/activate-premium', [PremiumController::class, 'activate']);
});

// Login route for authenticating users
Route::post('/login', [AuthController::class, 'login']);

// Confirm PayPal payment and activate premium features
Route::post('/paypal/confirm', [AuthController::class, 'confirmPayment']);

// Handle PayPal webhook notifications
Route::post('/paypal-webhook', function (Request $request) {
    // Log the PayPal webhook notification data
    Log::info('Received PayPal Webhook:', $request->all());

    // Respond with success status
    return response()->json(['status' => 'success']);
});
