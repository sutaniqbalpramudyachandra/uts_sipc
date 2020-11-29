<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use App\Models\User;

class artikelcontroller extends Controller{

    function index(){
        $data['list_artikel'] = Artikel::all();
        return view('admin.artikel.index', $data);
    }
    function create(){
        return view('admin.artikel.create');
    }
    function store(){
        $artikel = new Artikel;
        $artikel->id_user = request()->user()->id;
        $artikel->title = request('title');
        $artikel->deskripsi = request('deskripsi');
        $artikel->content = request('content');
        $artikel->save();

        return redirect('admin/artikel')->with('success', 'Data Berhasil Ditambahkan');

    }
    function show(Artikel $artikel){
        $data['artikels'] = $artikel;
        return view('admin.artikel.show', $data);
    }
    function edit(Artikel $artikel){
        $data['artikels'] = $artikel;
        return view('admin.artikel.edit', $data);
    }
    function update(Artikel $artikel){
        $artikel->title = request('title');
        $artikel->deskripsi = request('deskripsi');
        $artikel->content = request('content');
        $artikel->save();

        return redirect('admin/artikel')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Artikel $artikel){
        $artikel->delete();

        return redirect('admin/artikel')->with('danger', 'Data Berhasil Dihapus');
    }

}