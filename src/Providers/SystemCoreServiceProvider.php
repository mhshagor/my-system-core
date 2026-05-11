<?php

declare(strict_types=1);

namespace SystemCore\Providers;

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\ServiceProvider;
use SystemCore\Http\Middleware\CoreMiddleware;

class SystemCoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     */
    public function boot(Kernel $kernel): void
    {
        // Global middleware auto-inject
        $kernel->pushMiddleware(CoreMiddleware::class);
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
}
