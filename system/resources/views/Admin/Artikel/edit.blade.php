@extends('Admin.masteradmin')
@section('content')
    @extends('layouts.frontend.masteradmin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Tambah Data Artikel
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <form action="{{url('admin/artikel', $artikels->id)}}" method="post">
                        @csrf
                        @method("PUT")
                        <label for="" class="control-label">Judul</label>
                        <input type="text" class="form-control" name="title" value="{{$artikels->title}}">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control">{{$artikels->deskripsi}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Konten</label>
                        <textarea name="content" class="form-control">{{$artikels->content}}</textarea>
                    </div>
                    <button class="btn btn-dark float-right"><i class="fa fa-save"></i>Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@stop