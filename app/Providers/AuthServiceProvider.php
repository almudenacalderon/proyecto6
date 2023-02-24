<?php

namespace App\Providers;
use App\Models\Customer;
use App\Policies\CustomerPolicy;
use App\Models\Rutina;
use App\Policies\RutinaPolicy;
use App\Models\Ejercicio;
use App\Policies\EjercicioPolicy;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Customer::class => CustomerPolicy::class,
        Rutina::class => RutinaPolicy::class,
        Ejercicio::class => EjercicioPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

       // ResetPassword::createUrlUsing(function ($notifiable, $token) {
       // return config('app.frontend_url')."/password-reset/$token?email={$notifiable->getEmailForPasswordReset()}";
        //});

        //
    }
}
