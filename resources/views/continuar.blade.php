
@extends('layouts.principal')
@section('conteudo')

	<h2 id="entrar" class="titulo"> Entrar </h2>
		
	<form class="form" action="{{route('erro')}}" method="post">
		<div class="inline"> 
			Email/Nick <input class="campos" size="10" type="text" name="email" > 
		</div>
		<div class="inline">
			Senha <input class="campos" size="10" type="text" name="senha" >
		</div>
		<div>
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<button id="botão3" type="submit" name="button">Avançar</button>
		</div>
	</form>

@stop