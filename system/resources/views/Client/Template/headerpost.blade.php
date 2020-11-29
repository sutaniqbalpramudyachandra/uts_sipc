<header class="masthead" style="background-image: url('img/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>{{$artikels->title}}</h1>
            <h2 class="subheading">{!! nl2br($artikels->deskripsi) !!}</h2>
            <span class="meta">Posted by
              <a href="#">Start Bootstrap</a>
              {{$artikels->created_at}}</span>
          </div>
        </div>
      </div>
    </div>
</header>