<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Spatie\Permission\Traits\HasRoles;
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

//        Gate::before(function ($user, $ability) {
//           return $user->hasRole('Super-Admin')? true : null;
//        });

        Gate::before(function ($user, $ability) {
            if ($user->hasRole('super-admin')) {
                return true;
            }else{
                return null;
            }
        });
    }
}
