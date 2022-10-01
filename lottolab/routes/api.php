<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JwtAuthController;
use App\Http\Controllers\ResetPwdReqController;
use App\Http\Controllers\UpdatePwdController;




use App\Http\Controllers\ShopAddressController;
use App\Http\Controllers\ShopAttributeController;
use App\Http\Controllers\ShopAttributeValueController;
//use App\Http\Controllers\ShopProductController;
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
use App\Enums\Permission;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShopTagController;
use App\Http\Controllers\ShopWithdrawController;
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



// Route::group(['middleware' => ['jwt.verify']], function() {
    
// });

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/app-register', 'JwtAuthController@register');
    Route::post('/app-login', 'JwtAuthController@authenticate');
    Route::post('/app-user','JwtAuthController@getAuthenticatedUser');

    Route::post('/signup', [JwtAuthController::class, 'register']);
    Route::post('/signin', [JwtAuthController::class, 'login']);
    Route::get('/user-profile', [JwtAuthController::class, 'user']);
    Route::post('/token-refresh', [JwtAuthController::class, 'refresh']);
    Route::post('/signout', [JwtAuthController::class, 'signout']);
    Route::post('/req-password-reset', [ResetPwdReqController::class, 'reqForgotPassword']);
    Route::post('/update-password', [UpdatePwdController::class, 'updatePassword']);
}); 
Route::group([
    "middleware" => "auth.jwt",
    'prefix' => 'auth'
], function ($router) {
    Route::get("app-logout", "AuthController@logout");
    //Route::resource("app-tasks", "TaskController");
});


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






Route::post('/pickbazar-register', 'App\Http\Controllers\ShopUserController@register');
Route::post('/pickbazar-token', 'App\Http\Controllers\ShopUserController@token');
Route::post('/pickbazar-forget-password', 'App\Http\Controllers\ShopUserController@forgetPassword');
Route::post('/pickbazar-verify-forget-password-token', 'App\Http\Controllers\ShopUserController@verifyForgetPasswordToken');
Route::post('/pickbazar-reset-password', 'App\Http\Controllers\ShopUserController@resetPassword');
Route::post('/pickbazar-contact', 'App\Http\Controllers\ShopUserController@contactAdmin');
Route::post('/pickbazar-social-login-token', 'App\Http\Controllers\ShopUserController@socialLogin');

Route::apiResource('pickbazar-products', ShopProductController::class, [
    'only' => ['index', 'show']
]);
Route::apiResource('pickbazar-types', ShopTypeController::class, [
    'only' => ['index', 'show']
]);
Route::apiResource('pickbazar-attachments', ShopAttachmentController::class, [
    'only' => ['index', 'show']
]);
Route::apiResource('pickbazar-categories', ShopCategoryController::class, [
    'only' => ['index', 'show']
]);
Route::apiResource('pickbazar-tags', ShopTagController::class, [
    'only' => ['index', 'show']
]);

Route::get('pickbazar-fetch-parent-category', 'App\Http\Controllers\ShopCategoryController@fetchOnlyParent');

Route::apiResource('pickbazar-coupons', ShopCouponController::class, [
    'only' => ['index', 'show']
]);

Route::post('pickbazar-coupons/verify', 'App\Http\Controllers\ShopCouponController@verify');


Route::apiResource('pickbazar-order_status', ShopOrderStatusController::class, [
    'only' => ['index', 'show']
]);

Route::apiResource('pickbazar-attributes', ShopAttributeController::class, [
    'only' => ['index', 'show']
]);

Route::apiResource('pickbazar-all-shop', ShopShopController::class, [
    'only' => ['index', 'show']
]);

Route::apiResource('pickbazar-attribute-values', ShopAttributeValueController::class, [
    'only' => ['index', 'show']
]);

Route::apiResource('pickbazar-settings', ShopSettingsController::class, [
    'only' => ['index']
]);


