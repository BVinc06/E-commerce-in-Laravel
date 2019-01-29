@extends('../default/default')

@section('moreCSS')
{{-- 
	On peut definir des styles css qui viendront s'ajouter et écraser les styles globaux : 
	<link rel="stylesheet" type="text/css" href="{{ asset('css/STYLE_A_DEFINIR.css') }}">
--}}
  <link rel="stylesheet" type="text/css" href="{{ asset('css/mainStyle.css') }}">
@endsection

@section('moreJS')
{{-- 
   On peut definir des fichiers JS qui viendront s'ajouter : 
   <script type="text/javascript" src="js/mainJs.js"></script>
 --}}
@endsection

@section('main')
  @auth
      @section('title')
        Accueil
      @endsection

     @section('header')
      @include('../default/mainHeader')
     @endsection

     @section('footer')
      @include('../default/mainFooter')
     @endsection

     <!-- SLIDES -->
     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{ asset('image/slide1.png') }}" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('image/slide2.png') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
<<<<<<< HEAD
          <text>hgdrh <alt="Third slide">
=======
          <img class="d-block w-100" src="{{ asset('image/slide3.png') }}" alt="Third slide">
>>>>>>> master
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
<<<<<<< HEAD

    <h1>AUTH</h1>

  @endauth

  @guest
  
    @section('title')
      Accueil
    @endsection

    @section('header')
     @include('../default/mainHeader')
    @endsection

    @section('footer')
     @include('../default/mainFooter')
    @endsection

=======

    <h1>AUTH</h1>


  @endauth

  @guest
  
    @section('title')
      Accueil
    @endsection

    @section('header')
     @include('../default/mainHeader')
    @endsection

    @section('footer')
     @include('../default/mainFooter')
    @endsection

>>>>>>> master
     <!-- SLIDES -->
     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{ asset('image/slide1.png') }}" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('image/slide2.png') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('image/slide3.png') }}" alt="Third slide">
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

    <h1>GUEST</h1>

  @endguest

<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> master
