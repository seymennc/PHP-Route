<?php

use Luminance\phproute\Route\Route;

/**
 * @param string $name
 * @param string $params
 * @return string
 * @throws Exception
 */
function route(string $name, string $params = ''): string
{
    return Route::run($name, $params);
}