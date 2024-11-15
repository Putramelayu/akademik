<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dosen extends BaseController
{
    public function index()
    {
        //
    }

    public function EditDosen($nidn) {
        return "NIDN = $nidn, Nama = Darmanta Sukrianto,M.kom";
    }
}
