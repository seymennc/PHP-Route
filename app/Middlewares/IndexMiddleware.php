<?php

namespace Luminance\Service\phproute\app\Middlewares;

use Luminance\Service\phproute\app\Requests\Request;

class IndexMiddleware
{
    public function handle(Request $request, \Closure $next)
    {
        //TODO: Implement Middleware

        echo "Index Middleware";
        return $next($request);
    }
}