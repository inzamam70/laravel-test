<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontUserController;
use App\Models\Front_User;
use App\Models\Category;
use App\Models\Front_slider;
use App\Models\Product;

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

    Route::get('/slider', [SliderController::class, 'index'])->name('slider.index2');
    Route::get('/slider/create', [SliderController::class, 'create'])->name('slider.create');
    Route::post('/slider/store', [SliderController::class, 'store'])->name('slider.store');
    Route::get('/slider/{id}/show', [SliderController::class, 'show'])->name('slider.show');
    Route::get('/slider/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
    Route::post('/slider/update/{id}', [SliderController::class, 'update'])->name('slider.update');
    Route::get('/slider/destroy/{id}', [SliderController::class, 'destroy'])->name('slider.destroy');

    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/{id}/show', [ProductController::class, 'show'])->name('product.show');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/{id}/show', [CategoryController::class, 'show'])->name('category.show');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    Route::get('/user/index', [FrontUserController::class, 'index'])->name('front_user.index');
    Route::get('/user/create', [FrontUserController::class, 'create'])->name('front_user.create');
    Route::post('/user/store', [FrontUserController::class, 'store'])->name('front_user.store');
    Route::get('/user/show/{id}', [FrontUserController::class, 'show'])->name('front_user.show');
    Route::get('/user/edit/{id}', [FrontUserController::class, 'edit'])->name('front_user.edit');
    Route::post('/user/update/{id}', [FrontUserController::class, 'update'])->name('front_user.update');
    Route::get('/user/destroy/{id}', [FrontUserController::class, 'destroy'])->name('front_user.destroy');

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
