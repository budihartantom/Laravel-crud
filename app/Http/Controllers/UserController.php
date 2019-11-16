<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DataTables;

class UserController extends Controller
{
    //
	public function data()
	{
    	$users = \App\User::latest();
    	return DataTables::of($users)->make(true);
		// return Datatables::of(User::all())->make(true);
	}
	public function index()
	{
		return view('list_users');
	}
}
