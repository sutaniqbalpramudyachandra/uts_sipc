<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Artikel</title>

  <!-- Bootstrap core CSS -->
  @include('Client.Template.css')

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  @include('Client.Template.navigation')

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('{{url('public')}}/client/img/blog.png')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>{{$artikels->title}}</h1>
            <h2 class="subheading">{!! nl2br($artikels->deskripsi) !!}</h2>
            <span class="meta">Posted by
              <a href="">Sutan Iqbal Pramudya Chandra</a>
              {{$artikels->created_at}}</span>
          </div>
        </div>
      </div>
    </div>
</header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>{!! nl2br($artikels->content) !!}</p>

          <a href="#">
            <img class="img-fluid" src="img/post-sample-image.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </article>

  <hr>

  <!-- Footer -->
  @include('Client.Template.footer')

  <!-- Bootstrap core JavaScript -->
 @include('Client.Template.js')
</body>

</html>
