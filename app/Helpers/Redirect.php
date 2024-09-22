<?php

namespace Luminance\Service\phproute\app\Helpers;

class Redirect
{
    /**
     * @param string $url
     * @param int $status
     * @return void
     * @throws \Exception
     */
    public static function to(string $url, int $status = 301): void
    {
        header('Location: ' . route($url), true, $status);
    }
}