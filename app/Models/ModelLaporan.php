<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLaporan extends Model
{
    public function TampilData()
    {
        return $this->db->table('tbl_laporan007')
        ->orderBy('id_laporan007','DESC')
        ->get()
        ->getResultArray();
    }
    public function simpandata($data)
    {
        return $this->db->table('tbl_laporan007')->insert($data);
    }

    public function detaildata($id_laporan)
    {
        return $this->db->table('tbl_laporan007')
        ->where('id_laporan007',$id_laporan)
        ->get()
        ->getRowArray();
    }

    public function updatedata($data)
    {
        return $this->db->table('tbl_laporan007')
        ->where('id_laporan007', $data['id_laporan007'])
        ->update($data);
    }

    public function deletedata($data)
    {
        return $this->db->table('tbl_laporan007')
        ->where('id_laporan007', $data['id_laporan007'])
        ->delete($data);
    }
    
}
