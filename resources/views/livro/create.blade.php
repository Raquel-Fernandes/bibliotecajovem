@extends('layouts.app')

<!DOCTYPE html>
<html>
<head>
	<title>Livros</title>
</head>
<body>
@section('content')
<div class="container">
	<h1>Novo Livro</h1>

	@if ($errors->any())
	<ul class="alert alert-warning">
		@foreach($errors->all() as $error)
		<li>{{ $error}}</li>
		@endforeach
	</ul>
    @endif

	{!! Form::open(['route'=>'livro.store']) !!}

	<!-- Autor Form Input -->
	<div class="form-group">
		{!! Form::label('autor', 'Autor:') !!}
		{!! Form::text('autor', null, ['class'=>'form-control']) !!}
	</div>

	<!-- Titulo Form Input -->
	<div class="form-group">
		{!! Form::label('titulo', 'Titulo:') !!}
		{!! Form::text('titulo', null, ['class'=>'form-control']) !!}
	</div>

	<!-- Editora Form Input -->
	<div class="form-group">
		{!! Form::label('editora', 'Editora:') !!}
		{!! Form::text('editora', null, ['class'=>'form-control']) !!}
	</div>

	<!-- Origem Form Input -->
	<div class="form-group">
		{!! Form::label('origem', 'Origem:') !!}
		{!! Form::text('origem', null, ['class'=>'form-control']) !!}
	</div>

	<!-- Disponibilidade Form Input -->
	<div class="form-group">
		{!! Form::label('disponivel', 'Disponível?:') !!}
		{!! Form::select('disponivel', ['S'=>'Sim', 'N'=>'Não']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Adicionar livro', ['class'=>'btn btn-primary']) !!}
	</div>


	{!! Form::close() !!}

</div>
@endsection
</body>
</html>