<?php

use Illuminate\Support\Facades\Route;



Route::get('/clear', function(){
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
});
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
//Cron Route
Route::get('cron','SiteController@cron')->name('cron');

Route::namespace('Gateway')->prefix('ipn')->name('ipn.')->group(function () {
    Route::post('paypal', 'Paypal\ProcessController@ipn')->name('Paypal');
    Route::get('paypal-sdk', 'PaypalSdk\ProcessController@ipn')->name('PaypalSdk');
    Route::post('perfect-money', 'PerfectMoney\ProcessController@ipn')->name('PerfectMoney');
    Route::post('stripe', 'Stripe\ProcessController@ipn')->name('Stripe');
    Route::post('stripe-js', 'StripeJs\ProcessController@ipn')->name('StripeJs');
    Route::post('stripe-v3', 'StripeV3\ProcessController@ipn')->name('StripeV3');
    Route::post('skrill', 'Skrill\ProcessController@ipn')->name('Skrill');
    Route::post('paytm', 'Paytm\ProcessController@ipn')->name('Paytm');
    Route::post('payeer', 'Payeer\ProcessController@ipn')->name('Payeer');
    Route::post('paystack', 'Paystack\ProcessController@ipn')->name('Paystack');
    Route::post('voguepay', 'Voguepay\ProcessController@ipn')->name('Voguepay');
    Route::get('flutterwave/{trx}/{type}', 'Flutterwave\ProcessController@ipn')->name('Flutterwave');
    Route::post('razorpay', 'Razorpay\ProcessController@ipn')->name('Razorpay');
    Route::post('instamojo', 'Instamojo\ProcessController@ipn')->name('Instamojo');
    Route::get('blockchain', 'Blockchain\ProcessController@ipn')->name('Blockchain');
    Route::get('blockio', 'Blockio\ProcessController@ipn')->name('Blockio');
    Route::post('coinpayments', 'Coinpayments\ProcessController@ipn')->name('Coinpayments');
    Route::post('coinpayments-fiat', 'CoinpaymentsFiat\ProcessController@ipn')->name('CoinpaymentsFiat');
    Route::post('coingate', 'Coingate\ProcessController@ipn')->name('Coingate');
    Route::post('coinbase-commerce', 'CoinbaseCommerce\ProcessController@ipn')->name('CoinbaseCommerce');
    Route::get('mollie', 'Mollie\ProcessController@ipn')->name('Mollie');
    Route::post('cashmaal', 'Cashmaal\ProcessController@ipn')->name('Cashmaal');
});

// User Support Ticket
Route::prefix('ticket')->group(function () {
    Route::get('/', 'TicketController@supportTicket')->name('ticket');
    Route::get('/new', 'TicketController@openSupportTicket')->name('ticket.open');
    Route::post('/create', 'TicketController@storeSupportTicket')->name('ticket.store');
    Route::get('/view/{ticket}', 'TicketController@viewTicket')->name('ticket.view');
    Route::post('/reply/{ticket}', 'TicketController@replyTicket')->name('ticket.reply');
    Route::get('/download/{ticket}', 'TicketController@ticketDownload')->name('ticket.download');
});


