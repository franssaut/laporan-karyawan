<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Karyawan extends Model
{
    protected $table      = 'karyawan';
    protected $primaryKey = 'id_karyawan';

        


    protected $allowedFields = ['name', 'jenis_kelamin','alamat','departemen'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    

   
}