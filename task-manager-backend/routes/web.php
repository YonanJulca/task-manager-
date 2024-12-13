<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\PayPalController;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
|
| Here you can register the web routes for your application.
|
*/

// Route for the homepage
Route::get('/', function () {
    return view('welcome');
});

// Route to get the CSRF token for Sanctum
Route::get('/sanctum/csrf-cookie', function () {
    return response()->json(['status' => 'CSRF token set']);
});

// Authentication routes
// Show the login form
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
// Process login requests
Route::post('login', [AuthController::class, 'login']);
// Process logout requests
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Protected routes for tasks in the web interface
// Routes require authentication
Route::middleware('auth')->group(function () {
    // Resource controller for tasks with route names
    Route::resource('tasks', TaskController::class)->names([
        'index' => 'web.tasks.index',
        'create' => 'web.tasks.create',
        'store' => 'web.tasks.store',
        'show' => 'web.tasks.show',
        'edit' => 'web.tasks.edit',
        'update' => 'web.tasks.update',
        'destroy' => 'web.tasks.destroy',
    ]);
});

// PayPal routes
// Create a payment and redirect to PayPal
Route::get('paypal/payment', [PayPalController::class, 'createPayment'])->name('paypal.payment');
// Handle successful payment and redirect to a success page
Route::get('paypal/success', [PayPalController::class, 'paymentSuccess'])->name('paypal.success');
// Handle canceled payment and redirect to a cancellation page
Route::get('paypal/cancel', [PayPalController::class, 'paymentCancel'])->name('paypal.cancel');
