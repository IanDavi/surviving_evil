@extends('layouts.principal')
@section('conteudo')
		<h2 id="jogador" class="titulo"> Administrador </h2>
		
		<form class="form" action="{{route('jogador.store')}}" method="post">
			@csrf

			<div class="inline"> 
				Nickname <input required="" class="campos" size="10" type="text" name="nome" > 
			</div>
			<div class="inline">
				Email <input required="" type="email" class="campos" size="10" type="text" name="email" >
			</div>
			<div id="form_senha">
				 Senha <input required="" class="campos" id="" size="10" type="password" name="password" >
				
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<button id="botão" type="submit" name="button">Avançar</button>
			</div>
		</form>
@stop