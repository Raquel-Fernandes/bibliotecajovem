@extends('layouts.app')

<!DOCTYPE html>
<html>
<head>
	<title>Requisitante</title>
</head>
<body>
@section('content')
<div class="container">
	<h1>Editar {{ $reqs->nome }}</h1>
	

    
    {!! Form::open(['route'=>['requisitante.update', $reqs->id], 'method'=>'put']) !!}

    <!-- Nome Form Input -->
	<div class="form-group">
		{!! Form::label('nome', 'Nome:') !!}
		{!! Form::text('nome', $reqs->nome, ['class'=>'form-control']) !!}
	</div>

	<!-- Email Form Input -->
	<div class="form-group">
		{!! Form::label('email', 'E-mail') !!}
		{!! Form::text('email', $reqs->email, ['class'=>'form-control']) !!}
	</div>

	<!-- Telefone Form Input -->
	<div class="form-group">
		{!! Form::label('telefone', 'Telefone:') !!}
		{!! Form::text('telefone', $reqs->telefone, ['class'=>'form-control']) !!}
	</div>

	<!-- Celular Form Input -->
	<div class="form-group">
		{!! Form::label('celular', 'Celular:') !!}
		{!! Form::text('celular', $reqs->celular, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Alterar requisitante', ['class'=>'btn btn-primary']) !!}
	</div>

	{!! Form::close() !!}

</div>
@endsection
</body>
</html>