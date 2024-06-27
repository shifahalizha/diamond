<?php

namespace App\Controllers;

class shop extends BaseController
{
    public function index(): string
    {
        return view('shop');
    }
}
