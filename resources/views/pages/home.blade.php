@extends('main')

@Section('stylesheet')

  <link rel="stylesheet" href="{{asset('plugins/nvd3/nvd3.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/jquery-jvectormap/jquery-jvectormap.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/bootstrap-calendar/css/bootstrap_calendar.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/gritter/css/jquery.gritter.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/frontend/style_edite.css')}}">

@endsection


@section('content')


<div class="parallax" style="background-image: url({{asset('img/upper_paralax.png')}});height: 95vh;">
  <div class="centered-parallax-content">
  <h2 class="title">Welcome to</h2>
  <h1 class="title">World Dawn Wiki</h1>
  <p class="lead">Here you can get some information about the developement of the game and get to know what has been added/modified lately.</p>
  <p class="lead">The GameMaster hopes that you like this little gift.</p>
  </div>
</div>

<div class="container">

            <h2 class="title padding-ver-1-5 animated fadeIn">Latest News and Updates</h2>

            <div class="row padding-bot-2 animated fadeIn">

          

                <div class="col-md-12">
                  <h4 class="lead">Unfortunatly we haven't added any content, please come back later.</h4>
                </div>


            </div>
          </div>
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner ">
              <div class="item parallax active" style="background-image: url({{asset('img/lower_paralax_1.png')}});height: 40vh;">
              </div>

              <div class="item parallax" style="background-image: url({{asset('img/lower_paralax_2.png')}});height: 40vh;">
              </div>

              <div class="item parallax" style="background-image: url({{asset('img/lower_paralax_3.png')}});height: 40vh;">
              </div>
            </div>
            <div class="container-fluid centered-parallax-content-no-bg alignThisCenter">
              <div class="padding-top-5vh">
                <h2>Try out the Testing Area</h2>
                <br>
                @guest
                  <div class="btn-group download-group">
                    <a href="{{asset('WD_win.zip')}}" class="btn btn-primary btn33 btn-colormode" download><i class="fab fa-windows"></i> Windows</a>
                    <button class="btn btn-info btn34 btn-colormode" disabled><i class="fab fa-apple"></i> Mac OS</button>
                    <button class="btn btn-lime btn33 btn-colormode" disabled><i class="fab fa-android"></i> Android</button>
                  </div>
                @else
                  <div class="btn-group download-group">
                    <a style="min-width: 113px;" href="{{asset('WD_win.zip')}}" class="btn btn-primary btn25 btn-colormode" download><i class="fab fa-windows"></i> Windows</a>
                    <a style="min-width: 113px;" href="{{asset('WD_mac.zip')}}" class="btn btn-info btn25 btn-colormode" download><i class="fab fa-apple"></i> Mac OS</a>
                    <button style="min-width: 113px;" class="btn btn-lime btn25 btn-colormode" disabled><i class="fab fa-android"></i> Android</button>
                    <button style="min-width: 113px;" class="btn btn-danger btn25  btn-colormode" disabled><i class="fab fa-chrome"></i> Browser</button>
                  </div>
                @endguest
              </div>

            </div>

          </div>
@endsection