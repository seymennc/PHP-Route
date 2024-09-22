<?php

namespace Luminance\phproute\app\Controller;

use Luminance\phproute\app\Requests\Request;

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