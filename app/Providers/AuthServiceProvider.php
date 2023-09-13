<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('panitia-access', function($user){
        return $user->level === 'panitia';
        });

        Gate::define('mhs-access', function($user){
            return $user->level === 'mhs';
       });

       Gate::define('dpl-access', function($user){
        return $user->level === 'dpl';
       });

       Gate::define('instansi-access', function($user){
        return $user->level === 'instansi';
   });
    }
}
