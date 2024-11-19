<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;



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




Route::post('/contact', [ContactFormController::class, 'submit'])->name('contact.submit');
Route::post('/subscribe', [SubscriptionController::class, 'subscribe']);




Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('products.show');
Route::post('/product', [ProductController::class, 'store'])->name('products.store');

// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin/products', [ProductController::class, 'adminIndex'])->name('admin.products.index'); // Admin view all products
//     Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin.products.create'); // Admin create product form
//     Route::post('/admin/products', [ProductController::class, 'store'])->name('admin.products.store'); // Admin store new product
//     Route::get('/admin/products/{id}/edit', [ProductController::class, 'edit'])->name('admin.products.edit'); // Admin edit product form
//     Route::put('/admin/products/{id}', [ProductController::class, 'update'])->name('admin.products.update'); // Admin update product
//     Route::delete('/admin/products/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy'); // Admin delete product
// });

Route::get('/admin/products', [ProductController::class, 'adminIndex'])->name('admin.products.index'); // Admin view all products
Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin.products.create'); // Admin create product form
Route::post('/admin/products', [ProductController::class, 'store'])->name('admin.products.store'); // Admin store new product
Route::get('/admin/products/{id}/edit', [ProductController::class, 'edit'])->name('admin.products.edit'); // Admin edit product form
Route::put('/admin/products/{id}', [ProductController::class, 'update'])->name('admin.products.update'); // Admin update product
Route::delete('/admin/products/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy'); // Admin delete product
Route::get('/shop', [ProductController::class, 'index'])->name('shop');


// Route to view the cart
Route::get('/cart', [CartController::class, 'index'])->name('cart');

// Route to add a product to the cart
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add.to.cart');

// Route to remove a product from the cart
Route::delete('/remove-from-cart/{productId}', [CartController::class, 'removeFromCart'])->name('remove.from.cart');

// Route to update the quantity of a product in the cart
Route::put('/update-cart/{productId}', [CartController::class, 'updateQuantity'])->name('update.cart');

Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

Route::resource('products', ProductController::class);
Route::put('/cart/update/{productId}', [CartController::class, 'updateQuantity'])->name('update.cart');
Route::delete('/cart/remove/{productId}', [CartController::class, 'removeFromCart'])->name('remove.from.cart');

// Checkout routes
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');

// Admin order management
Route::get('/admin/orders', [OrderController::class, 'index'])->name('admin.orders.index');
Route::get('/admin/orders/{order}', [OrderController::class, 'show'])->name('admin.orders.show');
Route::put('/admin/orders/{order}', [OrderController::class, 'update'])->name('admin.orders.update');
