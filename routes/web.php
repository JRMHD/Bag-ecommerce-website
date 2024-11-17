<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\OrderController;

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
})->name('home');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::fallback(function () {
    return response()->view('404', [], 404);
});

require __DIR__ . '/auth.php';


// Admin routes
Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login'])->name('admin.login.post');
Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('products', ProductController::class);
});

// Frontend Routes
Route::get('/shop', [ProductController::class, 'shop'])->name('shop');
Route::get('/product/{id}', [ProductController::class, 'showProduct'])->name('product.show');

Route::get('/shop/search', [ProductController::class, 'search'])->name('shop.search');
Route::get('/shop/load-more', [ProductController::class, 'loadMore']);
Route::post('/contact', [ContactFormController::class, 'submit'])->name('contact.submit');
Route::post('/subscribe', [SubscriptionController::class, 'subscribe']);


Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::patch('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/cart/count', [CartController::class, 'getCount'])->name('cart.count');


// Checkout routes
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout', [CheckoutController::class, 'placeOrder'])->name('checkout.place-order');
Route::get('/order/confirmation/{id}', [CheckoutController::class, 'confirmation'])->name('order.confirmation');

// // Admin routes
// Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
//     Route::get('/orders', [Admin\OrderController::class, 'index'])->name('orders.index');
//     Route::get('/orders/{order}', [Admin\OrderController::class, 'show'])->name('orders.show');
//     Route::patch('/orders/{order}/status', [Admin\OrderController::class, 'updateStatus'])->name('orders.update-status');
// });

Route::get('admin/orders', [OrderController::class, 'index'])->name('admin.orders.index');
Route::get('admin/orders/{order}', [OrderController::class, 'show'])->name('admin.orders.show');
Route::patch('admin/orders/{order}/status', [OrderController::class, 'updateStatus'])->name('admin.orders.update-status');
