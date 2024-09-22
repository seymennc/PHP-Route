<?php

namespace Luminance\phproute\Route;

class Query
{

    /**
     * @return void
     * @throws \Exception
     */
    public static function hasRoute(): void
    {
        if (!Route::$hasRoute) {
            die(throw new \Exception('This route not found'));
        }
    }

    /**
     * @param $httpMethod
     * @param $method
     * @return void
     * @throws \Exception
     */
    public static function hasPost($httpMethod, $method): void
    {
        var_dump($httpMethod, $method);
        if ($httpMethod !== $method) {
            die(throw new \Exception("The page only works with a specific POST method"));
        }

    }

    /**
     * @return string
     */
    public static function getMethods(): string
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    /**
     * @return array|string
     */
    public static function getUrl(): array|string
    {
        return str_replace(getenv("BASE_PATH"), '', $_SERVER['REQUEST_URI']);
    }
}