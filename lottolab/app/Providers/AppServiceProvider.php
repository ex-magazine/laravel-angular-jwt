<?php

namespace App\Providers;

use App\Models\AdminNotification;
use App\Models\Deposit;
use App\Models\Frontend;
use App\Models\GeneralSetting;
use App\Models\Language;
use App\Models\Page;
use App\Models\SupportTicket;
use App\Models\User;
use App\Models\Withdrawal;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    /*
    public function register()
    {
        $this->app['request']->server->set('HTTPS', true);
    }
    */
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
        Blade::withoutDoubleEncoding();
        Blade::directive('datetime', function ($expression) {
            return "<?php echo ($expression)->format('d-m-y h:i'); ?>";
        });

        Blade::if('disk', function ($value) {
            return config('filesystems.default') === $value;
        });

        @disk('local')
            <!-- The application is using the local disk... -->
        @elsedisk('s3')
            <!-- The application is using the s3 disk... -->
        @else
            <!-- The application is using some other disk... -->
        @enddisk

        @unlessdisk('local')
            <!-- The application is not using the local disk... -->
        @enddisk
        */
        $activeTemplate = activeTemplate();
        $general = GeneralSetting::first();
        $viewShare['general'] = $general;
        $viewShare['activeTemplate'] = $activeTemplate;
        $viewShare['activeTemplateTrue'] = activeTemplate(true);
        $viewShare['language'] = Language::all();
        $viewShare['pages'] = Page::where('tempname',$activeTemplate)->where('slug','!=','home')->get();
        view()->share($viewShare);
        

        view()->composer('admin.partials.sidenav', function ($view) {
            $view->with([
                'banned_users_count'           => User::banned()->count(),
                'email_unverified_users_count' => User::emailUnverified()->count(),
                'sms_unverified_users_count'   => User::smsUnverified()->count(),
                'pending_ticket_count'         => SupportTicket::whereIN('status', [0,2])->count(),
                'pending_deposits_count'    => Deposit::pending()->count(),
                'pending_withdraw_count'    => Withdrawal::pending()->count(),
            ]);
        });

        view()->composer('admin.partials.topnav', function ($view) {
            $view->with([
                'adminNotifications'=>AdminNotification::where('read_status',0)->with('user')->orderBy('id','desc')->get(),
            ]);
        });

        view()->composer('partials.seo', function ($view) {
            $seo = Frontend::where('data_keys', 'seo.data')->first();
            $view->with([
                'seo' => $seo ? $seo->data_values : $seo,
            ]);
        });

        if($general->force_ssl){
            \URL::forceScheme('https');
        }


        Paginator::useBootstrap();

        /*
        Schema::defaultStringLength(191);
        Validator::extend('phone_number', function ($attribute, $value, $parameters, $validator) {
            $first = substr($value, 0, 1);
            if ($first == '+') {
                $value = substr($value, 1);
            }
            return ctype_digit($value);
        });
        Validator::extend('strong_pass', function($attribute, $value, $parameters, $validator) {
            return is_string($value) && preg_match('/^.*(?=.{3,})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\d\X]).*$/', $value);
        });

        Passport::routes();

       
        $this->commands([
            InstallCommand::class,
            ClientCommand::class,
            KeysCommand::class,
        ]);
        */
    }
}
