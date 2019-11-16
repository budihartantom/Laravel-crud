<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;
use DataTables;

class SiswaController extends Controller
{
    //
	public function data()
	{
		$data_siswa = \App\Siswa::latest();	
		return DataTables::of($data_siswa)->make(true);
       // return view ('siswa.index',['data_siswa' => $data_siswa]);
	}
	public function index()
	{
		return view('list_siswa');
	}
}
