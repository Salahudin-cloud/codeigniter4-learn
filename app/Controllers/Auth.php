<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index(): string
    {
        return view('login');
    }
}
