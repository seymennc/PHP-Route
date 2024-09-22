<?php

namespace Luminance\Service\phproute\app;

use Luminance\Service\phproute\app\Middlewares\Middlewares;

class Kernel
{

    /**
     * @param string $name
     * @return string
     * @throws \Exception
     */
    public static function getMiddlewareClass(string $name): string
    {
        if (!isset(Middlewares::$middleware[$name])) {
            throw new \Exception("Middleware bulunamadı: {$name}");
        }
        return Middlewares::$middleware[$name];
    }

    /**
     * @return array
     */
    public static function getDefaultMiddleware(): array
    {
        return Middlewares::$default;
    }
}