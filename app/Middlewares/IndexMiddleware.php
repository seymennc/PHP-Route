<?php

namespace Luminance\phproute\app\Middlewares;

use Luminance\phproute\app\Requests\Request;

class IndexMiddleware
{
    public function handle(Request $request, \Closure $next)
    {
        echo "Index Middleware";
        return $next($request);
    }
}