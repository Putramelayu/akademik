<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDosen extends Model
{
    public function TampilData()
    {
        return $this->db->table('tbl_dosen007')
        ->orderBy('id_dosen007','DESC')
        ->get()
        ->getResultArray();
    }
    public function simpandata($data)
    {
        return $this->db->table('tbl_dosen007')->insert($data);
    }

    public function detaildata($id_dosen)
    {
        return $this->db->table('tbl_dosen007')
        ->where('id_dosen007',$id_dosen007)
        ->get()
        ->getRowArray();
    }

    public function updatedata($data)
    {
        return $this->db->table('tbl_dosen007')
        ->where('id_dosen007', $data['id_dosen007'])
        ->update($data);
    }

    public function deletedata($data)
    {
        return $this->db->table('tbl_dosen007')
        ->where('id_dosen007', $data['id_dosen007'])
        ->delete($data);
    }
    
}
