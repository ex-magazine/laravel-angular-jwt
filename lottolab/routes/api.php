<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\TicketbController;
use App\Http\Controllers\JwtAuthController;
use App\Enums\Permission;


/*
use App\Http\Controllers\ShopAddressController;
use App\Http\Controllers\ShopAttributeController;
use App\Http\Controllers\ShopAttributeValueController;
use App\Http\Controllers\ShopProductController;
use App\Http\Controllers\ShopSettingsController;
use App\Http\Controllers\ShopUserController;
use App\Http\Controllers\ShopTypeController;
use App\Http\Controllers\ShopOrderController;
use App\Http\Controllers\ShopOrderStatusController;
use App\Http\Controllers\ShopCategoryController;
use App\Http\Controllers\ShopCouponController;
use App\Http\Controllers\ShopAttachmentController;
use App\Http\Controllers\ShopShippingController;
use App\Http\Controllers\ShopTaxController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShopTagController;
use App\Http\Controllers\ShopWithdrawController;
*/

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

// header('Access-Control-Allow-Origin:  *');
// header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization,Access-Control-Allow-Origin, X-Requested-With');

Route::group([
    'middleware' => 'jwt.verify',
    'prefix' => 'auth'
], function ($router) {       
    Route::post('/signout', [JwtAuthController::class, 'signout']);
   // Route::post('/req-password-reset', [ResetPwdReqController::class, 'reqForgotPassword']);    
    //Route::post('/update-password', [UpdatePwdController::class, 'updatePassword']);
}); 
Route::group([
    'middleware' => 'jwt.auth',
    'prefix' => 'auth'
], function ($router) {     
    Route::get('/user-profile', [JwtAuthController::class, 'user']);          
}); 
Route::group([
    'middleware' => 'jwt.refresh',
    'prefix' => 'auth'
], function ($router) {     
    Route::post('/token-refresh', [JwtAuthController::class, 'refresh']);
    
}); 
Route::group([  
    'prefix' => 'auth' 
], function ($router) {
    Route::post('/signup', [JwtAuthController::class, 'register']);
    Route::post('/signin', [JwtAuthController::class, 'authenticate']);
   
    //Route::get("app-logout", "AuthController@logout");
    //Route::resource("app-tasks", "TaskController");
    // Route::post('/app-register', 'JwtAuthController@register');
    // Route::post('/app-login', 'JwtAuthController@authenticate');
    // Route::post('/app-user','JwtAuthController@getAuthenticatedUser');
});
// Route::prefix('admin')->controller(AuthController::class)->group(function () {
//     Route::post('login', 'login');
//     Route::post('register', 'register');
//     Route::middleware('auth:admin_api')->group(function () {
//         Route::post('logout', 'logout');
//         Route::post('me', 'me');
//     });
// });
// Route::post('login', [ApiController::class, 'authenticate']);
// Route::post('register', [ApiController::class, 'register']);

// Route::group(['middleware' => ['jwt.verify']], function() {
//     Route::get('logout', [ApiController::class, 'logout']);
//     Route::get('get_user', [ApiController::class, 'get_user']);
//     Route::get('products', [ProductController::class, 'index']);
//     Route::get('products/{id}', [ProductController::class, 'show']);
//     Route::post('create', [ProductController::class, 'store']);
//     Route::put('update/{product}',  [ProductController::class, 'update']);
//     Route::delete('delete/{product}',  [ProductController::class, 'destroy']);
// });




