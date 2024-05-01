<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Auth::routes();


Route::get('/my-account', [App\Http\Controllers\Frontend\HomeController::class, 'loginRegister'])->middleware('country')->name('web.loginRegister');
Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('web.home');
Route::post('/subscribe', [App\Http\Controllers\Frontend\HomeController::class, 'subscribe'])->name('web.subscribe');

Route::get('/shop', [App\Http\Controllers\Frontend\ProductController::class, 'shop'])->name('web.shop');
Route::get('/search', [App\Http\Controllers\Frontend\ProductController::class, 'searchProducts'])->name('web.product.search');
Route::post('/add-reviews', [App\Http\Controllers\Frontend\ProductController::class, 'saveProductReviews'])->name('web.product.reviews.add');

Route::get('/categories/{slug}', [App\Http\Controllers\Frontend\ProductController::class, 'getProductsForcategorySlug'])->name('web.category.view');

Route::get('/forgot-password', [App\Http\Controllers\Frontend\AuthController::class, 'forgotPasswordUI'])->name('web.password.forgot');
Route::post('/forgot-password', [App\Http\Controllers\Frontend\AuthController::class, 'forgotPassword'])->name('web.password.reset');
Route::get('/reset-password/{token}', [App\Http\Controllers\Frontend\AuthController::class, 'resetPassword'])->name('web.password.resetUI');
Route::post('/reset-password', [App\Http\Controllers\Frontend\AuthController::class, 'changePassword'])->name('web.password.change');

Route::get('/pages/{slug}', [App\Http\Controllers\Frontend\PageController::class, 'getPageForSlug'])->name('web.home.pages');

Route::get('/header', [App\Http\Controllers\Frontend\HomeController::class, 'getHeaderContent'])->name('web.home.header');


// cart routes
Route::get('/cart',[App\Http\Controllers\Frontend\CartController::class,'cart'])->middleware('country')->name('web.cart');
Route::get('front_cart_add',[App\Http\Controllers\Frontend\CartController::class,'addToCart'])->name('web.cart.add');
Route::get('front_minicart_remove',[App\Http\Controllers\Frontend\CartController::class,'miniCartRemove'])->name('web.cart.minicart.remove');
Route::get('front_cart_add_by_one',[App\Http\Controllers\Frontend\CartController::class,'cartAddByOne'])->name('web.cart.add.by.one');
Route::get('front_cart_remove_by_one',[App\Http\Controllers\Frontend\CartController::class,'cartRemoveByOne'])->name('web.cart.remove.by.one');
Route::get('cart/checkout',[App\Http\Controllers\Frontend\CartController::class,'checkout'])->middleware('country')->name('web.checkout');
Route::post('cart/checkout',[App\Http\Controllers\Frontend\CartController::class,'addCheckoutAddresses'])->name('web.addCheckoutAddresses');
Route::get('cart/proceed/checkout',[App\Http\Controllers\Frontend\CartController::class,'proceedToCheckout'])->name('web.proceed.checkout');
Route::post('cart/check-quantity',[App\Http\Controllers\Frontend\CartController::class,'checkProductQuantity'])->name('web.check.quantity');
Route::post('product/get-variant',[App\Http\Controllers\Frontend\CartController::class,'getVariantDataForId'])->name('web.variantData.get');
Route::post('cart/add-to-wishlist',[App\Http\Controllers\Frontend\CartController::class,'addToWishlist'])->name('web.addTo.wishlist');
Route::post('cart/remove-from-wishlist',[App\Http\Controllers\Frontend\CartController::class,'removeFromWishlist'])->name('web.removeFrom.wishlist');
Route::post('/cart',[App\Http\Controllers\Frontend\CartController::class,'applyCoupon'])->name('web.cart.coupon.add');
Route::post('/checkout/city/get',[App\Http\Controllers\Frontend\CartController::class,'getCityForCityName'])->name('web.checkout.city');
Route::post('/cart/get-quotation',[App\Http\Controllers\Frontend\CartController::class,'getCartQuotation'])->name('web.cart.quotation');


Route::get('/search', [App\Http\Controllers\Frontend\HomeController::class, 'mainSearch'])->name('web.main.search');

