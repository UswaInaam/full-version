<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\ProductVariantController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ShippingAddressController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\WishlistController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>'guest'],function(){
    Route::get('/',[AuthController::class,'login'])->name('login');
    Route::get('/register',[AuthController::class,'register'])->name('register');
    Route::get('/forget-password',[AuthController::class,'forgetPassword'])->name('forget_password');
    Route::post('/authenticate',[AuthController::class,'authenticate'])->name('authenticate');
    Route::post('/signup',[AuthController::class,'signup'])->name('signup');
});

Route::post('/logout',[AuthController::class,'logout'])->name('logout')->middleware('auth');
Route::get('/lang/{lang}',[ LanguageController::class,'switchLang'])->name('switch_lang');
Route::get('/pagination-per-page/{per_page}',[ PaginationController::class,'set_pagination_per_page'])->name('pagination_per_page');

Route::get('/', function () {
    return view('welcome');
});
// require __DIR__ .'/auth.php';

Route::get('/controller', [Controller::class, 'index']);
Route::post('/controller/store', [Controller::class, 'store']);
Route::put('/controller/update', [Controller::class, 'update']);
Route::delete('/controller/delete', [Controller::class, 'delete']);
Route::get('/controller/destroy', [Controller::class, 'destroy']);

Route::get('/controller/edit', [Controller::class, 'edit']);

Route::get('/products', [ProductController::class, 'index'])->name('getalproducts');
Route::post('/product/store', [ProductController::class, 'store'])->name('store.product');
Route::put('/product/update', [ProductController::class, 'update'])->name('update.product');
Route::delete('/product/delete', [ProductController::class, 'delete'])->name('delete.product');
Route::get('/product/destroy', [ProductController::class, 'destroy'])->name('destroy.product');

Route::get('/product/edit', [ProductController::class, 'edit'])->name('edit.product');

Route::get('/cart', [CartController::class, 'index'])->name('getallcarts');
Route::post('/cart/store', [CartController::class, 'store'])->name('store.cart');
Route::put('/cart/update', [CartController::class, 'update'])->name('update.cart');
Route::delete('/cart/delete', [CartController::class, 'delete'])->name('delete.cart');
Route::get('/cart/destroy', [CartController::class, 'destroy'])->name('destroy.cart');

Route::get('/cart/edit', [CartController::class, 'edit'])->name('edit.cart');

Route::get('/cartitem', [CartitemController::class, 'index'])->name('getallcartitems');
Route::post('/cartitem/store', [CartitemController::class, 'store'])->name('store.cartitem');
Route::put('/cartitem/update', [CartitemController::class, 'update'])->name('update.cartitem');
Route::delete('/cartitem/delete', [CartitemController::class, 'delete'])->name('delete.cartitem');
Route::get('/cartitem/destroy', [CartitemController::class, 'destroy'])->name('destroy.cartitem');

Route::get('/cartitem/edit', [CartitemController::class, 'edit'])->name('edit.cartitem');

Route::get('/category', [CategoryController::class, 'index'])->name('getallcategories');
Route::post('/category/store', [CategoryController::class, 'store'])->name('store.category');
Route::put('/category/update', [CategoryController::class, 'update'])->name('update.category');
Route::delete('/category/delete', [CategoryController::class, 'delete'])->name('delete.category');
Route::get('/category/destroy', [CategoryController::class, 'destroy'])->name('destroy.category');

Route::get('/category/edit', [CategoryController::class, 'edit'])->name('edit.category');

Route::get('/coupon', [CouponController::class, 'index'])->name('getalcoupons');
Route::post('/coupon/store', [CouponController::class, 'store'])->name('store.coupon');
Route::put('/coupon/update', [CouponController::class, 'update'])->name('update.coupon');
Route::delete('/coupon/delete', [CouponController::class, 'delete'])->name('delete.coupon');
Route::get('/coupon/destroy', [CouponController::class, 'destroy'])->name('destroy.coupon');

Route::get('/coupon/edit', [CouponController::class, 'edit'])->name('edit.coupon');

Route::get('/order', [OrderController::class, 'index'])->name('getallorders');
Route::post('/order/store', [OrderController::class, 'store'])->name('store.order');
Route::put('/order/update', [OrderController::class, 'update'])->name('update.order');
Route::delete('/order/delete', [OrderController::class, 'delete'])->name('delete.order');
Route::get('/order/destroy', [OrderController::class, 'destroy'])->name('destroy.order');

Route::get('/order/edit', [OrderController::class, 'edit'])->name('edit.order');

Route::get('/orderitem', [OrderItemController::class, 'index'])->name('getallorderitems');
Route::post('/orderitem/store', [OrderItemController::class, 'store'])->name('store.orderitem');
Route::put('/orderitem/update', [OrderItemController::class, 'update'])->name('update.orderitem');
Route::delete('/orderitem/delete', [OrderItemController::class, 'delete'])->name('delete.orderitem');
Route::get('/orderitem/destroy', [OrderItemController::class, 'destroy'])->name('destroy.orderitem');

Route::get('/orderitem/edit', [OrderItemController::class, 'edit'])->name('edit.orderitem');


