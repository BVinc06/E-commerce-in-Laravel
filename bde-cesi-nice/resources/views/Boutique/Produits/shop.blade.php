@extends('../../default/default')

@section('title')
		BDE CESI Nice Boutique
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
	 <h1 class="my-4">Boutique <a class="btn btn-primary" href="{{ asset('create_article') }}">Ajouter un article</a></h1>

	 <!-- SLIDES -->
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset('image/article1.jpg') }}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('image/article2.png') }}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('image/slide1.png') }}" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!------------------->
  <br>

  @isset($addToCart)
    <div class="container-fluid" style="background: green;">
      {{ $addToCart }}
    </div>
  @endisset

  @foreach ($produits as $produit)
     <div class="row">
        <div class="col-md-7">
            <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
        </div>
        <div class="col-md-5">
          <h3>Produit : {{ $produit->nom_produit }}</h3>
          <h5>Prix : {{ $produit->prix_produit }}€</h5>
          <p>{{ $produit->description_produit }}</p>
          {!! link_to_route('shop.show', 'Voir le produit', [$produit->id], ['class' => 'btn btn-primary']) !!}
          {!! link_to_route('shop.add', 'Ajouter au panier', [$produit->id], ['class' => 'btn btn-primary']) !!}

{!! link_to_route('shop.edit', 'Modifier', [$produit->id], ['class' => 'btn btn-warning btn-block']) !!}
           {!! Form::open(['method' => 'DELETE', 'route' => ['shop.destroy', $produit->id]]) !!}
              {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet article ?\')']) !!}
            {!! Form::close() !!}

        </div>
      </div>
      <hr>
    @endforeach

	</div>

@endsection