Route::get('/react-next-ticketb', [TicketbController::class, 'index'])->middleware('auth:sanctum');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Api')->name('api.')->group(function(){

    //Ammelias
    Route::get('header', 'HomeController@header');
    Route::get('home', 'HomeController@home');
    Route::post('contact-process', 'HomeController@contactProcess');
    Route::post('subscription-process', 'HomeController@subscriptionProcess');
    Route::get('about-us', 'HomeController@aboutUs');
    Route::get('service', 'HomeController@service');
    Route::get('teams', 'HomeController@teams');
    Route::get('portfolio', 'HomeController@portfolio');
    Route::get('portfolio/{id}', 'HomeController@portfolioSingle');
    Route::get('gallery', 'HomeController@gallery');
    Route::get('blogs', 'HomeController@blogs');
    Route::get('blogs/{id}', 'HomeController@singleBlog');
    Route::post('save-blog-comment', 'HomeController@saveBlogComment');



	Route::get('general-setting','BasicController@generalSetting');
	Route::get('unauthenticate','BasicController@unauthenticate')->name('unauthenticate');
	Route::get('languages','BasicController@languages');
	Route::get('language-data/{code}','BasicController@languageData');

	Route::namespace('Auth')->group(function(){
		Route::post('login', 'LoginController@login');
		Route::post('register', 'RegisterController@register');
		
	    Route::post('password/email', 'ForgotPasswordController@sendResetCodeEmail');
	    Route::post('password/verify-code', 'ForgotPasswordController@verifyCode');
	    
	    Route::post('password/reset', 'ResetPasswordController@reset');
	});


	Route::middleware('auth.api:sanctum')->name('user.')->prefix('user')->group(function(){
		Route::get('logout', 'Auth\LoginController@logout');
		Route::get('authorization', 'AuthorizationController@authorization')->name('authorization');
	    Route::get('resend-verify', 'AuthorizationController@sendVerifyCode')->name('send.verify.code');
	    Route::post('verify-email', 'AuthorizationController@emailVerification')->name('verify.email');
	    Route::post('verify-sms', 'AuthorizationController@smsVerification')->name('verify.sms');
	    Route::post('verify-g2fa', 'AuthorizationController@g2faVerification')->name('go2fa.verify');

	    Route::middleware(['checkStatusApi'])->group(function(){
	    	Route::get('dashboard',function(){
	    		return auth()->user();
	    	});

            Route::post('profile-setting', 'UserController@submitProfile');
            Route::post('change-password', 'UserController@submitPassword');

            // Withdraw
            Route::get('withdraw/methods', 'UserController@withdrawMethods');
            Route::post('withdraw/store', 'UserController@withdrawStore');
            Route::post('withdraw/confirm', 'UserController@withdrawConfirm');
            Route::get('withdraw/history', 'UserController@withdrawLog');


            // Deposit
            Route::get('deposit/methods', 'PaymentController@depositMethods');
            Route::post('deposit/insert', 'PaymentController@depositInsert');
            Route::get('deposit/confirm', 'PaymentController@depositConfirm');

            Route::get('deposit/manual', 'PaymentController@manualDepositConfirm');
            Route::post('deposit/manual', 'PaymentController@manualDepositUpdate');

            Route::get('deposit/history', 'UserController@depositHistory');

            Route::get('transactions', 'UserController@transactions');

	    });
	});
});



//SHOP
Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/pickbazar/register', 'ShopUserController@register');
    Route::post('/pickbazar/token', 'ShopUserController@token');
    Route::post('/pickbazar/forget-password', 'ShopUserController@forgetPassword');
    Route::post('/pickbazar/verify-forget-password-token', 'ShopUserController@verifyForgetPasswordToken');
    Route::post('/pickbazar/reset-password', 'ShopUserController@resetPassword');
    Route::post('/pickbazar/contact', 'ShopUserController@contactAdmin');
    Route::post('/pickbazar/social-login-token', 'ShopUserController@socialLogin');
});


Route::apiResource('/pickbazar/products', ShopProductController::class, [
    'only' => ['index', 'show']
]);
Route::apiResource('/pickbazar/types', ShopTypeController::class, [
    'only' => ['index', 'show']
]);
Route::apiResource('/pickbazar/attachments', ShopAttachmentController::class, [
    'only' => ['index', 'show']
]);
Route::apiResource('/pickbazar/categories', ShopCategoryController::class, [
    'only' => ['index', 'show']
]);
Route::apiResource('/pickbazar/tags', ShopTagController::class, [
    'only' => ['index', 'show']
]);

Route::get('/pickbazar/fetch-parent-category', 'ShopCategoryController@fetchOnlyParent');

Route::apiResource('/pickbazar/coupons', ShopCouponController::class, [
    'only' => ['index', 'show']
]);

Route::post('/pickbazar/coupons/verify', 'ShopCouponController@verify');

Route::apiResource('/pickbazar/order_status', ShopOrderStatusController::class, [
    'only' => ['index', 'show']
]);

Route::apiResource('/pickbazar/attributes', ShopAttributeController::class, [
    'only' => ['index', 'show']
]);

