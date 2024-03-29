@extends('../../default/default')

@section('title')
		BDE CESI Nice Gestion des articles
	@endsection

	@section('header')
  @include('../../default/mainHeader')
@endsection

@section('footer')
  @include('../../default/mainFooter')
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
	 <h1 class="my-4">Gestion des articles </h1>
	 <hr>
	 <div class="row">
	 <a class="btn btn-primary bouton_bleu_gestion" href="{{ asset('create_article') }}">Ajouter un article</a>
	 </div>
	 <br>
	 <div class="row">
	 <a class="btn btn-primary bouton_bleu_gestion" href="{{ asset('edit_article') }}">Modification d'articles</a>
	 </div>
	 <br>
	 <div class="row">
	 <a class="btn btn-primary bouton_bleu_gestion" href="{{ asset('delete_article') }}">Suppression d'articles</a>
      </div>
	</div>

@endsection