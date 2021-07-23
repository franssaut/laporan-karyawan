<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Login extends Model
{
    protected $table      = 'login';
    protected $primaryKey = 'id';
    protected $allowedFields = ['password','role'];
    
//    function getAlluser(){
//     $builder = $this->db->table('login');
//     $query = $builder->get();
//     return $query->getResultArray();
//    }
   
    function get_data_login($id_karyawan,$tbl){
        $builder = $this->db->table($tbl);
        $builder->where('id_karyawan',$id_karyawan);
        $log =$builder->get()->getRow();
        return $log;
 }
   
    function getInsert($data)
    {
        $builder = $this->db->table('login');
        $builder->insert($data);
    }
    public function edit($data)
    {
        $builder = $this->db->table('login');
        $builder->where('id_karyawan',$data['id_karyawan']);
        
        $builder->update($data);
    }
}
