<?php 

namespace App\Http\Controllers;
use App\Models\Artikel;
use App\Http\Controllers\artikelcontroller;

class clientcontroller extends Controller{
	
	function showIndex(){
		$data['list_artikel'] = Artikel::all();
		return view('client/index',$data);
	}

	function showAbout(){
		return view('client/about');
	}
	
	function showContact(){
		return view('client/contact');
	}

	function showPost(Artikel $artikel){
		$data['artikels'] = $artikel;
		return view('client/post', $data);
	}

}
