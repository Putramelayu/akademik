<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelDosen;

class Dosen extends BaseController
{
    public function __construct() {
        $this->ModelDosen = new ModelDosen();
    }
    
    public function index()
    {
        $data = [
            'menu' => 'Dosen',
            'submenu' => 'Data Dosen',
            'page' => 'dosen/datadosen',
            'dosen' => $this->ModelDosen->TampilData()
        ];
        return view('v_template',$data);
    }
    public function tambah()
    {
        $data = [
            'menu' => 'Dosen',
            'submenu' => 'Tambah Data Dosen',
            'page' => 'dosen/tambahdosen',
        ];
        return view('v_template',$data);
    }
    public function simpan()
    {
        $data =[
            'nidn007' => $this->request->getPost('nidn007'),
            'nama_dosen007' => $this->request->getPost('nama_dosen007'),
            'alamat_dsn007' => $this->request->getPost('alamat_dsn007'),
            'tempat_lahir007' => $this->request->getPost('tempat_lahir007'),
            'tgl_lahir007' => $this->request->getPost('tgl_lahir007'),
            'pendidikan007' => $this->request->getPost('pendidikan007'),
            'jurusan007' => $this->request->getPost('jurusan007'),
        ];

        $this->ModelDosen->simpandata($data);
        return redirect()->to(base_url('dosen'));
    }

    
    public function edit($id_dosen007)
    {
        $dosen = $this->ModelDosen->detaildata($id_dosen007);

        $data = [
            'menu' => 'Dosen',
            'submenu' => 'Edit Data Dosen',
            'page' => 'dosen/editdosen',
            'dosen' => $dosen,
        ];
        return view('v_template',$data);
    }

    public function update($id_dosen007)
    {
        $data =[
            'id_dosen007' => $id_dosen007,
            'nidn007' => $this->request->getPost('nidn007'),
            'nama_dosen007' => $this->request->getPost('nama_dosen007'),
            'alamat_dsn007' => $this->request->getPost('alamat_dsn007'),
            'tempat_lahir007' => $this->request->getPost('tempat_lahir007'),
            'tgl_lahir007' => $this->request->getPost('tgl_lahir007'),
            'pendidikan007' => $this->request->getPost('pendidikan007'),
            'jurusan007' => $this->request->getPost('jurusan007'),
        ];

        $this->ModelDosen->updatedata($data);
        return redirect()->to(base_url('dosen'));
    }

    public function delete($id_dosen007)
    {
        $data =[
            'id_dosen007' => $id_dosen007,
        ];

        $this->ModelDosen->deletedata($data);
        return redirect()->to(base_url('dosen'));
    }
}
