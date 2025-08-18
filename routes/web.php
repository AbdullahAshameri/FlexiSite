<?php

use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\Demo\DemoController;
use App\Http\Controllers\Front\FooterController;
use App\Http\Controllers\Front\HearingArticleController as FrontHearingArticleController;
use App\Http\Controllers\Front\HearingArticleController;
use App\Http\Controllers\Front\HomeController;

use App\Http\Controllers\Front\ProductsController;

use App\Http\Controllers\Front\Services\ServicesController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;








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

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'] // يحفظ اخر لغة دخلت بها
], function () {

    Route::get('/', [HomeController::class, 'index'])
        ->name('home');

    // Products Route
    Route::get('/products', [productsController::class, 'index'])
        ->name('products.index');

    Route::get('/products/{product:slug}', [productsController::class, 'show'])
        ->name('products.show');

    // Footer Route
    Route::get('/footer', [FooterController::class, 'show'])->name('footer.show');

    // Footer Route
    // Route::get('/footer', [FooterController::class, 'show'])->name('footer.show');

    // Demo Route
    Route::get('/about', [DemoController::class, 'index'])
        ->name('about.page');
    // Route::get('/contact', [DemoController::class, 'contactMethod'])
    //     ->name('contact.page');

    // Services Route
    Route::get('/services', [ServicesController::class, 'index'])
        ->name('services.page');

    // Contact Route
    Route::get('/contact', [ContactController::class, 'contact'])
        ->name('contact.page');

    // Route::post('/store/message', [ContactController::class, 'storeMessage'])
    //     ->name('store.message');

    // Route::get('/contact', [ContactController::class, 'contact'])->name('contact.page');
    Route::post('/store/message', [ContactController::class, 'storeMessage'])->name('store.message');

    // Route::get('/Demo', [DemoController::class, 'index'])
    //     ->name('about.index');

    // blog 
    // Route::get('/', [FrontHearingArticleController::class, 'index'])->name('home');

    Route::get('/blogs', [HearingArticleController::class, 'all'])->name('blogs.all');
    Route::get('/blogs/{id}', [HearingArticleController::class, 'show'])->name('blogs.show');
});


// Route::get('/dash', function () {
//     return view('dashboard');
// })
// ->middleware('auth');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';

require __DIR__ . '/dashboard.php';
