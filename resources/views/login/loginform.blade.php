@extends('layouts.principal')
@section('conteudo')
		<h2 id="jogador" class="titulo"> Jogador </h2>
		
		<form class="form" action="{{route('login')}}" method="post">
			@csrf

			<div class="inline">
				Email <input required="" type="email" class="campos" size="10" type="text" name="email" >
			</div>
			<div id="form_senha">
				 Senha <input required="" class="campos" id="" size="10" type="password" name="password" >

				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<button id="botão" type="submit" name="button">Logar</button>
			</div>
		</form>
@stop