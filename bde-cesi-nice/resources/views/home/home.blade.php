@extends('../default/default')

@section('title')
Accueil
@endsection

@section('header')
	@include('../default/mainHeader')
@endsection

@section('footer')
	@include('../default/mainFooter')
@endsection

@section('moreCSS')
{{-- 
	On peut definir des styles css qui viendront s'ajouter et écraser les styles globaux : 
	<link rel="stylesheet" type="text/css" href="{{ asset('css/STYLE_A_DEFINIR.css') }}">
--}}
@endsection

@section('moreJS')
{{-- 
	On peut definir des fichiers JS qui viendront s'ajouter : 
	<script type="text/javascript" src="js/mainJs.js"></script>
--}}
@endsection

@section('main')

	@auth
		<h1>AUTH</h1>
		<p>
			<!-- CTRL + MAJ + P + lorem -->
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		<p>
	@endauth

	@guest
		<h1>GEST</h1>
		<p>
			<!-- CTRL + MAJ + P + lorem -->
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		<p>
	@endguest

	<hr>
	<h4>Boostrap OK</h4>
	<div class="container">
		<div class="row">
			<div class="col-sm">
				One of three columns
			</div>
			<div class="col-sm">
				One of three columns
			</div>
			<div class="col-sm">
				One of three columns
			</div>
		</div>
	</div>
	<hr>
	<h4>Liaison DB OK</h4>
	@foreach ($noms as $nom)
		<p>{{ $nom->nom }}</p>
	@endforeach

@endsection