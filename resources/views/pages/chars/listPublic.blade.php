@extends('main')


@section('title', '- Characters')

@section('stylesheet')

  <link rel="stylesheet" href="{{asset('plugins/nvd3/nvd3.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/jquery-jvectormap/jquery-jvectormap.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/bootstrap-calendar/css/bootstrap_calendar.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/gritter/css/jquery.gritter.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/frontend/style_edite.css')}}">

@endsection

@section('content')

          <div class="container">
            <div class="row padding-ver-2">
                <div class="col-md-12">
                    <h1 class="title">Characters</h1>
                </div>
                {{-- <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3" style="padding-top: 25px;padding-bottom: 25px;">
                        <div class="btn-group btngroup-100">
                              <button type="button" class="btn btn-default btn25">Data</button>
                              <button type="button" class="btn btn-default btn25">Type</button>
                              <button type="button" class="btn btn-default btn25">Name</button>
                              <button type="button" class="btn btn-default btn25">Show All</button>
                        </div>
                    </div>
                </div>
              </div> --}}

            </div>
            <div class="row">
               
                <div class="col-md-12">
                  <h4 class="lead">Unfortunatly we haven't added any content, please come back later.</h4>
                </div>
          </div>
        </div>
@endsection
