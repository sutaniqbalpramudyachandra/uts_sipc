<?php 

namespace App\Http\Controllers;

class admincontroller extends Controller
{
	
	function showIndex(){
		return view('admin/adminindex');
	}
}
