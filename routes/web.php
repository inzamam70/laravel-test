<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;

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
    return redirect()->route('slider.index');
})->middleware(['auth', 'verified'])->name('slider.index');

Route::middleware('auth')->group(function () {

    Route::get('/slider', [SliderController::class, 'index'])->name('slider.index');
    Route::get('/slider/create', [SliderController::class, 'create'])->name('slider.create');
    Route::post('/slider/store', [SliderController::class, 'store'])->name('slider.store');
    Route::get('/slider/{id}/show', [SliderController::class, 'show'])->name('slider.show');
    Route::get('/slider/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
    Route::post('/slider/update/{id}', [SliderController::class, 'update'])->name('slider.update');
    Route::get('/slider/destroy/{id}', [SliderController::class, 'destroy'])->name('slider.destroy');


    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/form', function () {
        return view('form');
    });
    Route::get('/frontend', function () {
        return view('frontend');
    });
    Route::get('/contact', function () {
        return view('components.frontend.partials.contact');
    });
    Route::get('/details', function () {
        return view('components.frontend.partials.details');
    });
    Route::get('/cart', function () {
        return view('components.frontend.partials.cart');
    });
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
