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
  		<h1 class="display-4 text-center text-lg-left mt-4 mb-0">Galerie Photos <a class="btn btn-primary bouton_bleu_head" href="{{ asset('imageUpload') }}">Ajouter des photos</a>
	  		@if(Auth::user()->d_bde_user)<a id="bouton_bleu_head_dl_photos" class="btn btn-primary" href="{{ asset('create') }}">Télécharger les photos</a>@endif
	  		@if(Auth::user()->d_salarie_user)<a id="bouton_bleu_head_dl_photos" class="btn btn-primary" href="{{ asset('create') }}">Télécharger les photos</a>@endif
	  		@if(Auth::user()->d_bde_user) {!! link_to_route('gestion', 'Gerer les photos', null, ['class' => 'btn btn-primary']) !!} @endif
	  	</h1>
	  	<hr class="mb-5">
	  	<h3>{{ $photo->nom_photo }}</h3>
	  	<div>
	  		<img class="img-fluid img-thumbnail" src="{{ asset('images/'.$photo->url_photo) }}" alt="{{ $photo->nom_photo }}">
	  	</div>
	  	{!! link_to_route('add_commentaire', 'Ajouter un commentaire', [$photo->id], ['class' => 'btn btn-primary']) !!}
	  	
	  	<hr class="mb-5">
	  	
	  	@isset($commentairesAdd)
    		<div class="container-fluid" style="background: green;">
      			{{ $commentairesAdd }}
			</div>
	  	<hr class="mb-5">
	  	@endisset

	  	<div class="row text-center text-lg-left">
	  		@foreach($commentaires as $commentaire)
			  		<div class="col-lg-12 col-md-4 col-6">
			  			<h4>{{ $commentaire->auteur_commentaire }}</h4>
			  			<h6>{{ $commentaire->date_commentaire }}</h6>
			  			<p>{{ $commentaire->description_commentaire }}</p>
			    	</div>
	    	@endforeach
	    </div>
	</div>
@endsection