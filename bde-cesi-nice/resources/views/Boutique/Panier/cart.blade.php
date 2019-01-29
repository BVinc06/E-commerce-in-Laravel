@extends('../../default/default')

@section('title')
		BDE CESI Nice Panier
	@endsection

	@section('header')
  @include('../../default/mainHeader')
@endsection

@section('footer')
  @include('../../default/mainFooter')
@endsection

@section('moreCSS')
<link rel="stylesheet" type="text/css" href="{{ asset('css/mainShoppingCart.css') }}">
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
	<script src="{{ asset('js/mainCart.js') }}"></script>
@endsection

@section('main')

<div class="container">
	<br>
	<h1>Panier</h1>

<div class="shopping-cart">

  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Produit</label>
    <label class="product-price">Prix</label>
    <label class="product-quantity">Quantité</label>
    <label class="product-removal">Supprimer</label>
    <label class="product-line-price">Total</label>
  </div>

  <div class="product">
    <div class="product-image">
      <img src="{{ asset('image/article1.jpg') }}">
    </div>
    <div class="product-details">
      <div class="product-title">Tasse à café</div>
      <p class="product-description">Marre d'être fatigué en cours ? De ne pas réussir à suivre les workshop ? De pas avoir la force de venir aux afterworks ?</p>
    </div>
    <div class="product-price">15</div>
    <div class="product-quantity">
      <input type="number" value="2" min="1">
    </div>
    <div class="product-removal">
      <button class="remove-product">
        Supprimer
      </button>
    </div>
    <div class="product-line-price">30</div>
  </div>

  <div class="product">
    <div class="product-image">
      <img src="{{ asset('image/article2.png') }}">
    </div>
    <div class="product-details">
      <div class="product-title">PULL BDE</div>
      <p class="product-description">Marre d'avoir froid et de ne pas vouloir venir en cours sans votre couette ?</p>
    </div>
    <div class="product-price">25</div>
    <div class="product-quantity">
      <input type="number" value="1" min="1">
    </div>
    <div class="product-removal">
      <button class="remove-product">
        Supprimer
      </button>
    </div>
    <div class="product-line-price">25</div>
  </div>

  <div class="totals">
    <div class="totals-item totals-item-total">
      <label>Total</label>
      <div class="totals-value" id="cart-total">55</div>
    </div>
  </div>
      
      <button class="checkout">Checkout</button>

</div>
</div>
	

@endsection