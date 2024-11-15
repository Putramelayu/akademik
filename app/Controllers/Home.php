<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function kelas(): string
    {
        return "Kelas 22 MI 3";
    }

    public function kampus(): string
    {
        return 'Amik Mahaputra Riau';
    }
}
