<?php

namespace Luminance\phproute\app\Middlewares;

use Luminance\phproute\app\Kernel;

class Middlewares extends Kernel
{
    public static array $default = [
        //TODO: Add your default middlewares here
    ];
    public static array $middleware = [
        //TODO: Add your middlewares here
        'index' => IndexMiddleware::class
    ];
}