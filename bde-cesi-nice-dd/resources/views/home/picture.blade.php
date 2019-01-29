@extends('../default/default')

@section('title')
		BDE CESI Nice Galerie Photos
	@endsection

	@section('header')
  @include('../default/mainHeader')
@endsection

@section('footer')
  @include('../default/mainFooter')
@endsection

@section('moreCSS')
<link rel="stylesheet" type="text/css" href="{{ asset('css/headerStyle.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/footerStyle.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/mainStyle.css') }}">
	<link rel="icon" type="image/png" href="{{ asset('image/icons/favicon.ico') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
@endsection

@section('moreJS')
	<script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
	<script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
	<script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
	<script src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
@endsection

@section('main')
	<div class="container">
  <h1 class="display-4 text-center text-lg-left mt-4 mb-0">Galerie Photos <a class="btn btn-primary" href="{{ asset('ajout_photos') }}">Ajouter des photos</a></h1>
  <hr class="mb-5">
  <div class="row text-center text-lg-left">
  	<div class="col-lg-3 col-md-4 col-6">
            <img class="img-fluid img-thumbnail" src="{{ asset('image/slide1.png') }}" alt="">
    </div>
   <div class="col-lg-3 col-md-4 col-6">
            <img class="img-fluid img-thumbnail" src="{{ asset('image/slide2.png') }}" alt="">
    </div>
    <div class="col-lg-3 col-md-4 col-6">
            <img class="img-fluid img-thumbnail" src="{{ asset('image/slide3.png') }}" alt="">
    </div>
    <div class="col-lg-3 col-md-4 col-6">
            <img class="img-fluid img-thumbnail" src="{{ asset('image/logo_bde.png') }}" alt="">
    </div>



    </div>
</div>

	

@endsection