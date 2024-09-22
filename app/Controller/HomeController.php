<?php

namespace Luminance\Service\phproute\App\Controller;

use Luminance\Service\phproute\App\Requests\Request;

class HomeController
{
    public function index(): string
    {

        return 'Home Controller';
    }
    public function post(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        return $request->all();
    }
}