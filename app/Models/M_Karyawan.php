<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Karyawan extends Model
{
    protected $table      = 'karyawan';
    protected $primaryKey = 'id_karyawan';
    protected $allowedFields = ['name', 'jenis_kelamin', 'alamat', 'departemen'];
    protected $useAutoIncrement = false;
    protected $useSoftDeletes = false;
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
  
   
    function getAll()
    {
        $builder = $this->db->table('karyawan');
        $query = $builder->get();
        return $query->getResultArray();
    }
    function getInsert($data)
    {
        $builder = $this->db->table('karyawan');
        $builder->insert($data);
    }

    public function getEdit($data)
    {
        $builder = $this->db->table('karyawan');
        $builder->where('id_karyawan',$data);
        $log =$builder->get()->getRow();

        return $log;
        
    }
}
