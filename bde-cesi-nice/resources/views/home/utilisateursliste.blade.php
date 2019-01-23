@extends('../default/default')

@section('title')
		BDE CESI Nice Événements
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
	<h1 class="my-4">Liste des utilisateurs</h1>
 	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Nom</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($utilisateurs as $utilisateur)
				<tr>
					<td>{!! $utilisateur->id !!}</td>
					<td class="text-primary"><strong>{!! $utilisateur->nom_utilisateur !!}</strong></td>
					<td>
						{!! link_to_route('utilisateurs.show', 'Voir', [$utilisateur->id], ['class' => 'btn btn-success btn-block']) !!}
					</td>
					<td>
						{!! link_to_route('utilisateurs.edit', 'Modifier', [$utilisateur->id], ['class' => 'btn btn-warning btn-block']) !!}
					</td>
					<td>
						{!! Form::open(['method' => 'DELETE', 'route' => ['utilisateurs.destroy', $utilisateur->id]]) !!}
							{!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
						{!! Form::close() !!}
					</td>
				</tr>
			@endforeach
			</tbody>
	</table>

</div>
@endsection