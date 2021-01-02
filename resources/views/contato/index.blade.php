@extends('layouts.site')

@section('titulo', "Contatos")

@section('conteudo')

	<h2>Index de Contato</h2>

	@foreach($contatos as $contato)
		<p>{{ $contato['nome'] ." - ". $contato['contato'] }}</p>

	@endforeach


@endsection