<h2>Index de Contato</h2>

@foreach($contatos as $contato)
	<p>{{ $contato['nome'] ." - ". $contato['contato'] }}</p>

@endforeach