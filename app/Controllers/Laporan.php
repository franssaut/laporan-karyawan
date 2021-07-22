<?php

namespace App\Controllers;

class Laporan extends BaseController
{
	public function index()
	{

        $data =[
			'title' => 'Dashboard|Laporan',

		];
		return view('content/lihat_laporan',$data);
	}
	public function input_laporan()
	{

        $data =[
			'title' => 'Dashboard|InputLaporan',

		];
		return view('content/input_laporan',$data);
	}

	public function input_laporan_save()
	{
//buat session di sini
        $data =[
			'title' => 'Dashboard|InputLaporan',

		];
		
	}
	
	public function input_kegiatan()
	{
//Setelah selesai Hapus session
        $data =[
			'title' => 'Dashboard|InputLaporan',

		];
		
	}
}