Route::get('/payment', [PaymentController::class, 'index'])->name('getallpayments');
Route::post('/payment/store', [PaymentController::class, 'store'])->name('store.payment');
Route::put('/payment/update', [PaymentController::class, 'update'])->name('update.payment');
Route::delete('/payment/delete', [PaymentController::class, 'delete'])->name('delete.payment');
Route::get('/payment/destroy', [PaymentController::class, 'destroy'])->name('destroy.payment');

Route::get('/payment/edit', [PaymentController::class, 'edit'])->name('edit.payment');

Route::get('/productImage', [ProductImageController::class, 'index'])->name('getallproductimages');
Route::post('/productImage/store', [ProductImageController::class, 'store'])->name('store.productimage');
Route::put('/productImage/update', [ProductImageController::class, 'update'])->name('update.productimage');
Route::delete('/productImage/delete', [ProductImageController::class, 'delete'])->name('delete.productimage');
Route::get('/productImage/destroy', [ProductImageController::class, 'destroy'])->name('destroy.productimage');

Route::get('/productImage/edit', [ProductImageController::class, 'edit'])->name('edit.productimage');

Route::get('/productVariant', [ProductVariantController::class, 'index'])->name('getallproductvariants');
Route::post('/productVariant/store', [ProductVariantController::class, 'store'])->name('store.productvariant');
Route::put('/productVariant/update', [ProductVariantController::class, 'update'])->name('update.productvariant');
Route::delete('/productVariant/delete', [ProductVariantController::class, 'delete'])->name('delete.productvariant');
Route::get('/productVariant/destroy', [ProductVariantController::class, 'destroy'])->name('destroy.productvariant');

Route::get('/productVariant/edit', [ProductVariantController::class, 'edit'])->name('edit.productvariant');


Route::get('/review', [ReviewController::class, 'index'])->name('getallreviews');
Route::post('/review/store', [ReviewController::class, 'store'])->name('store.review');
Route::put('/review/update', [ReviewController::class, 'update'])->name('update.review');
Route::delete('/review/delete', [ReviewController::class, 'delete'])->name('delete.review');
Route::get('/review/destroy', [ReviewController::class, 'destroy'])->name('destroy.review');

Route::get('/review/edit', [ReviewController::class, 'edit'])->name('edit.review');


Route::get('/setting', [SettingController::class, 'index'])->name('getallsettings');
Route::post('/setting/store', [SettingController::class, 'store'])->name('store.setting');
Route::put('/setting/update', [SettingController::class, 'update'])->name('update.setting');
Route::delete('/setting/delete', [SettingController::class, 'delete'])->name('delete.setting');
Route::get('/setting/destroy', [SettingController::class, 'destroy'])->name('destroy.setting');

Route::get('/setting/edit', [SettingController::class, 'edit'])->name('edit.setting');


Route::get('/shippingAddress', [ShippingAddressController::class, 'index'])->name('getallshippingaddresses');
Route::post('/shippingAddress/store', [ShippingAddressController::class, 'store'])->name('store.shippingaddress');
Route::put('/shippingAddress/update', [ShippingAddressController::class, 'update'])->name('update.shippingaddress');
Route::delete('/shippingAddress/delete', [ShippingAddressController::class, 'delete'])->name('delete.shippingaddress');
Route::get('/shippingAddress/destroy', [ShippingAddressController::class, 'destroy'])->name('destroy.shippingaddress');

Route::get('/shippingAddress/edit', [ShippingAddressController::class, 'edit'])->name('edit.shippingaddress');

Route::get('/subCategory', [SubCategoryController::class, 'index'])->name('getallsubcategories');
Route::post('/subCategory/store', [SubCategoryController::class, 'store'])->name('store.subcategory');
Route::put('/subCategory/update', [SubCategoryController::class, 'update'])->name('update.subcategory');
Route::delete('/subCategory/delete', [SubCategoryController::class, 'delete'])->name('delete.subcategory');
Route::get('/subCategory/destroy', [SubCategoryController::class, 'destroy'])->name('destroy.subcategory');

Route::get('/subCategory/edit', [SubCategoryController::class, 'edit'])->name('edit.subcategory');

Route::get('/user', [UserController::class, 'index'])->name('getallusers');
Route::post('/user/store', [UserController::class, 'store'])->name('store.user');
Route::put('/user/update', [UserController::class, 'update'])->name('update.user');
Route::delete('/user/delete', [UserController::class, 'delete'])->name('delete.user');
Route::get('/user/destroy', [UserController::class, 'destroy'])->name('destroy.user');

Route::get('/user/edit', [UserController::class, 'edit'])->name('edit.user');

Route::get('/Wishlist', [WishlistController::class, 'index'])->name('getallwishlists');
Route::post('/Wishlist/store', [WishlistController::class, 'store'])->name('store.wishlist');
Route::put('/Wishlist/update', [WishlistController::class, 'update'])->name('update.wishlist');
Route::delete('/Wishlist/delete', [WishlistController::class, 'delete'])->name('delete.wishlist');
Route::get('/Wishlist/destroy', [WishlistController::class, 'destroy'])->name('destroy.wishlist');

Route::get('/Wishlist/edit', [WishlistController::class, 'edit'])->name('edit.wishlist');
