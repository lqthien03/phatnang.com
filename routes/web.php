<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('index');
});
<<<<<<< HEAD
Route::get('bang-gia', function () {
    return view('quotation');
});
Route::get('gioi-thieu', function () {
    return view('introduce');
});
Route::get('san-pham', function () {
    return view('products');
});
Route::get('thanh-ly-phong-net', function () {
    return view('liquidation');
});
Route::get('tin-tuc', function () {
    return view('blog');
});
Route::get('video', function () {
    return view('video');
});
Route::get('lien-he', function () {
    return view('contact');
});
Route::get('test', function () {
    return view('test');
});
Route::get('detail-product',function(){
    return view('detail-product');
});
=======

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
>>>>>>> 7f0bc8d0a6969907b9d55c18b0b7980c08791254
