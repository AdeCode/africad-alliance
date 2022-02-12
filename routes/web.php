<?php

use App\Http\Controllers\WaitlistController;
use Illuminate\Support\Facades\Route;

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
    return view('waitlist');
});

Route::get('/mail', function () {
    return view('mails.waitlist');
});



Route::get('/waitlist', [WaitlistController::class,'showWaitlist']);
Route::post('/saveWaitlist', [WaitlistController::class,'saveWaitlist'])->name('saveWaitlist');