Route::group(['middleware' => ['can:' . Permission::CUSTOMER, 'auth:sanctum']], function () {
    Route::post('/pickbazar-logout', 'App\Http\Controllers\ShopUserController@logout');
    Route::apiResource('pickbazar-orders', ShopOrderController::class, [
        'only' => ['index', 'show', 'store']
    ]);
    Route::get('pickbazar-orders/tracking_number/{tracking_number}', 'App\Http\Controllers\ShopOrderController@findByTrackingNumber');
    Route::apiResource('pickbazar-attachments', ShopAttachmentController::class, [
        'only' => ['store', 'update', 'destroy']
    ]);
    Route::post('pickbazar-checkout/verify', 'App\Http\Controllers\ShopCheckoutController@verify');
    Route::get('pickbazar-me', 'App\Http\Controllers\ShopUserController@me');
    Route::put('pickbazar-users/{id}', 'App\Http\Controllers\ShopUserController@update');
    Route::post('/pickbazar-change-password', 'App\Http\Controllers\ShopUserController@changePassword');
    Route::apiResource('pickbazar-address', ShopAddressController::class, [
        'only' => ['destroy']
    ]);
});

Route::group(
    ['middleware' => ['permission:' . Permission::STAFF . '|' . Permission::STORE_OWNER, 'auth:sanctum']],
    function () {
        Route::get('pickbazar-analytics', 'App\Http\Controllers\ShopAnalyticsController@analytics');
        Route::apiResource('products', ShopProductController::class, [
            'only' => ['store', 'update', 'destroy']
        ]);
        Route::apiResource('pickbazar-attributes', ShopAttributeController::class, [
            'only' => ['store', 'update', 'destroy']
        ]);
        Route::apiResource('pickbazar-attribute-values', ShopAttributeValueController::class, [
            'only' => ['store', 'update', 'destroy']
        ]);
        Route::apiResource('pickbazar-orders', ShopOrderController::class, [
            'only' => ['update', 'destroy']
        ]);
        Route::get('pickbazar-popular-products', 'App\Http\Controllers\ShopAnalyticsController@popularProducts');
    }
);
Route::group(
    ['middleware' => ['permission:' . Permission::STORE_OWNER, 'auth:sanctum']],
    function () {
        Route::apiResource('pickbazar-all-shop', ShopController::class, [
            'only' => ['store', 'update', 'destroy']
        ]);
        Route::apiResource('pickbazar-withdraws', ShopWithdrawController::class, [
            'only' => ['store', 'index', 'show']
        ]);
        Route::post('pickbazar-users/add-staff', 'App\Http\Controllers\ShopController@addStaff');
        Route::post('pickbazar-users/remove-staff', 'App\Http\Controllers\ShopController@removeStaff');
        Route::get('pickbazar-staffs', 'App\Http\Controllers\ShopUserController@staffs');
        Route::get('pickbazar-my-shops', 'App\Http\Controllers\ShopController@myShops');
    }
);


Route::group(['middleware' => ['permission:' . Permission::SUPER_ADMIN, 'auth:sanctum']], function () {
    Route::apiResource('pickbazar-types', ShopTypeController::class, [
        'only' => ['store', 'update', 'destroy']
    ]);
    Route::apiResource('pickbazar-withdraws', ShopWithdrawController::class, [
        'only' => ['update', 'destroy']
    ]);
    Route::apiResource('pickbazar-categories', ShopCategoryController::class, [
        'only' => ['store', 'update', 'destroy']
    ]);
    Route::apiResource('pickbazar-tags', ShopTagController::class, [
        'only' => ['store', 'update', 'destroy']
    ]);
    Route::apiResource('pickbazar-coupons', ShopCouponController::class, [
        'only' => ['store', 'update', 'destroy']
    ]);
    Route::apiResource('pickbazar-order_status', ShopOrderStatusController::class, [
        'only' => ['store', 'update', 'destroy']
    ]);

    Route::apiResource('pickbazar-settings', ShopSettingsController::class, [
        'only' => ['store']
    ]);
    Route::apiResource('pickbazar-users', ShopUserController::class);
    Route::post('pickbazar-users/ban-user', 'App\Http\Controllers\ShopUserController@banUser');
    Route::post('pickbazar-users/active-user', 'App\Http\Controllers\ShopUserController@activeUser');
    Route::apiResource('pickbazar-taxes', ShopTaxController::class);
    Route::apiResource('pickbazar-shipping', ShopShippingController::class);
    Route::post('pickbazar-approve-shop', 'App\Http\Controllers\ShopController@approveShop');
    Route::post('pickbazar-disapprove-shop', 'App\Http\Controllers\ShopController@disApproveShop');
    Route::post('pickbazar-approve-withdraw', 'App\Http\Controllers\ShopWithdrawController@approveWithdraw');
});
