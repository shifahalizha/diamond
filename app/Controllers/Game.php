<?php

namespace App\Controllers;

class Game extends BaseController
{
    public function index(): string
    {
        return view('game/userview');
    }
}