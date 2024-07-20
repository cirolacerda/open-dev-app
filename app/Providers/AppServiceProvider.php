<?php

namespace App\Providers;

use App\RoleEnum;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //Define gate before dando acesso ao admin
        Gate::before(function($user){
            if($user->role_id == RoleEnum::ADMIN){
                return true;
            }
        });

        //Define gate para acesso a busca do dev e listagem
        Gate::define('search-devs', function($user) {
            return $user->role_id == RoleEnum::CTO ||
                   $user->role_id == RoleEnum::ASSISTANT;
        });

        //Define gate para acesso ao gerenciamento e cadastro de assistentes
        Gate::define('manage-assistants', function ($user){
            return $user->role_id == RoleEnum::CTO;
        });
    }
}
