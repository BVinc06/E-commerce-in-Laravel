@extends('../default/default')

@section('title')
BDE CESI Nice Connexion
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
<script src="{{ asset('js/mainConnexion.js') }}"></script>
<script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
<script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
<script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
@endsection

@section('main')
<div class="container">
	 <h1 class="my-4">Mon compte </h1>


	<form action="{{ url('users') }}" method="POST">
		{{ csrf_field() }}
		<div class="row">
			<div class="col-lg-2 col-md-12">
				<label for="nom">Nom : </label>
			</div>
			<div class="col-lg-3 col-md-12">
				<input type="text" name="nom" id="nom">
			</div>
			<div class="col-lg-2 col-md-12">
				<label for="prenom">Prénom : </label>
			</div>
			<div class="col-lg-3 col-md-12">
				<input type="text" name="prenom" id="prenom">
			</div>
			

		</div>
		<div class="row">
			<div class="col-lg-2 col-md-12">
				<label for="email">E-mail : </label>
			</div>
			<div class="col-lg-3 col-md-12">
				<input type="text" name="email" id="email">
			</div>
			<div class="col-lg-2 col-md-12">
				<label for="password">Mot de passe : </label>
			</div>
			<div class="col-lg-3 col-md-12">
				<input type="password" name="password" id="password">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2 col-md-12">
				<label for="campus">Campus : </label>
			</div>
			<div class="col-lg-3 col-md-12">
				<input type="text" name="campus" id="campus">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-10 col-md-12">

			</div>
			<div class="col-lg-2 col-md-4"> 
				<input style="cursor: pointer;" type="submit" value="Enregistrer">
			</div>
		</div>

	</form>
</div>
@endsection