/*
|--------------------------------------------------------------------------
| Start Admin Area
|--------------------------------------------------------------------------
*/

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::namespace('Auth')->group(function () {
        Route::get('/', 'LoginController@showLoginForm')->name('login');
        Route::post('/', 'LoginController@login')->name('login');
        Route::get('logout', 'LoginController@logout')->name('logout');
        // Admin Password Reset
        Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.reset');
        Route::post('password/reset', 'ForgotPasswordController@sendResetCodeEmail');
        Route::post('password/verify-code', 'ForgotPasswordController@verifyCode')->name('password.verify.code');
        Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset.form');
        Route::post('password/reset/change', 'ResetPasswordController@reset')->name('password.change');
    });

    Route::middleware('admin')->group(function () {
        Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
        Route::get('profile', 'AdminController@profile')->name('profile');
        Route::post('profile', 'AdminController@profileUpdate')->name('profile.update');
        Route::get('password', 'AdminController@password')->name('password');
        Route::post('password', 'AdminController@passwordUpdate')->name('password.update');



        Route::get('/ammelias-dashboard', 'AdminController@adminDashboard')->name('ammelias.adminDashboard');
        Route::get('/search', 'AdminController@qsSearch')->name('ammelias.qsSearch');
        Route::get('ammelias-contact-list', 'AdminController@contactList')->name('ammelias.contactList');
        Route::get('ammelias-contact-{id}', 'AdminController@contactDetails')->name('ammelias.contactDetails');
        Route::get('ammelias-subscriber-list', 'AdminController@subscriberList')->name('ammelias.subscriberList');
    
        //profile setting
        Route::get('/ammelias-profile','ProfileController@userProfile')->name('ammelias.userProfile');
        Route::get('/ammelias-password-change','ProfileController@passwordChange')->name('ammelias.passwordChange');
        Route::post('/ammelias-update-profile','ProfileController@updateProfile')->name('ammelias.updateProfile');
        Route::post('/ammelias-change-password','ProfileController@changePassword')->name('ammelias.changePassword');
    
        // Setting
        Route::get('ammelias-general-setting', 'SettingController@adminSettings')->name('ammelias.adminSettings');
        Route::get('ammelias-website-settings', 'SettingController@webSettings')->name('ammelias.webSettings');
        Route::get('ammelias-about-us', 'SettingController@aboutSettings')->name('ammelias.aboutSettings');
        Route::post('ammelias-about-us-setting-save', 'SettingController@adminAboutSettingsSave')->name('ammelias.adminAboutSettingsSave');
        Route::post('ammelias-save-setting', 'SettingController@saveSettings')->name('ammelias.saveSettings');
        Route::post('ammelias-save-image-setting', 'SettingController@adminImageUploadSave')->name('ammelias.adminImageUploadSave');
        Route::post('ammelias-save-web-setting', 'SettingController@saveWebSettings')->name('ammelias.saveWebSettings');
        Route::post('ammelias-save-achievement-setting', 'SettingController@saveAchievementSettings')->name('ammelias.saveAchievementSettings');
    
        //User Management
        Route::get('ammelias-user-list', 'UserController@userList')->name('ammelias.userList');
        Route::get('ammelias-add-user', 'UserController@addUser')->name('ammelias.addUser');
        Route::get('ammelias-user-details/{id}', 'UserController@userDetails')->name('ammelias.userDetails');
        Route::get('ammelias-user-edit/{id}', 'UserController@editUser')->name('ammelias.editUser');
        Route::get('ammelias-user-delete/{id}', 'UserController@userDelete')->name('ammelias.userDelete');
        Route::get('ammelias-user-active/{id}', 'UserController@userActivate')->name('ammelias.userActivate');
        Route::get('ammelias-verify-user-email/{id}', 'UserController@userEmailVerify')->name('ammelias.userEmailVerify');
        Route::post('ammelias-user-add-process', 'UserController@userAddProcess')->name('ammelias.userAddProcess');
        Route::post('ammelias-user-update-process', 'UserController@userUpdateProcess')->name('ammelias.userUpdateProcess');

        //Team Category
        Route::get('team-category-list', 'TeamController@teamCategoryList')->name('ammelias.teamCategoryList');
        Route::get('team-category-create', 'TeamController@teamCategoryCreate')->name('ammelias.teamCategoryCreate');
        Route::post('team-category-save', 'TeamController@teamCategorySave')->name('ammelias.teamCategorySave');
        Route::get('team-category-edit/{id}', 'TeamController@teamCategoryEdit')->name('ammelias.teamCategoryEdit');
        Route::get('team-category-delete/{id}', 'TeamController@teamCategoryDelete')->name('ammelias.teamCategoryDelete');
        
        //Team
        Route::get('team-list', 'TeamController@teamList')->name('ammelias.teamList'); 
        Route::get('team-create', 'TeamController@teamCreate')->name('ammelias.teamCreate');
        Route::post('team-save', 'TeamController@teamSave')->name('ammelias.teamSave');
        Route::get('team-edit/{id}', 'TeamController@teamEdit')->name('ammelias.teamEdit');
        Route::get('team-delete/{id}', 'TeamController@teamDelete')->name('ammelias.teamDelete');

        // Service
        Route::get('service-list', 'ServiceController@serviceList')->name('ammelias.serviceList');
        Route::get('service-create', 'ServiceController@serviceCreate')->name('ammelias.serviceCreate');
        Route::post('service-save', 'ServiceController@serviceSave')->name('ammelias.serviceSave');
        Route::get('service-edit/{id}', 'ServiceController@serviceEdit')->name('ammelias.serviceEdit');
        Route::get('service-delete/{id}', 'ServiceController@serviceDelete')->name('ammelias.serviceDelete');

        // Portfolio Category
        Route::get('portfolio-category-list', 'PortfolioController@portfolioCategoryList')->name('ammelias.portfolioCategoryList');
        Route::get('portfolio-category-create', 'PortfolioController@portfolioCategoryCreate')->name('ammelias.portfolioCategoryCreate');
        Route::post('portfolio-category-save', 'PortfolioController@portfolioCategorySave')->name('ammelias.portfolioCategorySave');
        Route::get('portfolio-category-edit/{id}', 'PortfolioController@portfolioCategoryEdit')->name('ammelias.portfolioCategoryEdit');
        Route::get('portfolio-category-delete/{id}', 'PortfolioController@portfolioCategoryDelete')->name('ammelias.portfolioCategoryDelete');

        // Portfolio
        Route::get('portfolio-list', 'PortfolioController@portfolioList')->name('ammelias.portfolioList');
        Route::get('portfolio-create', 'PortfolioController@portfolioCreate')->name('ammelias.portfolioCreate');
        Route::post('portfolio-save', 'PortfolioController@portfolioSave')->name('ammelias.portfolioSave');
        Route::get('portfolio-edit/{id}', 'PortfolioController@portfolioEdit')->name('ammelias.portfolioEdit');
        Route::get('portfolio-delete/{id}', 'PortfolioController@portfolioDelete')->name('ammelias.portfolioDelete');
        Route::get('portfolio-img-delete', 'PortfolioController@deleteUploadedImage')->name('ammelias.deleteUploadedImage');

         // testimonial
        Route::get('testimonial-list', 'TestimonialController@testimonialList')->name('ammelias.testimonialList');
        Route::get('testimonial-create', 'TestimonialController@testimonialCreate')->name('ammelias.testimonialCreate');
        Route::post('testimonial-save', 'TestimonialController@testimonialSave')->name('ammelias.testimonialSave');
        Route::get('testimonial-edit/{id}', 'TestimonialController@testimonialEdit')->name('ammelias.testimonialEdit');
        Route::get('testimonial-delete/{id}', 'TestimonialController@testimonialDelete')->name('ammelias.testimonialDelete');

            // Gallery Category
        Route::get('gallery-category-list', 'GalleryController@galleryCategoryList')->name('ammelias.galleryCategoryList');
        Route::get('gallery-category-create', 'GalleryController@galleryCategoryCreate')->name('ammelias.galleryCategoryCreate');
        Route::post('gallery-category-save', 'GalleryController@galleryCategorySave')->name('ammelias.galleryCategorySave');
        Route::get('gallery-category-edit/{id}', 'GalleryController@galleryCategoryEdit')->name('ammelias.galleryCategoryEdit');
        Route::get('gallery-category-delete/{id}', 'GalleryController@galleryCategoryDelete')->name('ammelias.galleryCategoryDelete');

        // Gallery
        Route::get('gallery-list', 'GalleryController@galleryList')->name('ammelias.galleryList');
        Route::get('gallery-create', 'GalleryController@galleryCreate')->name('ammelias.galleryCreate');
        Route::post('gallery-save', 'GalleryController@gallerySave')->name('ammelias.gallerySave');
        Route::get('gallery-edit/{id}', 'GalleryController@galleryEdit')->name('ammelias.galleryEdit');
        Route::get('gallery-delete/{id}', 'GalleryController@galleryDelete')->name('ammelias.galleryDelete');

        // Pricing plan
        Route::get('plan-list', 'PlanController@planList')->name('ammelias.planList');
        Route::get('plan-create', 'PlanController@planCreate')->name('ammelias.planCreate');
        Route::post('plan-save', 'PlanController@planSave')->name('ammelias.planSave');
        Route::get('plan-edit/{id}', 'PlanController@planEdit')->name('ammelias.planEdit');
        Route::get('plan-delete/{id}', 'PlanController@planDelete')->name('ammelias.planDelete');

        // blog Category
        Route::get('blog-category-list', 'BlogController@blogCategoryList')->name('ammelias.blogCategoryList');
        Route::get('blog-category-create', 'BlogController@blogCategoryCreate')->name('ammelias.blogCategoryCreate');
        Route::post('blog-category-save', 'BlogController@blogCategorySave')->name('ammelias.blogCategorySave');
        Route::get('blog-category-edit/{id}', 'BlogController@blogCategoryEdit')->name('ammelias.blogCategoryEdit');
        Route::get('blog-category-delete/{id}', 'BlogController@blogCategoryDelete')->name('ammelias.blogCategoryDelete');

        // blog
        Route::get('blog-list', 'BlogController@blogList')->name('ammelias.blogList');
        Route::get('blog-create', 'BlogController@blogCreate')->name('ammelias.blogCreate');
        Route::post('blog-save', 'BlogController@blogSave')->name('ammelias.blogSave');
        Route::get('blog-edit/{id}', 'BlogController@blogEdit')->name('ammelias.blogEdit');
        Route::get('blog-delete/{id}', 'BlogController@blogDelete')->name('ammelias.blogDelete');

        Route::get('comment-list/{id}', 'BlogController@commentList')->name('ammelias.commentList');
        Route::get('comment-details/{id}', 'BlogController@commentDetails')->name('ammelias.commentDetails');
        Route::get('comment-approve', 'BlogController@commentApprove')->name('ammelias.commentApprove');

        // menu
        Route::get('ammelias-menu-list', 'MenuController@menuList')->name('ammelias.menuList');
        Route::get('menu-create', 'MenuController@menuCreate')->name('ammelias.menuCreate');
        Route::post('menu-save', 'MenuController@menuSave')->name('ammelias.menuSave');
        Route::get('menu-edit/{id}', 'MenuController@menuEdit')->name('ammelias.menuEdit');
        Route::get('menu-delete/{id}', 'MenuController@menuDelete')->name('ammelias.menuDelete');
        Route::get('change-menu-order', 'MenuController@customMenuOrder')->name('ammelias.customMenuOrder');

        //Notification
        Route::get('notifications','AdminController@notifications')->name('notifications');
        Route::get('notification/read/{id}','AdminController@notificationRead')->name('notification.read');
        Route::get('notifications/read-all','AdminController@readAll')->name('notifications.readAll');

        //Report Bugs
        Route::get('request-report','AdminController@requestReport')->name('request.report');
        Route::post('request-report','AdminController@reportSubmit');

        Route::get('system-info','AdminController@systemInfo')->name('system.info');

        //refer
        Route::get('/referral', 'ReferralController@index')->name('referral.index');
        Route::post('/referral', 'ReferralController@store')->name('store.refer');
        Route::get('/referral-status/{type}', 'ReferralController@referralStatusUpdate')->name('referral.status');


        // Users Manager
        Route::get('users', 'ManageUsersController@allUsers')->name('users.all');
        Route::get('users/active', 'ManageUsersController@activeUsers')->name('users.active');
        Route::get('users/banned', 'ManageUsersController@bannedUsers')->name('users.banned');
        Route::get('users/email-verified', 'ManageUsersController@emailVerifiedUsers')->name('users.email.verified');
        Route::get('users/email-unverified', 'ManageUsersController@emailUnverifiedUsers')->name('users.email.unverified');
        Route::get('users/sms-unverified', 'ManageUsersController@smsUnverifiedUsers')->name('users.sms.unverified');
        Route::get('users/sms-verified', 'ManageUsersController@smsVerifiedUsers')->name('users.sms.verified');
        Route::get('users/with-balance', 'ManageUsersController@usersWithBalance')->name('users.with.balance');

        Route::get('users/{scope}/search', 'ManageUsersController@search')->name('users.search');
        Route::get('user/detail/{id}', 'ManageUsersController@detail')->name('users.detail');
        Route::post('user/update/{id}', 'ManageUsersController@update')->name('users.update');
        Route::post('user/add-sub-balance/{id}', 'ManageUsersController@addSubBalance')->name('users.add.sub.balance');
        Route::get('user/send-email/{id}', 'ManageUsersController@showEmailSingleForm')->name('users.email.single');
        Route::post('user/send-email/{id}', 'ManageUsersController@sendEmailSingle')->name('users.email.single');
        Route::get('user/login/{id}', 'ManageUsersController@login')->name('users.login');
        Route::get('user/transactions/{id}', 'ManageUsersController@transactions')->name('users.transactions');
        Route::get('user/deposits/{id}', 'ManageUsersController@deposits')->name('users.deposits');
        Route::get('user/deposits/via/{method}/{type?}/{userId}', 'ManageUsersController@depositViaMethod')->name('users.deposits.method');
        Route::get('user/withdrawals/{id}', 'ManageUsersController@withdrawals')->name('users.withdrawals');
        Route::get('user/withdrawals/via/{method}/{type?}/{userId}', 'ManageUsersController@withdrawalsViaMethod')->name('users.withdrawals.method');
        // Login History
        Route::get('users/login/history/{id}', 'ManageUsersController@userLoginHistory')->name('users.login.history.single');

        Route::get('users/send-email', 'ManageUsersController@showEmailAllForm')->name('users.email.all');
        Route::post('users/send-email', 'ManageUsersController@sendEmailAll')->name('users.email.send');
        Route::get('users/email-log/{id}', 'ManageUsersController@emailLog')->name('users.email.log');
        Route::get('users/email-details/{id}', 'ManageUsersController@emailDetails')->name('users.email.details');

        // Subscriber
        Route::get('subscriber', 'SubscriberController@index')->name('subscriber.index');
        Route::get('subscriber/send-email', 'SubscriberController@sendEmailForm')->name('subscriber.sendEmail');
        Route::post('subscriber/remove', 'SubscriberController@remove')->name('subscriber.remove');
        Route::post('subscriber/send-email', 'SubscriberController@sendEmail')->name('subscriber.sendEmail');

        Route::get('user/wins/{id}', 'ManageUsersController@wins')->name('users.wins');
        Route::get('user/tickets/{id}', 'ManageUsersController@tickets')->name('users.tickets');
        Route::get('user/tickets/search/{id}', 'ManageUsersController@ticketsSearch')->name('users.tickets.search');
        Route::get('user/referrals/{id}', 'ManageUsersController@referrals')->name('users.referrals');

        Route::get('user/commissions/deposit/{id}', 'ManageUsersController@referralCommissionsDeposit')->name('users.commissions.deposit');
        Route::get('user/commissions/buy/{id}', 'ManageUsersController@referralCommissionsBuy')->name('users.commissions.buy');
        Route::get('user/commissions/win/{id}', 'ManageUsersController@referralCommissionsWin')->name('users.commissions.win');

        //Manage Lottery
        Route::get('lotteries','LotteryController@index')->name('lottery.index');
        Route::get('lotteries/create','LotteryController@create')->name('lottery.create');
        Route::post('store','LotteryController@store')->name('lottery.store');
        Route::get('edit/{id}','LotteryController@update')->name('lottery.edit');
        Route::post('update/{id}','LotteryController@edit')->name('lottery.update');
        Route::get('status/{id}','LotteryController@status')->name('lottery.status');
        Route::get('lottery/winBonus/{id}','LotteryController@winBonus')->name('lottery.winBonus');
        Route::post('lottery/winBonus/bonus','LotteryController@bonus')->name('lottery.bonus');

        //Lottery Phase
        Route::get('lottery/phase','LotteryController@phases')->name('lottery.phase.index');
        Route::post('lottery/phase/create','LotteryController@phaseCreate')->name('lottery.phase.create');
        Route::post('lottery/phase/update/{id}','LotteryController@phaseUpdate')->name('lottery.phase.update');
        Route::get('lottery/phase/status/{id}','LotteryController@phaseStatus')->name('lottery.phase.status');
        Route::get('lottery/phase/status/{id}','LotteryController@phaseStatus')->name('lottery.phase.status');
        Route::get('lottery/phase/{loottery_id}','LotteryController@lotteryPhase')->name('lottery.phase.singleLottery');

        //Draw
        Route::get('lottery/draw','DrawController@manual')->name('lottery.draw.manual');
        Route::post('lottery/draw/win/{id}','DrawController@draw')->name('lottery.draw.win');
        Route::get('lottery/find/ticket/{id}','DrawController@findTicket')->name('lottery.draw.findTicket');

        // Deposit Gateway
        Route::name('gateway.')->prefix('gateway')->group(function(){
            // Automatic Gateway
            Route::get('automatic', 'GatewayController@index')->name('automatic.index');
            Route::get('automatic/edit/{alias}', 'GatewayController@edit')->name('automatic.edit');
            Route::post('automatic/update/{code}', 'GatewayController@update')->name('automatic.update');
            Route::post('automatic/remove/{code}', 'GatewayController@remove')->name('automatic.remove');
            Route::post('automatic/activate', 'GatewayController@activate')->name('automatic.activate');
            Route::post('automatic/deactivate', 'GatewayController@deactivate')->name('automatic.deactivate');


            // Manual Methods
            Route::get('manual', 'ManualGatewayController@index')->name('manual.index');
            Route::get('manual/new', 'ManualGatewayController@create')->name('manual.create');
            Route::post('manual/new', 'ManualGatewayController@store')->name('manual.store');
            Route::get('manual/edit/{alias}', 'ManualGatewayController@edit')->name('manual.edit');
            Route::post('manual/update/{id}', 'ManualGatewayController@update')->name('manual.update');
            Route::post('manual/activate', 'ManualGatewayController@activate')->name('manual.activate');
            Route::post('manual/deactivate', 'ManualGatewayController@deactivate')->name('manual.deactivate');
        });


        // DEPOSIT SYSTEM
        Route::name('deposit.')->prefix('deposit')->group(function(){
            Route::get('/', 'DepositController@deposit')->name('list');
            Route::get('pending', 'DepositController@pending')->name('pending');
            Route::get('rejected', 'DepositController@rejected')->name('rejected');
            Route::get('approved', 'DepositController@approved')->name('approved');
            Route::get('successful', 'DepositController@successful')->name('successful');
            Route::get('details/{id}', 'DepositController@details')->name('details');

            Route::post('reject', 'DepositController@reject')->name('reject');
            Route::post('approve', 'DepositController@approve')->name('approve');
            Route::get('via/{method}/{type?}', 'DepositController@depositViaMethod')->name('method');
            Route::get('/{scope}/search', 'DepositController@search')->name('search');
            Route::get('date-search/{scope}', 'DepositController@dateSearch')->name('dateSearch');

        });


        // WITHDRAW SYSTEM
        Route::name('withdraw.')->prefix('withdraw')->group(function(){
            Route::get('pending', 'WithdrawalController@pending')->name('pending');
            Route::get('approved', 'WithdrawalController@approved')->name('approved');
            Route::get('rejected', 'WithdrawalController@rejected')->name('rejected');
            Route::get('log', 'WithdrawalController@log')->name('log');
            Route::get('via/{method_id}/{type?}', 'WithdrawalController@logViaMethod')->name('method');
            Route::get('{scope}/search', 'WithdrawalController@search')->name('search');
            Route::get('date-search/{scope}', 'WithdrawalController@dateSearch')->name('dateSearch');
            Route::get('details/{id}', 'WithdrawalController@details')->name('details');
            Route::post('approve', 'WithdrawalController@approve')->name('approve');
            Route::post('reject', 'WithdrawalController@reject')->name('reject');


            // Withdraw Method
            Route::get('method/', 'WithdrawMethodController@methods')->name('method.index');
            Route::get('method/create', 'WithdrawMethodController@create')->name('method.create');
            Route::post('method/create', 'WithdrawMethodController@store')->name('method.store');
            Route::get('method/edit/{id}', 'WithdrawMethodController@edit')->name('method.edit');
            Route::post('method/edit/{id}', 'WithdrawMethodController@update')->name('method.update');
            Route::post('method/activate', 'WithdrawMethodController@activate')->name('method.activate');
            Route::post('method/deactivate', 'WithdrawMethodController@deactivate')->name('method.deactivate');
        });

        // Report
        Route::get('report/transaction', 'ReportController@transaction')->name('report.transaction');
        Route::get('report/transaction/search', 'ReportController@transactionSearch')->name('report.transaction.search');
        Route::get('report/login/history', 'ReportController@loginHistory')->name('report.login.history');
        Route::get('report/login/ipHistory/{ip}', 'ReportController@loginIpHistory')->name('report.login.ipHistory');
        Route::get('report/email/history', 'ReportController@emailHistory')->name('report.email.history');

        //Commission Report
        Route::get('report/commissions/deposit', 'ReportController@commissionsDeposit')->name('report.commissions.deposit');
        Route::get('report/commissions/buy', 'ReportController@commissionsBuy')->name('report.commissions.buy');
        Route::get('report/commissions/win', 'ReportController@commissionsWin')->name('report.commissions.win');
        Route::get('report/commissions/search', 'ReportController@commissionsSearch')->name('report.commissions.search');

        //winners
        Route::get('report/winners','ReportController@winners')->name('report.winners');
        Route::get('report/winners/search','ReportController@winnerSearch')->name('report.winners.search');

        //Salled Ticket
        Route::get('report/lottery/tickets','ReportController@tickets')->name('report.lotTick');
        Route::get('report/lottery/tickets/search', 'ReportController@lotterySearch')->name('report.lotTick.search');

        // Admin Support
        Route::get('tickets', 'SupportTicketController@tickets')->name('ticket');
        Route::get('tickets/pending', 'SupportTicketController@pendingTicket')->name('ticket.pending');
        Route::get('tickets/closed', 'SupportTicketController@closedTicket')->name('ticket.closed');
        Route::get('tickets/answered', 'SupportTicketController@answeredTicket')->name('ticket.answered');
        Route::get('tickets/view/{id}', 'SupportTicketController@ticketReply')->name('ticket.view');
        Route::post('ticket/reply/{id}', 'SupportTicketController@ticketReplySend')->name('ticket.reply');
        Route::get('ticket/download/{ticket}', 'SupportTicketController@ticketDownload')->name('ticket.download');
        Route::post('ticket/delete', 'SupportTicketController@ticketDelete')->name('ticket.delete');


        // Language Manager
        Route::get('/language', 'LanguageController@langManage')->name('language.manage');
        Route::post('/language', 'LanguageController@langStore')->name('language.manage.store');
        Route::post('/language/delete/{id}', 'LanguageController@langDel')->name('language.manage.del');
        Route::post('/language/update/{id}', 'LanguageController@langUpdate')->name('language.manage.update');
        Route::get('/language/edit/{id}', 'LanguageController@langEdit')->name('language.key');
        Route::post('/language/import', 'LanguageController@langImport')->name('language.importLang');



        Route::post('language/store/key/{id}', 'LanguageController@storeLanguageJson')->name('language.store.key');
        Route::post('language/delete/key/{id}', 'LanguageController@deleteLanguageJson')->name('language.delete.key');
        Route::post('language/update/key/{id}', 'LanguageController@updateLanguageJson')->name('language.update.key');



        // General Setting
        Route::get('general-setting', 'GeneralSettingController@index')->name('setting.index');
        Route::post('general-setting', 'GeneralSettingController@update')->name('setting.update');
        Route::get('optimize', 'GeneralSettingController@optimize')->name('setting.optimize');

        // Logo-Icon
        Route::get('setting/logo-icon', 'GeneralSettingController@logoIcon')->name('setting.logo.icon');
        Route::post('setting/logo-icon', 'GeneralSettingController@logoIconUpdate')->name('setting.logo.icon');

        //Custom CSS
        Route::get('custom-css','GeneralSettingController@customCss')->name('setting.custom.css');
        Route::post('custom-css','GeneralSettingController@customCssSubmit');


        //Cookie
        Route::get('cookie','GeneralSettingController@cookie')->name('setting.cookie');
        Route::post('cookie','GeneralSettingController@cookieSubmit');


        // Plugin
        Route::get('extensions', 'ExtensionController@index')->name('extensions.index');
        Route::post('extensions/update/{id}', 'ExtensionController@update')->name('extensions.update');
        Route::post('extensions/activate', 'ExtensionController@activate')->name('extensions.activate');
        Route::post('extensions/deactivate', 'ExtensionController@deactivate')->name('extensions.deactivate');



        // Email Setting
        Route::get('email-template/global', 'EmailTemplateController@emailTemplate')->name('email.template.global');
        Route::post('email-template/global', 'EmailTemplateController@emailTemplateUpdate')->name('email.template.global');
        Route::get('email-template/setting', 'EmailTemplateController@emailSetting')->name('email.template.setting');
        Route::post('email-template/setting', 'EmailTemplateController@emailSettingUpdate')->name('email.template.setting');
        Route::get('email-template/index', 'EmailTemplateController@index')->name('email.template.index');
        Route::get('email-template/{id}/edit', 'EmailTemplateController@edit')->name('email.template.edit');
        Route::post('email-template/{id}/update', 'EmailTemplateController@update')->name('email.template.update');
        Route::post('email-template/send-test-mail', 'EmailTemplateController@sendTestMail')->name('email.template.test.mail');


        // SMS Setting
        Route::get('sms-template/global', 'SmsTemplateController@smsTemplate')->name('sms.template.global');
        Route::post('sms-template/global', 'SmsTemplateController@smsTemplateUpdate')->name('sms.template.global');
        Route::get('sms-template/setting','SmsTemplateController@smsSetting')->name('sms.templates.setting');
        Route::post('sms-template/setting', 'SmsTemplateController@smsSettingUpdate')->name('sms.template.setting');
        Route::get('sms-template/index', 'SmsTemplateController@index')->name('sms.template.index');
        Route::get('sms-template/edit/{id}', 'SmsTemplateController@edit')->name('sms.template.edit');
        Route::post('sms-template/update/{id}', 'SmsTemplateController@update')->name('sms.template.update');
        Route::post('email-template/send-test-sms', 'SmsTemplateController@sendTestSMS')->name('sms.template.test.sms');

        // SEO
        Route::get('seo', 'FrontendController@seoEdit')->name('seo');


        // Frontend
        Route::name('frontend.')->prefix('frontend')->group(function () {


            Route::get('templates', 'FrontendController@templates')->name('templates');
            Route::post('templates', 'FrontendController@templatesActive')->name('templates.active');


            Route::get('frontend-sections/{key}', 'FrontendController@frontendSections')->name('sections');
            Route::post('frontend-content/{key}', 'FrontendController@frontendContent')->name('sections.content');
            Route::get('frontend-element/{key}/{id?}', 'FrontendController@frontendElement')->name('sections.element');
            Route::post('remove', 'FrontendController@remove')->name('remove');

            // Page Builder
            Route::get('manage-pages', 'PageBuilderController@managePages')->name('manage.pages');
            Route::post('manage-pages', 'PageBuilderController@managePagesSave')->name('manage.pages.save');
            Route::post('manage-pages/update', 'PageBuilderController@managePagesUpdate')->name('manage.pages.update');
            Route::post('manage-pages/delete', 'PageBuilderController@managePagesDelete')->name('manage.pages.delete');
            Route::get('manage-section/{id}', 'PageBuilderController@manageSection')->name('manage.section');
            Route::post('manage-section/{id}', 'PageBuilderController@manageSectionUpdate')->name('manage.section.update');
        });
    });
});




