<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Meal\MealController;
use App\Http\Controllers\Meal\MealCreateController;
use App\Http\Controllers\Meal\MealDetailController;
use App\Http\Controllers\Weight\WeightController;
use App\Http\Controllers\Weight\WeightCreateController;
use App\Http\Controllers\Weight\WeightDetailController;
use App\Http\Controllers\Poo\PooController;
use App\Http\Controllers\Poo\PooCreateController;
use App\Http\Controllers\Poo\PooDetailController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆ ウェルカム ★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆
    // -+-+-+-+-+-+-+-+-+-+-+-+ ウェルカム -+-+-+-+-+-+-+-+-+-+-+-+
    Route::controller(WelcomeController::class)->prefix('welcome')->name('welcome.')->group(function(){
        Route::get('', 'index')->name('index');
    });
// ★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆ ごはん ★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆
    // -+-+-+-+-+-+-+-+-+-+-+-+ ごはんTop -+-+-+-+-+-+-+-+-+-+-+-+
    Route::controller(MealController::class)->prefix('meal')->name('meal.')->group(function(){
        Route::get('', 'index')->name('index');
    });
    // -+-+-+-+-+-+-+-+-+-+-+-+ ごはんとうろく -+-+-+-+-+-+-+-+-+-+-+-+
    Route::controller(MealCreateController::class)->prefix('meal_create')->name('meal_create.')->group(function(){
        Route::get('', 'index')->name('index');
        Route::post('create', 'create')->name('create');
    });
    // -+-+-+-+-+-+-+-+-+-+-+-+ ごはん確認 -+-+-+-+-+-+-+-+-+-+-+-+
    Route::controller(MealDetailController::class)->prefix('meal_detail')->name('meal_detail.')->group(function(){
        Route::get('', 'index')->name('index');
    });
// ★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆ たいじゅう ★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆
    // -+-+-+-+-+-+-+-+-+-+-+-+ たいじゅうTop -+-+-+-+-+-+-+-+-+-+-+-+
    Route::controller(WeightController::class)->prefix('weight')->name('weight.')->group(function(){
        Route::get('', 'index')->name('index');
    });
    // -+-+-+-+-+-+-+-+-+-+-+-+ たいじゅうとうろく -+-+-+-+-+-+-+-+-+-+-+-+
    Route::controller(WeightCreateController::class)->prefix('weight_create')->name('weight_create.')->group(function(){
        Route::get('', 'index')->name('index');
        Route::post('create', 'create')->name('create');
    });
    // -+-+-+-+-+-+-+-+-+-+-+-+ ごはん確認 -+-+-+-+-+-+-+-+-+-+-+-+
    Route::controller(WeightDetailController::class)->prefix('weight_detail')->name('weight_detail.')->group(function(){
        Route::get('', 'index')->name('index');
    });
// ★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆ うんち ★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆
    // -+-+-+-+-+-+-+-+-+-+-+-+ うんちTop -+-+-+-+-+-+-+-+-+-+-+-+
    Route::controller(PooController::class)->prefix('poo')->name('poo.')->group(function(){
        Route::get('', 'index')->name('index');
    });
    // -+-+-+-+-+-+-+-+-+-+-+-+ うんちとうろく -+-+-+-+-+-+-+-+-+-+-+-+
    Route::controller(PooCreateController::class)->prefix('poo_create')->name('poo_create.')->group(function(){
        Route::get('', 'index')->name('index');
        Route::post('create', 'create')->name('create');
    });
    // -+-+-+-+-+-+-+-+-+-+-+-+ うんち確認 -+-+-+-+-+-+-+-+-+-+-+-+
    Route::controller(PooDetailController::class)->prefix('poo_detail')->name('poo_detail.')->group(function(){
        Route::get('', 'index')->name('index');
    });

require __DIR__.'/auth.php';
