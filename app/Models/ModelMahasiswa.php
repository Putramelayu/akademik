<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMahasiswa extends Model
{
    public function TampilData()
    {
        return $this->db->table('tbl_mahasiswa007')
        ->orderBy('id_mahasiswa007','DESC')
        ->get()
        ->getResultArray();
    }
    public function simpandata($data)
    {
        return $this->db->table('tbl_mahasiswa007')->insert($data);
    }

    public function detaildata($id_mahasiswa007)
    {
        return $this->db->table('tbl_mahasiswa007')
        ->where('id_mahasiswa007',$id_mahasiswa007)
        ->get()
        ->getRowArray();
    }

    public function updatedata($data)
    {
        return $this->db->table('tbl_mahasiswa007')
        ->where('id_mahasiswa007', $data['id_mahasiswa007'])
        ->update($data);
    }

    public function deletedata($data)
    {
        return $this->db->table('tbl_mahasiswa007')
        ->where('id_mahasiswa007', $data['id_mahasiswa007'])
        ->delete($data);
    }
    
}
