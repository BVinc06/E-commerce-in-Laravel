@extends('../default/default')

@section('title')
BDE CESI Nice Boite à idées
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
	<h1 class="my-4">Boîte à idées <a class="btn btn-primary" href="{{ asset('create_idea') }}">Apporter une idée</a></h1>
	<div class="row">


		<div class="col-lg-6 mb-4">
			<div class="card h-100">
				<div class="card-body">
					<h4 class="card-title">Titre de l'idée</h4>
					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
				</div>
			</div>
		</div>
		
		<div class="col-lg-6 mb-4">
			<div class="card h-100">
				<div class="card-body">
					<h4 class="card-title">Titre de l'idée</h4>
					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
				</div>
			</div>
		</div>




	</div>
</div>

@endsection