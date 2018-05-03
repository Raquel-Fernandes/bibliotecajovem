<!DOCTYPE html>
<html>
<head>
 <title>Requisitantes</title>
</head>
<body>
@extends('layouts.app')

 @section('content')
 	<div class="container">
 		<h1>Requisitantes</h1>
 		<a href="{{ route('requisitante.create')}}" class="btn btn-default">Novo Requisitante</a> 
 		<table class="table table-striped table-bordered table-hover">
 			<thead>
 				<tr>
 					<th>#</th>
 					<th>Nome</th>
 					<th>E-mail</th>
 					<th>Telefone</th>
 					<th>Celular</th>
 					<th>Ação</th>
 				</tr>  
 			</thead>
 			<tbody>
 			@foreach($reqs as $r)
 			<tr>
 				<td>{{$r->id}}</td>
 				<td>{{$r->nome}}</td>
 				<td>{{$r->email}}</td>
 				<td>{{$r->telefone}}</td>
 				<td>{{$r->celular}}</td>
 				<td>
				 <a href="{{ route('requisitante.edit',['id'=>$r->id])}}" class="btn-sm btn-success">Editar</a>
				 <a href="{{ route('requisitante.destroy',['id'=>$r->id])}}" class="btn-sm btn-danger">Remover</a> 
				</td>
 			</tr>
 			@endforeach	
 		</table>
 	</div>
 @endsection
</body>
</html>