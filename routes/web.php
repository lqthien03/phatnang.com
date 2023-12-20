<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\Category1Controller;
use App\Http\Controllers\Category2Controller;
use App\Http\Controllers\Category3Controller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaviconController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\IntroduceController;
use App\Http\Controllers\LiquidationController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\NetworkSocietyController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Quotation1Controller;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\SeoNewsController;
use App\Http\Controllers\SeoProductController;
use App\Http\Controllers\SeoQuotationController;
use App\Http\Controllers\SeoVideoController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SlideshowController;
use App\Http\Controllers\SloganController;
use App\Http\Controllers\SupportCustomerController;
use App\Http\Controllers\TagProductController;
use App\Http\Controllers\VideoController;
use App\Models\SeoProduct;
use App\Models\SeoQuotation;
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
    Route::put('/catagory-level-1/update/{category_level1}', 'update')->name('update.category1');
    Route::delete('/catagory-level-1/{id}', 'destroy')->name('delete.category1');
});
Route::controller(Category2Controller::class)->group(function () {
    Route::get('/catagory-level-2', 'show')->name('show.category2');
    Route::get('/catagory-level-2/create', 'create')->name('create.category2');
    Route::post('/catagory-level-2/store', 'store')->name('store.category2');
    Route::get('/catagory-level-2/edit/{category_level2}', 'edit')->name('edit.category2');
    Route::put('/catagory-level-2/update/{category_level2}', 'update')->name('update.category2');
    Route::delete('/catagory-level-2/{id}', 'destroy')->name('delete.category2');
});
Route::controller(Category3Controller::class)->group(function () {
    Route::get('/catagory-level-3', 'show')->name('show.category3');
    Route::get('/catagory-level-3/create', 'create')->name('create.category3');
    Route::post('/catagory-level-3/store', 'store')->name('store.category3');
    Route::get('/catagory-level-3/edit/{category_level3}', 'edit')->name('edit.category3');
    Route::put('/catagory-level-3/update/{category_level3}', 'update')->name('update.category3');
    Route::delete('/catagory-level-3/{id}', 'destroy')->name('delete.category3');
});
Route::controller(TagProductController::class)->group(function () {
    Route::get('/tag-product', 'show')->name('show.tag_product');
    Route::get('/tag-product/create', 'create')->name('create.tag_product');
    Route::post('/tag-product/store', 'store')->name('store.tag_product');
    Route::get('/tag-product/edit/{Tag_Product}', 'edit')->name('edit.tag_product');
    Route::put('/tag-product/update/{Tag_Product}', 'update')->name('update.tag_product');
    Route::delete('/tag-product/{id}', 'destroy')->name('delete.tag_product');
});
Route::controller(ProductController::class)->group(function () {
    Route::get('/product', 'show')->name('show.product');
    Route::get('/product/create', 'create')->name('create.product');
    Route::post('/product/store', 'store')->name('store.product');
    Route::get('/product/edit/{Product}', 'edit')->name('edit.product');
    Route::put('/product/update/{Product}', 'update')->name('update.product');
    Route::delete('/product/{id}', 'destroy')->name('delete.product');
});

Route::controller(Quotation1Controller::class)->group(function () {
    Route::get('/quotation-level-1', 'show')->name('show.quotation1');
    Route::get('/quotation-level-1/create', 'create')->name('create.quotation1');
    Route::post('/quotation-level-1/store', 'store')->name('store.quotation1');
    Route::get('/quotation-level-1/edit/{Quotation}', 'edit')->name('edit.quotation1');
    Route::put('/quotation-level-1/update/{Quotation}', 'update')->name('update.quotation1');
    Route::delete('/quotation-level-1/{id}', 'destroy')->name('delete.quotation1');
});
Route::controller(QuotationController::class)->group(function () {
    Route::get('/quotation', 'show')->name('show.quotation');
    Route::get('/quotation/create', 'create')->name('create.quotation');
    Route::post('/quotation/store', 'store')->name('store.quotation');
    Route::get('/quotation/edit/{Quotation}', 'edit')->name('edit.quotation');
    Route::put('/quotation/update/{Quotation}', 'update')->name('update.quotation');
    Route::delete('/quotation/{id}', 'destroy')->name('delete.quotation');
});

Route::controller(SupportCustomerController::class)->group(function () {
    Route::get('/support-customer', 'show')->name('show.support_customer');
    Route::get('/support-customer/create', 'create')->name('create.support_customer');
    Route::post('/support-customer/store', 'store')->name('store.support_customer');
    Route::get('/support-customer/edit/{id}', 'edit')->name('edit.support_customer');
    Route::put('/support-customer/edit/{id}', 'update')->name('update.support_customer');
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
    Route::post('/policy/store', 'store')->name('store.policy');
    Route::get('/policy/edit/{Quotation}', 'edit')->name('edit.policy');
    Route::put('/policy/edit/{Quotation}', 'update')->name('update.policy');
    Route::delete('/policy/{id}', 'destroy')->name('delete.policy');
});

Route::controller(NewsController::class)->group(function () {
    Route::get('/news', 'show')->name('show.news');
    Route::get('/news/create', 'create')->name('create.news');
    Route::post('/news/store', 'store')->name('store.news');
    Route::get('/news/edit/{id}', 'edit')->name('edit.news');
    Route::put('/news/update/{id}', 'update')->name('update.news');
    Route::delete('/news/{id}', 'destroy')->name('delete.news');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'show')->name('show.');
    Route::get('/contact/create', 'create')->name('');
    Route::post('/contact/store', 'store ')->name('');
    Route::get('/contact/edit/{Quotation}', 'edit')->name('edit');
    Route::put('/contact/edit/{Quotation}', 'update')->name('update');
    Route::delete('/contact/{id}', 'destroy')->name('delete');
});



