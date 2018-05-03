@extends('layouts.app')

<!DOCTYPE html>
<html>
<head>
	<title>Requisitante</title>
</head>
<body>
@section('content')
<div class="container">
	<h1>Novo Requisitante</h1>

	@if ($errors->any())
	<ul class="alert alert-warning">
		@foreach($errors->all() as $error)
		<li>{{ $error}}</li>
		@endforeach
	</ul>
    @endif

	{!! Form::open(['route'=>'requisitante.store']) !!}

	<!-- Nome Form Input -->
	<div class="form-group">
		{!! Form::label('nome', 'Nome:') !!}
		{!! Form::text('nome', null, ['class'=>'form-control']) !!}
	</div>

	<!-- Email Form Input -->
	<div class="form-group">
		{!! Form::label('email', 'E-mail') !!}
		{!! Form::text('email', null, ['class'=>'form-control']) !!}
	</div>

	<!-- Telefone Form Input -->
	<div class="form-group">
		{!! Form::label('telefone', 'Telefone:') !!}
		{!! Form::text('telefone', null, ['class'=>'form-control']) !!}
	</div>

	<!-- Celular Form Input -->
	<div class="form-group">
		{!! Form::label('celular', 'Celular:') !!}
		{!! Form::text('celular', null, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Adicionar requisitante', ['class'=>'btn btn-primary']) !!}
	</div>


	{!! Form::close() !!}

</div>
@endsection
</body>
</html>