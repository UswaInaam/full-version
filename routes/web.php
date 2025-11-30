<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PaginationController;

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


// require __DIR__ .'/auth.php';



Route::get('/products', [ProductController::class, 'index'])->name('getalproducts');
Route::post('/product/store', [ProductController::class, 'store'])->name('store.product');
Route::put('/product/update', [ProductController::class, 'update'])->name('update.product');

Route::get('/product/destroy/${slug}', [ProductController::class, 'destroy'])->name('destroy.product');
Route::get('/product/create', [ProductController::class, 'create'])->name('create.product');
Route::get('/product/edit/${slug}', [ProductController::class, 'edit'])->name('edit.product');

Route::get('/cart', [CartController::class, 'index'])->name('getallcarts');
Route::post('/cart/store', [CartController::class, 'store'])->name('store.cart');
Route::put('/cart/update', [CartController::class, 'update'])->name('update.cart');
Route::get('/cart/create', [CartController::class, 'create'])->name('create.cart');
Route::get('/cart/destroy', [CartController::class, 'destroy'])->name('destroy.cart');

Route::get('/cart/edit', [CartController::class, 'edit'])->name('edit.cart');

Route::get('/cartitem', [CartitemController::class, 'index'])->name('getallcartitems');
Route::post('/cartitem/store', [CartitemController::class, 'store'])->name('store.cartitem');
Route::put('/cartitem/update', [CartitemController::class, 'update'])->name('update.cartitem');
Route::get('/cartitem/create', [CartitemController::class, 'create'])->name('create.cartitem');
Route::get('/cartitem/destroy', [CartitemController::class, 'destroy'])->name('destroy.cartitem');

Route::get('/cartitem/edit', [CartitemController::class, 'edit'])->name('edit.cartitem');

Route::get('/category', [CategoryController::class, 'index'])->name('getallcategories');
Route::post('/category/store', [CategoryController::class, 'store'])->name('store.category');
Route::put('/category/update', [CategoryController::class, 'update'])->name('update.category');
Route::get('/category/create', [CategoryController::class, 'create'])->name('create.category');
Route::get('/category/destroy', [CategoryController::class, 'destroy'])->name('destroy.category');

Route::get('/category/edit', [CategoryController::class, 'edit'])->name('edit.category');

Route::get('/coupon', [CouponController::class, 'index'])->name('getalcoupons');
Route::post('/coupon/store', [CouponController::class, 'store'])->name('store.coupon');
Route::put('/coupon/update', [CouponController::class, 'update'])->name('update.coupon');
Route::get('/coupon/create', [CouponController::class, 'create'])->name('create.coupon');
Route::get('/coupon/destroy', [CouponController::class, 'destroy'])->name('destroy.coupon');

Route::get('/coupon/edit', [CouponController::class, 'edit'])->name('edit.coupon');

Route::get('/order', [OrderController::class, 'index'])->name('getallorders');
Route::post('/order/store', [OrderController::class, 'store'])->name('store.order');
Route::put('/order/update', [OrderController::class, 'update'])->name('update.order');
Route::get('/order/create', [OrderController::class, 'create'])->name('create.order');
Route::get('/order/destroy', [OrderController::class, 'destroy'])->name('destroy.order');

Route::get('/order/edit', [OrderController::class, 'edit'])->name('edit.order');

Route::get('/orderitem', [OrderItemController::class, 'index'])->name('getallorderitems');
Route::post('/orderitem/store', [OrderItemController::class, 'store'])->name('store.orderitem');
Route::put('/orderitem/update', [OrderItemController::class, 'update'])->name('update.orderitem');
Route::get('/orderitem/create', [OrderItemController::class, 'create'])->name('create.orderitem');
Route::get('/orderitem/destroy', [OrderItemController::class, 'destroy'])->name('destroy.orderitem');

Route::get('/orderitem/edit', [OrderItemController::class, 'edit'])->name('edit.orderitem');


Route::get('/payment', [PaymentController::class, 'index'])->name('getallpayments');
Route::post('/payment/store', [PaymentController::class, 'store'])->name('store.payment');
Route::put('/payment/update', [PaymentController::class, 'update'])->name('update.payment');
Route::get('/payment/create', [PaymentController::class, 'create'])->name('create.payment');
Route::get('/payment/destroy', [PaymentController::class, 'destroy'])->name('destroy.payment');

Route::get('/payment/edit', [PaymentController::class, 'edit'])->name('edit.payment');

