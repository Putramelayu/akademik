<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'menu' => 'Dashboard',
            'submenu' => '',
            'page'  => 'v_dashboard'
        ];
        return view('v_template', $data);
    }
}
