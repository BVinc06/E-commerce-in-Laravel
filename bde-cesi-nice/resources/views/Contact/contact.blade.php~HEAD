@extends('../default/default')

@section('title')
		BDE CESI Nice Panier
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
		<form action="{{ url('users') }}" method="POST">
			{{ csrf_field() }}
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-5 col-xs-1">
					<label for="nom">Nom : <input type="text" name="nom" id="nom"/></label>
					
					<label for="prenom">Prénom : <input type="text" name="prenom" id="prenom"/></label>
					
					<label for="email">E-mail : <input type="text" name="email" id="email"/></label>
					
					<label for="campus">Votre message : <textarea type="text" name="message" id="message"></textarea></label>

					<input style="cursor: pointer;" type="submit" value="Envoyer !"/>
				</div>
				<div class="col-lg-6 col-md-8 col-sm-7 col-xs-2">
					Vous pouvez nous contactez via la page facebook si vous avez un quelquonque problème ou demande ou envoyey directement un mail. 
				</div>
			</div>
		</form>
	</div>

@endsection

@section('moreJS')

@endsection