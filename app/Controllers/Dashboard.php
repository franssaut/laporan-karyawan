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
	
	
 public function profile()
	{
		$session=session('id_karyawan');
		$pegawai = $this->karyawanModel->getData($session);
		
		$data =[
			'title' => "profile",
			'pegawai' => $pegawai
		];
		return view('header/profile',$data);
	
	}
	
}