Route::controller(VideoController::class)->group(function () {
    Route::get('/image-video/videos', 'show')->name('show.video');
    Route::get('/image-video/videos/create', 'create')->name('create.video');
    Route::post('/image-video/videos/store', 'store')->name('store.video');
    Route::get('/image-video/videos/edit/{video}', 'edit')->name('edit.video');
    Route::put('/image-video/videos/update/{video}', 'update')->name('update.video');
    Route::delete('/image-video/videos/{id}', 'destroy')->name('delete.image_video.video');
});

Route::controller(NetworkSocietyController::class)->group(function () {
    Route::get('/image-video/network-society', 'show')->name('show.network-society');
    Route::get('/image-video/network-society/create', 'create')->name('create.network-society');
    Route::post('/image-video/network-society/store', 'store')->name('store.network-society');
    Route::get('/image-video/network-society/edit/', 'edit')->name('edit.network-society');
    Route::put('/image-video/network-society/update/', 'update')->name('update.network-society');
    Route::delete('/image-video/network-society/{id}', 'destroy')->name('delete.image_video.network-society');
});
Route::controller(FaviconController::class)->group(function () {
    // Route::get('/image-video/favicon', 'show')->name('show.slidershow');
    // Route::get('/image-video/favicon/create', 'create')->name('create.favicon');
    // Route::post('/image-video/favicon/store', 'store')->name('store.favicon');
    Route::get('/image-video/favicon/edit/{favicon}', 'edit')->name('edit.favicon');
    Route::put('/image-video/favicon/update/{favicon}', 'update')->name('update.favicon');
    Route::delete('/image-video/favicon/{id}', 'destroy')->name('delete.image_video.favicon');
});
Route::controller(BannerController::class)->group(function () {
    Route::get('/image-video/banner/edit/{banner}', 'edit')->name('edit.banner');
    Route::put('/image-video/banner/update/{banner}', 'update')->name('update.banner');
});
Route::controller(LogoController::class)->group(function () {
    Route::get('/image-video/logo/edit/{logo}', 'edit')->name('edit.logo');
    Route::put('/image-video/logo/update/{logo}', 'update')->name('update.logo');
    Route::delete('/image-video/logo/{id}', 'destroy')->name('delete.image_video.logo');
});
Route::controller(SlideshowController::class)->group(function () {
    Route::get('/image-video/slideshow', 'show')->name('show.slideshow');
    Route::get('/image-video/slidershow/create', 'create')->name('create.slideshow');
    Route::post('/image-video/slidershow/store', 'store')->name('store.slideshow');
    Route::get('/image-video/slidershow/edit/{video}', 'edit')->name('edit.slideshow');
    Route::put('/image-video/slidershow/update/{video}', 'update')->name('update.slideshow');
    Route::delete('/image-video/slidershow/{id}', 'destroy')->name('delete.image_video.slideshow');
});
Route::controller(CriteriaController::class)->group(function () {
    Route::get('/image-video/criteria', 'show')->name('show.criteria');
    Route::get('/image-video/criteria/create', 'create')->name('create.criteria');
    Route::post('/image-video/criteria/store', 'store')->name('store.criteria');
    Route::get('/image-video/criteria/edit/{criteria}', 'edit')->name('edit.criteria');
    Route::put('/image-video/criteria/update/{criteria}', 'update')->name('update.criteria');
    Route::delete('/image-video/criteria/{id}', 'destroy')->name('delete.image_video.criteria');
});
Route::controller(SeoNewsController::class)->group(function () {
    Route::get('/seo-page/news/edit/{news}', 'edit')->name('edit.seo_page.news');
    Route::put('/seo-page/news/update/{news}', 'update')->name('update.seo_page.news');
});
Route::controller(SeoProductController::class)->group(function () {
    Route::get('/seo-page/product/edit/{product}', 'edit')->name('edit.seo_page.product');
    Route::put('/seo-page/product/update/{product}', 'update')->name('update.seo_page.product');
});
Route::controller(SeoQuotationController::class)->group(function () {
    Route::get('/seo-page/quotation/edit/{quotation}', 'edit')->name('edit.seo_page.quotation');
    Route::put('/seo-page/quotation/update/{quotation}', 'update')->name('update.seo_page.quotation');
});
Route::controller(SeoVideoController::class)->group(function () {
    Route::get('/seo-page/video/edit/{video}', 'edit')->name('edit.seo_page.video');
    Route::put('/seo-page/video/update/{video}', 'update')->name('update.seo_page.video');
});


Route::controller(ContactController::class)->group(function () {
    Route::get('/static-page/contact/{id}', 'edit')->name('edit.static_page.contact');
    Route::put('/static-page/contact/{id}', 'update')->name('update.static_page.contact');
});
Route::controller(FooterController::class)->group(function () {
    Route::get('/static-page/footer/{id}', 'edit')->name('edit.static_page.footer');
    Route::put('/static-page/footer/{id}', 'update')->name('update.static_page.footer');
});
Route::controller(IntroduceController::class)->group(function () {
    Route::get('/static-page/introduce/{id}', 'edit')->name('edit.static_page.introduce');
    Route::put('/static-page/introduce/{id}', 'update')->name('update.static_page.introduce');
});
Route::controller(LiquidationController::class)->group(function () {
    Route::get('/static-page/liquidation/{id}', 'edit')->name('edit.static_page.liquidation');
    Route::put('/static-page/liquidation/{id}', 'update')->name('update.static_page.liquidation');
});
Route::controller(SloganController::class)->group(function () {
    Route::get('/static-page/slogan/{id}', 'edit')->name('edit.static_page.slogan');
    Route::put('/static-page/slogan/{id}', 'update')->name('update.static_page.slogan');
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
