<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelMahasiswa;

class Mahasiswa extends BaseController
{
    public function __construct() {
        $this->ModelMahasiswa = new ModelMahasiswa();
    }

    public function index()
    {
        $data = [
            'menu' => 'Mahasiswa',
            'submenu' => 'Data Mahasiswa',
            'page' => 'mahasiswa/datamahasiswa',
            'mahasiswa' => $this->ModelMahasiswa->TampilData()
        ];
        return view('v_template',$data);
    }

    public function tambah()
    {
        $data = [
            'menu' => 'Mahasiswa',
            'submenu' => 'Tambah Data Mahasiswa',
            'page' => 'mahasiswa/tambahmahasiswa',
        ];
        return view('v_template',$data);
    }
    public function simpan()
    {
        $data =[
            'nim007' => $this->request->getPost('nim007'),
            'nama_mhs007' => $this->request->getPost('nama_mhs007'),
            'tempat_lahir007' => $this->request->getPost('tempat_lahir007'),
            'tgl_lahir007' => $this->request->getPost('tgl_lahir007'),
            'alamat007' => $this->request->getPost('alamat007'),
            'nohp007' => $this->request->getPost('nohp007'),
            'jurusan007' => $this->request->getPost('jurusan007'),
        ];

        $this->ModelMahasiswa->simpandata($data);
        return redirect()->to(base_url('mahasiswa'));
    }

    
    public function edit($id_mahahasiswa007)
    {
        $mahasiswa = $this->ModelMahasiswa->detaildata($id_mahahasiswa007);

        $data = [
            'menu' => 'Mahasiswa',
            'submenu' => 'Edit Data Mahasiswa',
            'page' => 'mahasiswa/editmahasiswa',
            'mahasiswa' => $mahasiswa,
        ];
        return view('v_template',$data);
    }

    public function update($id_mahahasiswa007)
    {
        $data =[
            'id_mahasiswa007' => $id_mahahasiswa007,
            'nim007' => $this->request->getPost('nim007'),
            'nama_mhs007' => $this->request->getPost('nama_mhs007'),
            'tempat_lahir007' => $this->request->getPost('tempat_lahir007'),
            'tgl_lahir007' => $this->request->getPost('tgl_lahir007'),
            'alamat007' => $this->request->getPost('alamat007'),
            'nohp007' => $this->request->getPost('nohp007'),
            'jurusan007' => $this->request->getPost('jurusan007'),
        ];

        $this->ModelMahasiswa->updatedata($data);
        return redirect()->to(base_url('mahasiswa'));
    }

    public function delete($id_mahahasiswa007)
    {
        $data =[
            'id_mahasiswa007' => $id_mahahasiswa007,
        ];

        $this->ModelMahasiswa->deletedata($data);
        return redirect()->to(base_url('mahasiswa'));
    }
            


}
