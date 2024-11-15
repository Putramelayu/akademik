<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelLaporan;

class Laporan extends BaseController
{
    public function __construct() {
        $this->ModelLaporan = new ModelLaporan();
    }
    
    public function index()
    {
        $data = [
            'menu' => 'Laporan',
            'submenu' => 'Data Laporan',
            'page' => 'laporan/datalaporan',
            'laporan' => $this->ModelLaporan->TampilData()
        ];
        return view('v_template',$data);
    }
    public function tambah()
    {
        $data = [
            'menu' => 'Laporan',
            'submenu' => 'Tambah Data Laporan',
            'page' => 'laporan/tambahlaporan',
        ];
        return view('v_template',$data);
    }
    public function simpan()
    {
        $data =[
            'judul_laporan007' => $this->request->getPost('judul_laporan007'),
            'deskripsi_laporan007' => $this->request->getPost('deskripsi_laporan007'),
            'tgl_laporan007' => $this->request->getPost('tgl_laporan007'),
            'status_laporan007' => $this->request->getPost('status_laporan007'),
        ];

        $this->ModelLaporan->simpandata($data);
        return redirect()->to(base_url('laporan'));
    }

    
    public function edit($id_laporan007)
    {
        $laporan = $this->ModelLaporan->detaildata($id_laporan007);

        $data = [
            'menu' => 'Laporan',
            'submenu' => 'Edit Data Laporan',
            'page' => 'laporan/editlaporan',
            'laporan' => $laporan,
        ];
        return view('v_template',$data);
    }

    public function update($id_laporan007)
    {
        $data =[
            'id_laporan007' => $id_laporan007,
            'judul_laporan007' => $this->request->getPost('judul_laporan007'),
            'deskripsi_laporan007' => $this->request->getPost('deskripsi_laporan007'),
            'tgl_laporan007' => $this->request->getPost('tgl_laporan007'),
            'status_laporan007' => $this->request->getPost('status_laporan007'),
        ];

        $this->ModelLaporan->updatedata($data);
        return redirect()->to(base_url('laporan'));
    }

    public function delete($id_laporan007)
    {
        $data =[
            'id_laporan007' => $id_laporan007,
        ];

        $this->ModelLaporan->deletedata($data);
        return redirect()->to(base_url('laporan'));
    }
}
