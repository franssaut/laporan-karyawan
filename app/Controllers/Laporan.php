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
	
}
