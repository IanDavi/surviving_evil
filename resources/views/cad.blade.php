@extends('layouts.principal')
@section('conteudo')
		<h2 id="jogador" class="titulo"> Jogador </h2>
		
		<form class="form" action="{{route('cad_personagem')}}" method="post">
			<div class="inline"> 
				Nickname <input class="campos" size="10" type="text" name="nome" > 
			</div>
			<div class="inline">
				Email <input class="campos" size="10" type="text" name="sobrenome" >
			</div>
			<div id="form_senha">
				 Senha <input class="campos" id="" size="10" type="password" name="nome" >

				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<button id="botão" type="submit" name="button">Avançar</button>
			</div>
		</form>
@stop