Route::get('/productImage', [ProductImageController::class, 'index'])->name('getallproductimages');
Route::post('/productImage/store', [ProductImageController::class, 'store'])->name('store.productimage');
Route::put('/productImage/update', [ProductImageController::class, 'update'])->name('update.productimage');
Route::get('/productimage/create', [ProductimageController::class, 'create'])->name('create.productimage');
Route::get('/productImage/destroy', [ProductImageController::class, 'destroy'])->name('destroy.productimage');

Route::get('/productImage/edit', [ProductImageController::class, 'edit'])->name('edit.productimage');

Route::get('/productVariant', [ProductVariantController::class, 'index'])->name('getallproductvariants');
Route::post('/productVariant/store', [ProductVariantController::class, 'store'])->name('store.productvariant');
Route::put('/productVariant/update', [ProductVariantController::class, 'update'])->name('update.productvariant');
Route::get('/productVariant/create', [ProductVariantController::class, 'create'])->name('create.productvariant');
Route::get('/productVariant/destroy', [ProductVariantController::class, 'destroy'])->name('destroy.productvariant');

Route::get('/productVariant/edit', [ProductVariantController::class, 'edit'])->name('edit.productvariant');


Route::get('/review', [ReviewController::class, 'index'])->name('getallreviews');
Route::post('/review/store', [ReviewController::class, 'store'])->name('store.review');
Route::put('/review/update', [ReviewController::class, 'update'])->name('update.review');
Route::get('/review/create', [ReviewController::class, 'create'])->name('create.review');
Route::get('/review/destroy', [ReviewController::class, 'destroy'])->name('destroy.review');

Route::get('/review/edit', [ReviewController::class, 'edit'])->name('edit.review');


Route::get('/setting', [SettingController::class, 'index'])->name('getallsettings');
Route::post('/setting/store', [SettingController::class, 'store'])->name('store.setting');
Route::put('/setting/update', [SettingController::class, 'update'])->name('update.setting');
Route::get('/setting/create', [SettingController::class, 'create'])->name('create.setting');
Route::get('/setting/destroy', [SettingController::class, 'destroy'])->name('destroy.setting');

Route::get('/setting/edit', [SettingController::class, 'edit'])->name('edit.setting');


Route::get('/shippingAddress', [ShippingAddressController::class, 'index'])->name('getallshippingaddresses');
Route::post('/shippingAddress/store', [ShippingAddressController::class, 'store'])->name('store.shippingaddress');
Route::put('/shippingAddress/update', [ShippingAddressController::class, 'update'])->name('update.shippingaddress');
Route::get('/shippingAddress/create', [ShippingAddressController::class, 'create'])->name('create.shippingaddress');
Route::get('/shippingAddress/destroy', [ShippingAddressController::class, 'destroy'])->name('destroy.shippingaddress');

Route::get('/shippingAddress/edit', [ShippingAddressController::class, 'edit'])->name('edit.shippingaddress');

Route::get('/subCategory', [SubCategoryController::class, 'index'])->name('getallsubcategories');
Route::post('/subCategory/store', [SubCategoryController::class, 'store'])->name('store.subcategory');
Route::put('/subCategory/update', [SubCategoryController::class, 'update'])->name('update.subcategory');
Route::get('/subCategory/create', [SubCategoryController::class, 'create'])->name('create.subcategory');
Route::get('/subCategory/destroy', [SubCategoryController::class, 'destroy'])->name('destroy.subcategory');

Route::get('/subCategory/edit', [SubCategoryController::class, 'edit'])->name('edit.subcategory');

Route::get('/user', [UserController::class, 'index'])->name('getallusers');
Route::post('/user/store', [UserController::class, 'store'])->name('store.user');
Route::put('/user/update', [UserController::class, 'update'])->name('update.user');
Route::get('/user/create', [UserController::class, 'create'])->name('create.user');
Route::get('/user/destroy', [UserController::class, 'destroy'])->name('destroy.user');

Route::get('/user/edit', [UserController::class, 'edit'])->name('edit.user');

Route::get('/Wishlist', [WishlistController::class, 'index'])->name('getallwishlists');
Route::post('/Wishlist/store', [WishlistController::class, 'store'])->name('store.wishlist');
Route::put('/Wishlist/update', [WishlistController::class, 'update'])->name('update.wishlist');
Route::get('/Wishlist/create', [WishlistController::class, 'create'])->name('create.wishlist');
Route::get('/Wishlist/destroy', [WishlistController::class, 'destroy'])->name('destroy.wishlist');

Route::get('/Wishlist/edit', [WishlistController::class, 'edit'])->name('edit.wishlist');
