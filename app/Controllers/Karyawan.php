<?php

namespace App\Controllers;
use App\Models\M_Karyawan;
use App\Models\M_Login;
class Karyawan extends BaseController
{
	
    public function __construct(){
		$this->karyawanModel = new M_Karyawan();
		$this->loginModel = new M_Login();
	}
    public function index()
    {
        $pegawai = $this->karyawanModel->getAll();
		

		$data =[
			'title' => 'Data Karyawan',
			'pegawai' => $pegawai
		];
		return view('content/tampil_data',$data);
    }
    


	public function create()
	{
		$data =[
			'title' => 'Data Karyawan',
			
		];
		return view('content/tambah_pegawai',$data);
	}
	public function save()
	{
        $files = $this->request->getFile('gambar');

        
        if ($files->isValid() && ! $files->hasMoved())
        {
             $newName = $files->getRandomName();
             $files->move('asset/img/', $newName);
        }
		$data=[
			'id_karyawan' => $this->request->getPost('id_karyawan'),
			'nama' => $this->request->getPost('nama'),
			'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
			'alamat' => $this->request->getPost('alamat'),
			'departemen' => $this->request->getPost('departemen'),
           'gambar' => $newName
		];
      
		
		$this->karyawanModel->getInsert($data);
		// $id_karyawan= $this->karyawanModel->insertID();
		
		$dataLogin =[
			'password'=>password_hash($this->request->getPost('password'),PASSWORD_DEFAULT),
			'role'=>$this->request->getPost('role'),
			'id_karyawan' => $this->request->getPost('id_karyawan'),
		];
		$this->loginModel->getInsert($dataLogin);

		return redirect()->to(site_url('dashboard'));
		// $model->getInsert($data);
		// $model->insert($data);


		// $model->save([
		// 	'id_karyawan' => $this->request->getVar('id_karyawan'),
		// 	'nama' => $this->request->getVar('nama'),
		// 	'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
		// 	'alamat' => $this->request->getVar('alamat'),
		// 	'departemen' => $this->request->getVar('departemen')
		// ]);
		// return view('content/create',$data);
		// return redirect()->to('/dashboard');
	}
    public function edit($data){
        
		$model = $this->karyawanModel;
		$row = $model->getEdit($data);

		if($row == null){
			
			return redirect()->to(site_url('dashboard'));
		}else{
			$data =[
				'title' => 'Data Karyawan',
				'row' => $row
			];
		}


		
		

		// $data =[
		// 	'id_karyawan' => $this->request->getPost('id_karyawan'),
		// 	'nama' => $this->request->getPost('nama'),
		// 	'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
		// 	'alamat' => $this->request->getPost('alamat'),
		// 	'departemen' => $this->request->getPost('departemen')
		// ];
		return view('content/edit_data_karyawan',$data);
	}
}