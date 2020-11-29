@extends('Admin.masteradmin')
 
@section('content')
   <div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Detail Data Artikel
                </div>
                <div class="card-body">
                    <h3>{{$artikels->title}}</h3>
                    <hr>
                     <p> Deskripsi : 
                     {!! nl2br($artikels->deskripsi) !!}    
                    </p>
                    |
                    <p>
                    {!! nl2br($artikels->content) !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@stop