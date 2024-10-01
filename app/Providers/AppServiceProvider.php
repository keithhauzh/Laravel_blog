<?php

namespace App\Providers;

// load the policy
use App\Policies\PostPolicy;
// load the model for the policy
use App\Models\Post;
// load the gate library
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
        // apply policy
        Gate::policy( Post::class, PostPolicy::class );
    }
}