Route::apiResource('/pickbazar/all-shop', ShopController::class, [
    'only' => ['index', 'show']
]);

Route::apiResource('/pickbazar/attribute-values', ShopAttributeValueController::class, [
    'only' => ['index', 'show']
]);

Route::apiResource('/pickbazar/settings', ShopSettingsController::class, [
    'only' => ['index']
]);

Route::group(['middleware' => ['can:' . Permission::CUSTOMER, 'auth:sanctum']], function () {
    Route::post('/logout', 'ShopUserController@logout');
    Route::apiResource('orders', ShopOrderController::class, [
        'only' => ['index', 'show', 'store']
    ]);
    Route::get('orders/tracking_number/{tracking_number}', 'ShopOrderController@findByTrackingNumber');
    Route::apiResource('attachments', ShopAttachmentController::class, [
        'only' => ['store', 'update', 'destroy']
    ]);
    Route::post('checkout/verify', 'ShopCheckoutController@verify');
    Route::get('/pickbazar/me', 'ShopUserController@me');
    Route::put('users/{id}', 'ShopUserController@update');
    Route::post('/change-password', 'ShopUserController@changePassword');
    Route::apiResource('address', ShopAddressController::class, [
        'only' => ['destroy']
    ]);
});
Route::group(
    ['middleware' => ['permission:' . Permission::STAFF . '|' . Permission::STORE_OWNER, 'auth:sanctum']],
    function () {
        Route::get('analytics', 'ShopAnalyticsController@analytics');
        Route::apiResource('products', ShopProductController::class, [
            'only' => ['store', 'update', 'destroy']
        ]);
        Route::apiResource('attributes', ShopAttributeController::class, [
            'only' => ['store', 'update', 'destroy']
        ]);
        Route::apiResource('attribute-values', ShopAttributeValueController::class, [
            'only' => ['store', 'update', 'destroy']
        ]);
        Route::apiResource('orders', ShopOrderController::class, [
            'only' => ['update', 'destroy']
        ]);
        Route::get('popular-products', 'ShopAnalyticsController@popularProducts');
    }
);
Route::group(
    ['middleware' => ['permission:' . Permission::STORE_OWNER, 'auth:sanctum']],
    function () {
        Route::apiResource('all-shop', ShopController::class, [
            'only' => ['store', 'update', 'destroy']
        ]);
        Route::apiResource('withdraws', ShopWithdrawController::class, [
            'only' => ['store', 'index', 'show']
        ]);
        Route::post('users/add-staff', 'ShopController@addStaff');
        Route::post('users/remove-staff', 'ShopController@removeStaff');
        Route::get('staffs', 'ShopUserController@staffs');
        Route::get('my-shops', 'ShopController@myShops');
    }
);
Route::group(['middleware' => ['permission:' . Permission::SUPER_ADMIN, 'auth:sanctum']], function () {
    Route::apiResource('types', ShopTypeController::class, [
        'only' => ['store', 'update', 'destroy']
    ]);
    Route::apiResource('withdraws', ShopWithdrawController::class, [
        'only' => ['update', 'destroy']
    ]);
    Route::apiResource('categories', ShopCategoryController::class, [
        'only' => ['store', 'update', 'destroy']
    ]);
    Route::apiResource('tags', ShopTagController::class, [
        'only' => ['store', 'update', 'destroy']
    ]);
    Route::apiResource('coupons', ShopCouponController::class, [
        'only' => ['store', 'update', 'destroy']
    ]);
    Route::apiResource('order_status', ShopOrderStatusController::class, [
        'only' => ['store', 'update', 'destroy']
    ]);

    Route::apiResource('/pickbazar/settings', ShopSettingsController::class, [
        'only' => ['store']
    ]);
    Route::apiResource('users', ShopUserController::class);
    Route::post('users/ban-user', 'ShopUserController@banUser');
    Route::post('users/active-user', 'ShopUserController@activeUser');
    Route::apiResource('taxes', ShopTaxController::class);
    Route::apiResource('shipping', ShopShippingController::class);
    Route::post('approve-shop', 'ShopController@approveShop');
    Route::post('disapprove-shop', 'ShopController@disApproveShop');
    Route::post('approve-withdraw', 'ShopWithdrawController@approveWithdraw');
});
