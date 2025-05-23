<?php

use App\Http\Controllers\SocialHandleController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// google login
Route::get('/login/google/', [SocialHandleController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [SocialHandleController::class, 'handleGoogleCallback'])->name('login.google.callback');

// password-change
Route::get('/change-password', function () {
    return view('auth.change-password');
})->middleware('auth')->name('password.change');


Route::get('/email/verify', function () {
    return view('auth.verify-email'); // create this blade view
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');  // or wherever you want to redirect after verification
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('home');
})->middleware(['auth']);


