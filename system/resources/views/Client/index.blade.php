<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SIPC | BLOG </title>

  @include('Client.Template.css')

</head>

<body>

  <!-- Navigation -->
  
  @include('Client.Template.navigation')
  <!-- Page Header -->
  
  @include('Client.Template.header')
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

        @foreach($list_artikel as $artikel)
        <div class="post-preview">
          <a href="{{url('client/post', $artikel->id)}}">
            <h2 class="post-title">
              {{$artikel->title}}
            </h2>
            <h3 class="post-subtitle">
              {!! nl2br($artikel->deskripsi) !!}
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Sutan Iqbal Pramudya Chandra</a>
            {{$artikel->created_at}}</p>
        </div>
        <hr>
        @endforeach
  <!-- Footer -->
  @include('Client.Template.footer')

 

</body>

</html>
