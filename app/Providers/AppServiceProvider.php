<?php

namespace App\Providers;

use App\Models\User;
use App\Services\Newsletter;
use MailchimpMarketing\ApiClient;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind(Newsletter::class, function () {

            $client = new ApiClient();

            $client->setConfig([

                'apiKey' => config('services.mailchimp.key'),
                'server' => 'us5'
            ]);

            return new Newsletter($client);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       
        Gate::define('admin', function (User $user) {
           
            return $user->name == 'Kevin King';

        });
        
        Blade::if('admin', function () {
            return request()->user()?->can('admin');
        });
    }
}
