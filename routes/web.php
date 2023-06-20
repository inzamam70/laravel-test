<?php

use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [SliderController::class, 'index'])->name('slider.index');
Route::get('/create', [SliderController::class, 'create'])->name('slider.create');
Route::post('/store', [SliderController::class, 'store'])->name('slider.store');
Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
Route::post('/update/{id}', [SliderController::class, 'update'])->name('slider.update');
Route::get('/destroy/{id}', [SliderController::class, 'destroy'])->name('slider.destroy');

