<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('login', function(){
    return view('auth.login');
});

Route::get('register',[AuthController::class,'register']);
Route::post('register',[AuthController::class,'registerStore']);

Route::get('logout',[AuthController::class,'logout']);

Route::post('login',[AuthController::class,'authenticate']);
Route::get('guidelines', function(){
    return view('guidelines');
});

Route::get('sponsorship', function(){
    return view('sponsorship');
});

Route::middleware(['auth'])->group(function () {

    Route::post('contact',[DashboardController::class,'contact']);

    Route::get('home',[DashboardController::class,'main']);

    Route::get('applicants',[DashboardController::class,'applicants']);

    Route::get('applicant-upload',[DashboardController::class,'displayUploadAbstract']);
    Route::get('reupload',[DashboardController::class,'editAbstract']);
    Route::post('reupload',[DashboardController::class,'updateAbstract']);
    Route::post('applicant-upload',[DashboardController::class,'applicantStore']);
    // Route::post('applicant-upload',[AuthController::class,'applicantStore']);

    Route::get('applicant/document/{id}',[DashboardController::class,'document']);

    Route::get('payment-upload', function(){
        return view('dashboard.payment-upload');
    });

    Route::post('paymentsss',[PaymentController::class,'payment']);
    Route::get('paymentss',[PaymentController::class,'getPayments']);
    Route::get('payment/{applicantID}',[DashboardController::class,'payment']);
    Route::get('paymentConfirm/{id}',[PaymentController::class,'paymentConfirm']);

    Route::post('assign',[DashboardController::class,'assignReviewer']);

    Route::post('comment',[CommentController::class,'addComment']);

    Route::get('yourreviews',[DashboardController::class,'yourReviews']);

    Route::post('marks',[DashboardController::class,'markDocument']);

    Route::get('reviewers',[DashboardController::class,'reviewers']);
    Route::post('reviewers',[AuthController::class,'storeReviewer']);

});
