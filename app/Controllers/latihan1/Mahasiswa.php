<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $data = [
            'namamhs' => 'Darmanta Sukrianto, M.Kom, Catriwati, M.M, Mukhtar, M.Kom',
            'title'     => 'Latihan MVC',
            'subtitle' => 'Data Mahasiswa'
        ];
        return view('v_mahasiswa', $data);
    }
    
}
