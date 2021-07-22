<?php

namespace App\Controllers;
use App\Models\M_Karyawan;
use App\Models\M_Login;

class Dashboard extends BaseController
{
	public $karyawanModel;
	public $loginModel;
	public function __construct(){
		$this->karyawanModel = new M_Karyawan();
		$this->loginModel = new M_Login();
	}
	public function index()
	{
		$data = [
			'title' => 'Dashboard'
		];
		return view('template',$data);
	}
	public function data()
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
	
		$data=[
			'id_karyawan' => $this->request->getPost('id_karyawan'),
			'nama' => $this->request->getPost('nama'),
			'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
			'alamat' => $this->request->getPost('alamat'),
			'departemen' => $this->request->getPost('departemen')
		];

		// var_dump($data);
		$this->karyawanModel->getInsert($data);
		// $id_karyawan= $this->karyawanModel->insertID();
		
		$dataLogin =[
			'password'=>password_hash($this->request->getPost('password'),PASSWORD_DEFAULT),
			'role'=>$this->request->getPost('role'),
			'id_karyawan' => $this->request->getPost('id_karyawan'),
		];
		$this->loginModel->getInsert($dataLogin);


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
		$ambil = $this->karyawanModel->getEdit($data);
		dd($ambil);

		$data =[
			'title' => 'Data Karyawan',
			
		];
		

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