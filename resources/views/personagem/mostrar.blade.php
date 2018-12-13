@extends('layouts.principal')
@section('conteudo')

	<div>
	    <h1>Listagem das personagens:</h1>
	 
	    @foreach ($personagens as $personagem)
	        <p><b>Nome:</b> {{$personagem->nome}}</p>
	        <p><b>Força:</b> {{$personagem->forca}}</p>
	        <p><b>Agilidade:</b> {{$personagem->agilidade}}</p>
	        <p><b>Precisão:</b> {{$personagem->precisao}}</p>
	        <p><b>Estamina:</b> {{$personagem->estamina}}</p>
	        <p><b>Furtividade:</b> {{$personagem->furtividade}}</p>
	    @endforeach
	</div>

@stop