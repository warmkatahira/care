<?php

use Illuminate\Support\Facades\Route;
// +-+-+-+-+-+-+-+- 受注 +-+-+-+-+-+-+-+-
use App\Http\Controllers\Order\OrderMgtController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆ Top ★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆
    // -+-+-+-+-+-+-+-+-+-+-+-+ TOP -+-+-+-+-+-+-+-+-+-+-+-+
    Route::controller(TopController::class)->prefix('top')->name('top.')->group(function(){
        Route::get('', 'index')->name('index');
    });

Route::get('/', function () {
    return view('welcome');
});
