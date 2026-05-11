<?php

declare(strict_types=1);

namespace SystemCore\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CoreMiddleware
{
    /**
     * Handle an incoming request.
     * Simple pass-through - validation removed
     */
    public function handle(Request $request, Closure $next): Response
    {
        dd('ok');
        return $next($request);
    }
}
