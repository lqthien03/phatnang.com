<?php

use App\Http\Controllers\Category1Controller;
use App\Http\Controllers\Category2Controller;
use App\Http\Controllers\Category3Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Quotation1Controller;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SupportCustomerController;
use App\Http\Controllers\TagProductController;
use App\Models\Tag_Product;
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
Route::get('detail-product', function () {
    return view('detail-product');
});

Route::get('/setting', function () {
    return view('admin.setting');
});

Route::controller(Category1Controller::class)->group(function () {
    Route::get('/catagory-level-1', 'show')->name('show.setting');
});
Route::controller(Category2Controller::class)->group(function () {
    Route::get('/catagory-level-2', 'show')->name('show.setting');
});
Route::controller(Category3Controller::class)->group(function () {
    Route::get('/catagory-level-3', 'show')->name('show.setting');
});
Route::controller(TagProductController::class)->group(function () {

    Route::get('/tag-product', 'show')->name('show.tag_product');
    Route::get('/tag-product/{Tag_Product}', 'edit')->name('edit.tag_product');
    Route::put('/tag-product/{Tag_Product}', 'update')->name('update.tag_product');
});
Route::controller(ProductController::class)->group(function () {
    Route::get('/product', 'show')->name('show.product');
    Route::get('/product/{Product}', 'edit')->name('edit.product');
    Route::put('/product/{Product}', 'update')->name('update.product');
});

Route::controller(Quotation1Controller::class)->group(function () {
    Route::get('/quotation-level-1', 'show')->name('show.quotation');
    Route::get('/quotation/{Product}', 'edit')->name('edit.product');
    Route::put('/quotation/{Product}', 'update')->name('update.product');
});
Route::controller(QuotationController::class)->group(function () {
    Route::get('/quotation', 'show')->name('show.quotation');
    Route::get('/quotation/{Product}', 'edit')->name('edit.product');
    Route::put('/quotation/{Product}', 'update')->name('update.product');
});

Route::controller(SupportCustomerController::class)->group(function () {
    Route::get('/support-customer', 'show')->name('show.quotation');
    Route::get('/support-customer/create', 'create')->name('create.product');
    // Route::put('/support-customer', 'update')->name('update.product');
});

Route::controller(SettingController::class)->group(function () {
    Route::get('/setting/{setting}', 'edit')->name('edit.setting');
    Route::put('/setting/{setting}', 'update')->name('update.setting');

    // Route::get('/progression/detail/{id}', 'Detail_Progression')->name('progression.detail_progression');
    // Route::get('/progression/add', 'AddProgression')->name('progression.add_progression');
    // Route::post('progression/store', 'StoreProgression')->name('progression.store');
    // Route::get('/progression/edit/{id}', 'EditProgression')->name('progression.add');
    // Route::post('/progression/update', 'UpdateProgression')->name('progresion.update');
});



Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'show'])->middleware(['auth', 'verified'])->name('dashboard');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