//category routes
Route::get('/shop/categories',[App\Http\Controllers\Frontend\CategoryController::class,'singlePageCategories'])->name('categories.view_category');
Route::get('/shop/{slug}',[App\Http\Controllers\Frontend\CategoryController::class, 'getProductsForCategory'])->name('front.category');


// user routes
Route::get('/user/profile',[App\Http\Controllers\Frontend\UserController::class, 'getUserAccountDetails'])->name('web.user.account')->middleware(['auth','country']);


Route::post('/user/addresses/edit',[App\Http\Controllers\Frontend\UserController::class, 'editUserAddresses'])->name('web.user.editAddress');
Route::post('/user/addresses/active',[App\Http\Controllers\Frontend\UserController::class, 'setActiveAddress'])->name('web.user.addressActiveStatus');
Route::post('/user/addresses/new',[App\Http\Controllers\Frontend\UserController::class, 'addNewAddress'])->name('web.user.addNewAddress');
Route::post('/user/update/profile',[App\Http\Controllers\Frontend\UserController::class, 'updateProfile'])->name('web.user.profileUpdate');
Route::get('/order/success/{id}',[App\Http\Controllers\Frontend\UserController::class, 'orderPlacingSucceeded'])->name('web.user.order.success');

// shop routes
Route::get('/shop/{slug}',[App\Http\Controllers\Frontend\ProductController::class, 'getProductsForCategory'])->name('web.category');
Route::get('/shop/products/{slug}',[App\Http\Controllers\Frontend\ProductController::class, 'getProductForSlug'])->name('web.shop.product');
Route::get('/stock-clearance',[App\Http\Controllers\Frontend\ProductController::class, 'ShowStockClearanceProducts'])->name('web.stock.clearance');
Route::post('/shop/products/inquiry',[App\Http\Controllers\Frontend\ProductController::class, 'storeProductInquiry'])->name('web.product.inquiry');
Route::post('/shop/products/{slug}',[App\Http\Controllers\Frontend\ProductController::class, 'getProductForSlug'])->name('web.singleProduct.variant.select');

// order routes
Route::get('/orders/order_tracking/{trackingNumber}',[App\Http\Controllers\Frontend\OrderController::class, 'getOrderTracking'])->name('web.orders.order_tracking');
Route::post('/orders/store',[App\Http\Controllers\Frontend\OrderController::class, 'placeOrder'])->name('web.orders.store');
Route::get('/orders/order_tracking/{trackingNumber}',[App\Http\Controllers\Frontend\OrderController::class, 'getOrderTracking'])->name('web.orders.order_tracking');

//contact-us

Route::get('/contact', [App\Http\Controllers\Frontend\PageController::class, 'loadContactUs'])->name('web.contact.us');
Route::post('/contact/submit', [App\Http\Controllers\Frontend\PageController::class, 'loadContactSubmit'])->name('web.contactsubmit');
//Get in touch
Route::post('/get-in-touch/submit', [App\Http\Controllers\Frontend\PageController::class, 'loadGetinTouch'])->name('web.getintouchsubmit');

// Route::get('/pages/contact-us',[App\Http\Controllers\Frontend\PageController::class, 'getContactUs'])->name('front.contactUs');
Route::post('/pages/contact-us',[App\Http\Controllers\Frontend\PageController::class, 'storeInquiry'])->name('front.storeInquiry');

Route::get('/deactivate-exp-promotions',[App\Http\Controllers\Frontend\ProductController::class, 'deactivateExpiredPromotions'])->name('web.promotions.expired.deactivate');

//blog
Route::get('/blog',[App\Http\Controllers\Frontend\PageController::class, 'loadBlog'])->name('web.blog');
Route::get('/blog-single/{slug}',[App\Http\Controllers\Frontend\PageController::class, 'loadBlogSingle'])->name('web.blogsingle');

//About Us
Route::get('/about-us',[App\Http\Controllers\Frontend\PageController::class, 'loadAboutUs'])->name('web.aboutus');

Route::post('/county-select',[App\Http\Controllers\Frontend\HomeController::class, 'submitCountry'])->name('web.select.country');

Route::post('/pre-order-store',[App\Http\Controllers\Frontend\PreOrderController::class, 'submitPreOrder'])->name('pre.order.store');



