<?php

use Luminance\Service\phproute\config\Config;
use Luminance\Service\phproute\Route\Route;

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

/**
 * @param string $params
 * @return string
 */
function config(string $params): string
{
    return Config::handle($params);
}