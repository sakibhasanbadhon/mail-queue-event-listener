<?php

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueueController;

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
    return view('welcome');
});


Route::get('/email',function() {
    Mail::to('badhonkhan2033@gmail.com')->send(new WelcomeMail);
    return view('welcomeMail');
});


// nhd3456555@gmail.com
// mdsabbirrahmanm740@gmail.com


Route::get('queue', [QueueController::class, 'queue']);

Route::post('queue/store', [QueueController::class, 'queueStore'])->name('queue.store');


