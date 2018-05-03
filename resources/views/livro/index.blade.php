@extends('layouts.app')
<!DOCTYPE html>

<html>
 <head>
 <title>Livros</title>
 </head>
 <body>
@section('content')
<div class="container">
 <h1>Livros</h1>
 <a href="{{ route('livro.create')}}" class="btn btn-default">Novo livro</a> 
 <br />
 <br />
 <table class="table table-striped table-bordered table-hover">
 	<thead>
 		<tr>
 			<th>#</th>
 			<th>Autor</th>
 			<th>Titulo</th>
 			<th>Editora</th>
 			<th>Origem</th>
 			<th>Disponível?</th>
 			<th>Ação</th>
 		</tr>
 	</thead>	
 	<tbody>
	@foreach($livro as $a)
	<tr>
		<td>{{ $a->id }}</td>
		<td>{{ $a->autor }}</td>
		<td>{{ $a->titulo }}</td>
		<td>{{ $a->editora }}</td>
		<td>{{ $a->origem }}</td>
		<td>{{ $a->disponivel }}</td>
		<td>
			 <a href="{{ route('livro.edit',['id'=>$a->id])}}" class="btn-sm btn-success">Editar</a>
			 <a href="{{ route('livro.destroy',['id'=>$a->id])}}" class="btn-sm btn-danger">Remover</a> 
		</td>
 	</tr>	
 	@endforeach
 </tbody>
</table>
</div>
@endsection
 </body>
 </html>