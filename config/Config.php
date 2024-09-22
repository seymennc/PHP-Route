<?php

namespace Luminance\Service\phproute\config;

class Config
{
    public static function handle(string $params)
    {
        $exp = explode('.', $params);
        $config = require $exp[0] . '.php';
        return $config[$exp[1]];
    }
}