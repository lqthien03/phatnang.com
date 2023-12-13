<?php

use App\Http\Controllers\Category1Controller;
use App\Http\Controllers\Category2Controller;
use App\Http\Controllers\Category3Controller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PolicyController;
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
    Route::get('/catagory-level-1', 'show')->name('show.category1');
    Route::get('/catagory-level-1/create', 'create')->name('create.category1');
    Route::post('/catagory-level-1/store', 'store')->name('store.category1');
    Route::get('/catagory-level-1/edit/{category_level1}', 'edit')->name('edit.category1');
    Route::put('/catagory-level-1/edit/{category_level1}', 'update')->name('update.category1');
    Route::delete('/catagory-level-1/{id}', 'destroy')->name('delete.category1');
});
Route::controller(Category2Controller::class)->group(function () {
    Route::get('/catagory-level-2', 'show')->name('show.category2');
    Route::get('/catagory-level-2/create', 'create')->name('create.category2');
    Route::post('/catagory-level-2/store', 'store')->name('store.category2');
    Route::get('/catagory-level-2/{Tag_Product}', 'edit')->name('edit.category2');
    Route::put('/catagory-level-2/{Tag_Product}', 'update')->name('update.category2');
    Route::delete('/catagory-level-2/{id}', 'destroy')->name('delete.category2');
});
Route::controller(Category3Controller::class)->group(function () {
    Route::get('/catagory-level-3', 'show')->name('show.category3');
    Route::get('/catagory-level-3/create', 'create')->name('create.category3');
    Route::post('/catagory-level-3/store', 'store')->name('store.category3');
    Route::get('/catagory-level-3/{Tag_Product}', 'edit')->name('edit.category3');
    Route::put('/catagory-level-3/{Tag_Product}', 'update')->name('update.category3');
    Route::delete('/catagory-level-3/{id}', 'destroy')->name('delete.category3');
});
Route::controller(TagProductController::class)->group(function () {
    Route::get('/tag-product', 'show')->name('show.tag_product');
    Route::get('/tag-product/create', 'create')->name('create.tag_product');
    Route::post('/tag-product/store', 'store')->name('store.tag_product');
    Route::get('/tag-product/{Tag_Product}', 'edit')->name('edit.tag_product');
    Route::put('/tag-product/{Tag_Product}', 'update')->name('update.tag_product');
    Route::delete('/tag-product/{id}', 'destroy')->name('delete.tag_product');
});
Route::controller(ProductController::class)->group(function () {
    Route::get('/product', 'show')->name('show.product');
    Route::get('/product/create', 'create')->name('create.product');
    Route::post('/product/store', 'store')->name('store.product');
    Route::get('/product/{Product}', 'edit')->name('edit.product');
    Route::put('/product/{Product}', 'update')->name('update.product');
    Route::delete('/product/{id}', 'destroy')->name('delete.product');
});

Route::controller(Quotation1Controller::class)->group(function () {
    Route::get('/quotation-level-1', 'show')->name('show.quotation1');
    Route::get('/quotation-level-1/create', 'create')->name('create.quotation1');
    Route::post('/quotation-level-1/store', 'store')->name('store.quotation1');
    Route::get('/quotation-level-1/{Quotation}', 'edit')->name('edit.quotation1');
    Route::put('/quotation-level-1/{Quotation}', 'update')->name('update.quotation1');
    Route::delete('/quotation-level-1/{id}', 'destroy')->name('delete.quotation1');
});
Route::controller(QuotationController::class)->group(function () {
    Route::get('/quotation', 'show')->name('show.quotation');
    Route::get('/quotation/create', 'create')->name('create.quotation');
    Route::post('/quotation/store', 'store')->name('store.quotation');
    Route::get('/quotation/edit/{Quotation}', 'edit')->name('edit.quotation');
    Route::put('/quotation/edit/{Quotation}', 'update')->name('update.quotation');
    Route::delete('/quotation/{id}', 'destroy')->name('delete.quotation');
});

Route::controller(SupportCustomerController::class)->group(function () {
    Route::get('/support-customer', 'show')->name('show.support_customer');
    Route::get('/support-customer/create', 'create')->name('create.support_customer');
    Route::post('/support-customer/store', 'store ')->name('store.support_customer');
    Route::get('/support-customer/edit/{Quotation}', 'edit')->name('edit.support_customer');
    Route::put('/support-customer/edit/{Quotation}', 'update')->name('update.support_customer');
    Route::delete('/support-customer/{id}', 'destroy')->name('delete.support_customer');
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
Route::controller(PolicyController::class)->group(function () {
    Route::get('/policy', 'show')->name('show.policy');
    Route::get('/policy/create', 'create')->name('create.policy');
    Route::post('/policy/store', 'store ')->name('store.policy');
    Route::get('/policy/edit/{Quotation}', 'edit')->name('edit.policy');
    Route::put('/policy/edit/{Quotation}', 'update')->name('update.policy');
    Route::delete('/policy/{id}', 'destroy')->name('delete.policy');
});

Route::controller(NewsController::class)->group(function () {
    Route::get('/news', 'show')->name('show.news');
    Route::get('/news/create', 'create')->name('create.news');
    Route::post('/news/store', 'store ')->name('store.news');
    Route::get('/news/edit/{Quotation}', 'edit')->name('edit.news');
    Route::put('/news/edit/{Quotation}', 'update')->name('update.news');
    Route::delete('/news/{id}', 'destroy')->name('delete.news');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'show')->name('show.news');
    Route::get('/contact/create', 'create')->name('create.news');
    Route::post('/contact/store', 'store ')->name('store.news');
    Route::get('/contact/edit/{Quotation}', 'edit')->name('edit.news');
    Route::put('/contact/edit/{Quotation}', 'update')->name('update.news');
    Route::delete('/contact/{id}', 'destroy')->name('delete.news');
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