/*
|--------------------------------------------------------------------------
| Start User Area
|--------------------------------------------------------------------------
*/


Route::name('user.')->group(function () {
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login');
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');

    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register')->middleware('regStatus');
    Route::post('check-mail', 'Auth\RegisterController@checkUser')->name('checkUser');

    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetCodeEmail')->name('password.email');
    Route::get('password/code-verify', 'Auth\ForgotPasswordController@codeVerify')->name('password.code.verify');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/verify-code', 'Auth\ForgotPasswordController@verifyCode')->name('password.verify.code');
});

Route::name('user.')->prefix('user')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('authorization', 'AuthorizationController@authorizeForm')->name('authorization');
        Route::get('resend-verify', 'AuthorizationController@sendVerifyCode')->name('send.verify.code');
        Route::post('verify-email', 'AuthorizationController@emailVerification')->name('verify.email');
        Route::post('verify-sms', 'AuthorizationController@smsVerification')->name('verify.sms');
        Route::post('verify-g2fa', 'AuthorizationController@g2faVerification')->name('go2fa.verify');

        Route::middleware(['checkStatus'])->group(function () {
            Route::get('dashboard', 'UserController@home')->name('home');

            Route::get('profile-setting', 'UserController@profile')->name('profile.setting');
            Route::post('profile-setting', 'UserController@submitProfile');
            Route::get('change-password', 'UserController@changePassword')->name('change.password');
            Route::post('change-password', 'UserController@submitPassword');

            //2FA
            Route::get('twofactor', 'UserController@show2faForm')->name('twofactor');
            Route::post('twofactor/enable', 'UserController@create2fa')->name('twofactor.enable');
            Route::post('twofactor/disable', 'UserController@disable2fa')->name('twofactor.disable');


            // Deposit
            Route::any('/deposit', 'Gateway\PaymentController@deposit')->name('deposit');
            Route::post('deposit/insert', 'Gateway\PaymentController@depositInsert')->name('deposit.insert');
            Route::get('deposit/preview', 'Gateway\PaymentController@depositPreview')->name('deposit.preview');
            Route::get('deposit/confirm', 'Gateway\PaymentController@depositConfirm')->name('deposit.confirm');
            Route::get('deposit/manual', 'Gateway\PaymentController@manualDepositConfirm')->name('deposit.manual.confirm');
            Route::post('deposit/manual', 'Gateway\PaymentController@manualDepositUpdate')->name('deposit.manual.update');
            Route::get('deposit/history', 'UserController@depositHistory')->name('deposit.history');

            // Withdraw
            Route::get('/withdraw', 'UserController@withdrawMoney')->name('withdraw');
            Route::post('/withdraw', 'UserController@withdrawStore')->name('withdraw.money');
            Route::get('/withdraw/preview', 'UserController@withdrawPreview')->name('withdraw.preview');
            Route::post('/withdraw/preview', 'UserController@withdrawSubmit')->name('withdraw.submit');
            Route::get('/withdraw/history', 'UserController@withdrawLog')->name('withdraw.history');

            // Transaction
            Route::get('transactions', 'UserController@transactions')->name('transactions');

            //Buy Ticket
            Route::post('buy-ticket','UserController@buyTicket')->name('buyTicket');

            //Tickets
            Route::get('tickets','UserController@tickets')->name('tickets');

            //Wins
            Route::get('wins','UserController@wins')->name('wins');

            Route::get('referral/commissions/deposit', 'UserController@commissionsDeposit')->name('commissions.deposit');
            Route::get('referral/commissions/buy', 'UserController@commissionsBuy')->name('commissions.buy');
            Route::get('referral/commissions/win', 'UserController@commissionsWin')->name('commissions.win');

            // Referred Users
            Route::get('referred-users/{level?}', 'UserController@referredUsers')->name('referred');
        });
    });
});




