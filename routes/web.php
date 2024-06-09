<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;



use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductAdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyaccountController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
//ADMIM

Route::get('/admin' , [AdminController::class, 'index'])->name('admin');
Route::get('/user' , [AdminController::class, 'user'])->name('user');
Route::get('/addcata' , [AdminController::class, 'addcata']);
Route::get('/editcata' , [AdminController::class, 'editcata']);

Route::get('/catalog' , [CategoriesController::class, 'index'])->name('catalog');












Route::get('/admin/catalog', [CategoriesController::class, 'index'])->name('admin.catalog');
//add cata
Route::get('/admin/addcata', [CategoriesController::class, 'create'])->name('admin.addcata');
Route::post('/admin/catalog/store', [CategoriesController::class, 'store'])->name('admin.catalog.store');
//edit cata
Route::get('/admin/edit/{id}', [CategoriesController::class, 'edit'])->name('admin.editcata');
Route::put('/admin/edit/{id}/update', [CategoriesController::class, 'update'])->name('admin.edit.update');
//delete cata
Route::delete('/admin/delete/{id}', [CategoriesController::class, 'destroy'])->name('admin.delete');

//-------------------------------------------------------------------------------------------------------------------------------------------------



//ADMIN PRODUCT
Route::get('/admin/product', [ProductAdminController::class, 'index'])->name('admin.product');
Route::get('/admin/addpro', [ProductAdminController::class, 'create'])->name('admin.addpro');
Route::post('/admin/product/store', [ProductAdminController::class, 'store'])->name('admin.product.store');
Route::get('/admin/product/{id}/edit', [ProductAdminController::class, 'edit'])->name('admin.product.edit');
Route::put('/admin/product/{id}', [ProductAdminController::class, 'update'])->name('admin.product.update');
Route::delete('/admin/product/{id}', [ProductAdminController::class, 'destroy'])->name('admin.product.destroy');












Route::get('/' , [HomeController::class, 'productNew']);
Route::get('/detail/{id}' , [ProductController::class, 'detail'])->name('detail');
Route::get('/cart' , [HomeController::class, 'cart']);
Route::get('/checkout' , [HomeController::class, 'checkout']);
Route::get('/shop' , [ProductController::class, 'shop']);
Route::get('/search' , [ProductController::class, 'search'])->name('products.search');

/* Route::get('/catalog/{category_id}' , [ProductController::class, 'catalog'])->name('catalog'); */









// Các route dành cho admin
Route::middleware(['admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    // Thêm các route khác dành cho admin ở đây
});
Route::get('/home', [HomeController::class, 'productNew'])->name('home');
Route::get('/myaccount', [MyaccountController::class, 'myAccount'])->name('myAccount');
Route::post('/update-profile', [MyaccountController::class, 'updateProfile'])->name('updateProfile');
Route::middleware('admin')->group(function () {
    // Các tuyến đường trong /admin
});




Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');





// Các route yêu cầu người dùng đăng nhập
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::post('/product/addCart', [CartController::class, 'addCart'])->name('addCart');
Route::get('/del/cart/{id}', [CartController::class, 'delCart'])->name('delCart');
Route::post('/update-cart', [CartController::class, 'updateCart'])->name('updateCart');




Route::get('/checkout', [CheckoutController::class, 'showCheckout'])->name('showCheckout');
Route::post('/checkout',[CheckoutController::class, 'checkout'])->name('checkout');
Route::post('/allcheckout',[CheckoutController::class, 'allCheckout'])->name('allCheckout');

Route::get('/oders',[CheckoutController::class, 'showOrders'])->name('showOrders');
Route::post('/cancel-order/{orderId}', [CheckoutController::class, 'cancelOrder'])->name('cancelOrder');





Route::get('/loginForm', [LoginController::class, 'loginForm'])->name('loginForm');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/register', [LoginController::class, 'register'])->name('register');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');