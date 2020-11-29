<?php

namespace App\Http\Controllers;
use Auth;


class authcontroller extends Controller
{
    function showLogin(){
    	return view('Admin.login');
    	    }

   	function loginProcess(){
   		if(Auth::attempt(['username' => request('username'), 'password' => request('password')])){
   			return redirect('admin/adminindex')->with('success', 'Login Berhasil');}
   		else{
   			return back()->with('danger', 'Login Gagal, Silahkan cek Username dan password anda');}
   			}
        
   		
   

   	function logout(){
      Auth::logout();
      return redirect('admin/adminindex');

   	}

   	function registration(){

   	}

   	function forgotpassword(){

   	}
}
  