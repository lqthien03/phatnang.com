<?php
use App\Http\Controllers\Level1ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IntroduceController;
use App\Http\Controllers\DetailProductController;
use App\Http\Controllers\LiquidationController;
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


Route::get('/', [level1ProductController::class, 'all'],[BlogController::class, 'all']);
Route::get('bang-gia', function () {
    return view('quotation');
});
Route::get('gioi-thieu', [IntroduceController::class, 'all']);
Route::get('san-pham', [DetailProductController::class, 'all']);
Route::get('thanh-ly-phong-net', [LiquidationController::class, 'all']);
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
Route::get('detail-product/{id}',[DetailProductController::class, 'detail'] );
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
