@extends('layouts.app')

<!DOCTYPE html>
<html>
<head>
	<title>Livros</title>
</head>
<body>
@section('content')
<div class="container">
	<h1>Editar {{ $livro->titulo }}</h1>
	

    
    {!! Form::open(['route'=>['livro.update', $livro->id], 'method'=>'put']) !!}

    <!-- Autor Form Input -->
	<div class="form-group">
		{!! Form::label('autor', 'Autor:') !!}
		{!! Form::text('autor', $livro->autor, ['class'=>'form-control']) !!}
	</div>

	<!-- Titulo Form Input -->
	<div class="form-group">
		{!! Form::label('titulo', 'Titulo:') !!}
		{!! Form::text('titulo', $livro->titulo, ['class'=>'form-control']) !!}
	</div>

	<!-- Editora Form Input -->
	<div class="form-group">
		{!! Form::label('editora', 'Editora:') !!}
		{!! Form::text('editora', $livro->editora, ['class'=>'form-control']) !!}
	</div>

	<!-- Origem Form Input -->
	<div class="form-group">
		{!! Form::label('origem', 'Origem:') !!}
		{!! Form::text('origem', $livro->origem, ['class'=>'form-control']) !!}
	</div>

	<!-- Disponibilidade Form Input -->
	<div class="form-group">
		{!! Form::label('disponivel', 'Disponível?:') !!}
		{!! Form::select('disponivel', ['S'=>'Sim', 'N'=>'Não'], $livro->disponivel) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Alterar livro', ['class'=>'btn btn-primary']) !!}
	</div>

	{!! Form::close() !!}

</div>
@endsection
</body>
</html>