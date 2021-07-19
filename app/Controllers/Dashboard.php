<?php

namespace App\Controllers;
use App\Models\M_Karyawan;

class Dashboard extends BaseController
{

	public function index()
	{
		$data = [
			'title' => 'Dashboard'
		];
		return view('template',$data);
	}
	public function data()
	{
		$model = new M_Karyawan();
		$pegawai = $model->findAll();
		
		

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
		$model = new M_Karyawan();
	

		$model->save([
			'nama' => $this->request->getVar('nama'),
			'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
			'alamat' => $this->request->getVar('alamat'),
			'departemen' => $this->request->getVar('departemen')
		]);
		return redirect()->to('/dashboard');
	}
}
