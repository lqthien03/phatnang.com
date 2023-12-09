<?php
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Level1ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IntroduceController;
use App\Http\Controllers\DetailProductController;
use App\Http\Controllers\LiquidationController;
use App\Http\Controllers\Category1Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingController;
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

Route::get('/', [IndexController::class,'all']);
// Route::get('/', [level1ProductController::class, 'all'],[DetailProductController::class, 'index'],[BlogController::class, 'all']);
Route::get('bang-gia', function () {
    return view('quotation');
});
Route::get('gioi-thieu', [IntroduceController::class, 'all']);
Route::get('san-pham', [DetailProductController::class, 'all']);
Route::get('san-phams', [DetailProductController::class, 'allinonelv1']);
Route::get('san-phamss', [DetailProductController::class, 'allinonelv3']);

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
Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('detail-product', function () {
    return view('detail-product');
});

Route::get('/setting', function () {
    return view('admin.setting');
});

Route::controller(Category1Controller::class)->group(function () {
    Route::get('/catagory-level-1', 'show')->name('edit.setting');
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
Route::get('/productlv1', [level1ProductController::class, 'alladmin']);
Route::get('/productlv2', function(){
    return view('admin.productlv2');
});
Route::get('/productlv3', function(){
    return view('admin.productlv3');
});
Route::get('bang-gia-admin', [QuotationController::class, 'alladmin']);
require __DIR__ . '/auth.php';