Route::get('/contact', 'SiteController@contact')->name('contact');
Route::post('/contact', 'SiteController@contactSubmit');
Route::get('/change/{lang?}', 'SiteController@changeLanguage')->name('lang');

Route::get('links/{id}/{slug}', 'SiteController@links')->name('links');

Route::get('lottery','SiteController@lottery')->name('lottery');
Route::get('lottery-buy/{id}','SiteController@lotterySingle')->name('lotterySingle');

Route::get('/cookie/accept', 'SiteController@cookieAccept')->name('cookie.accept');

Route::post('subscribe','SiteController@subscribe')->name('subscribe');

Route::get('blog','SiteController@blog')->name('blog');
Route::get('blog/{id}/{slug}', 'SiteController@blogDetails')->name('blog.details');

Route::get('placeholder-image/{size}', 'SiteController@placeholderImage')->name('placeholder.image');


Route::get('/{slug}', 'SiteController@pages')->name('pages');
Route::get('/', 'SiteController@index')->name('home');

// Route::match($methods, $uri, $callback)
// Route::any($uri, $callback)

// Route::get('welcome', function () {
//     return "Xin chao";
// });
//Route::get('greeting', [\App\Http\Controllers\GreetingController::class, 'greet']);
//Route::redirect($uri, $redirectTo, $status)
//Route::view($uri, $viewName, $data)
/*
Route::prefix('greeting')->group(function () {
	// work for: /greeting/vn
    Route::get('vn', function () {
        return "Xin chào!";
    });

    // work for: /greeting/en
    Route::get('en', function () {
        return "Hello!";
    });

    // work for: /greeting/cn
    Route::get('cn', function () {
        return "你好!";
    });
});
*/
/*
Route::get('user/{id}', function ($id) {
    return "User id: $id";
});
Route::get('user/{id?}', function ($id = null) {
    if (!$id) {
        return "Xin mời nhập id";
    }

    return "User id: $id";
});
Route::get('user/{id}/comment/{commentId}', function ($id, $commentId) {
    return "User id: $id and comment id: $commentId";
});
Route::get('user/{id}/comment/{commentId}', function ($id, $commentId) {
    return "User id: $id and comment id: $commentId";
})->where('id', '[0-9]+')->where('commentId', '[0-9]+');

Route::get('user/{id}/comment/{commentId}', function ($id, $commentId) {
    return "User id: $id and comment id: $commentId";
})->where(['id' => '[0-9]+', 'commentId' => '[0-9]+']);

whereNumber($name): tuong duong voi where($name, '[0-9]+')
whereAlpha($name): tuong duong voi where($name, '[a-zA-Z]+')
whereAlphaNumeric($name): tuong duong voi where($name, '[a-zA-Z0-9]+')
whereUuid($name): tuong duong voi where($name, '[\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}') (định dạng UUID)


*/
/*
DI
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users', function (Request $request) {
    // ...
});
Route::get('user/{id}/comment/{commentId}', function (Request $request, $id, $commentId) {
    return "User id: $id and comment id: $commentId";
})->where(['id' => '[0-9]+', 'commentId' => '[0-9]+']);
*/

/*
Route::get('/user/profile', function () {
    //
})->name('profile');

Route::prefix('user')->as('user.')->group(function () {
    Route::get('profile', function () {
        //
    })->name('profile');

    Route::get('setting', function () {
        //
    })->name('setting');
});
Route::prefix('user')->name('user.')->group(function () {
    Route::get('profile', function () {
        //
    })->name('profile');

    Route::get('setting', function () {
        //
    })->name('setting');
});
*/

/*
Route::middleware(['auth'])->group(function () {
    Route::get('/user/profile', function () {
        //
    });
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
*/
/*
Route::domain('{account}.example.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
        //
    });
});
*/

/*
use App\Models\User;

Route::get('/users/{user}', function (User $user) {
    return $user->email;
});
*/

/*
CSRF token
app/Http/Middleware/VerifyCsrfToken.php


http header voi header name la X-XSRF-TOKEN.
parameter string voi name la _token.

csrf_token().
csrf_field().

@csrf
<form action="/example" method="POST">
    @csrf
</form>


Route::current()
Route::currentRouteName() 
Route::currentRouteAction()

*/