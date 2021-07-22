<?php

namespace App\Controllers;
use App\Models\M_Login;
class Auth extends BaseController
{
	public function index()
	{
		return view('auth/login');
	}
	public function login()
	{
		$model = new M_Login;
        $table = 'login';
        $id_karyawan = $this->request->getPost('id_karyawan');
        $password = $this->request->getPost('password');
        $row = $model->get_data_login($id_karyawan,$table);
        var_dump($row);
        if ($row == NULL){
            session()->setFlashdata('pesan','username anda salah');
            return redirect()->to('/');
        }
        if (password_verify($password,$row->password)){
                $data = array(
                    'log' => TRUE,
                    'id_karyawan' => $row->id_karyawan,
                    'role' => $row->role,
                );
                session()->set($data);
                session()->setFlashdata('pesan','Berhasil Login');
                return redirect()->to('/dashboard');
        }
                session()->setFlashdata('pesan','Password Salah');
                return redirect()->to('/');
	}
    
    public function logout(){
        $session = session();
        $session -> destroy();
        session()->setFlashdata('pesan','Berhasil Logout');
        return redirect()->to('/');
    }
}
