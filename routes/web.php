<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');


Route::get('/all-items', [HomeController::class, 'allItem'])->name('all-item');
Route::get('/single-product/{id}', [HomeController::class, 'singleProduct'])->name('single-product');

Route::resource('/contact', ContactController::class);
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');

Route::post('/contact_store', [HomeController::class, 'contact_store'])->name('contact_store');
Route::get('/sorting', [HomeController::class, 'sorting'])->name('sorting');

Route::get('/about', function () {
    return view('about'); 
});
// Route::get('/single-product', [HomeController::class, 'singleProduct'])->name('single-product');
Route::get('/services', function () {
    return view('services');
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::resource('/dashboard/product', ProductController::class);

    Route::get('/dashboard/inquiries', [ContactController::class, 'inquiries']);

    Route::get('dashboard/product-type', [ProductController::class, 'product_type']);
    Route::get('dashboard/add-product-type', function () {
        return view('dashboard/add-product-type');
    })->name('dashboard/add-product-type');

    Route::post('add-product-type', [ProductController::class, 'product_type_store']);

    Route::get('/dashboard/add-product', [ProductController::class, 'create']);

    Route::get('/update-product', function () {
        return view('dashboard/update-product');
    })->name('update-product');

    Route::get('/dashboard', function () {
        return view('dashboard/index');
    })->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
