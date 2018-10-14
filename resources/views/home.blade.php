
@extends('layouts.principal')
@section('conteudo')

		<figcaption>
			<h2 id="surviving_evil" class="titulo"> Surviving Evil </h2>
			<a href="{{route('jogador.index')}}"><h3 id="novo_jogo" class="botao"> Novo jogo </h3></a>
			<a href="{{route('home')}}"><h3 id="login" class="botao">Login</h3></a>
			<a href="{{route('home')}}"><h3 id="ranking" class="botao">Ranking</h3></a>
			<a href="{{route('home')}}"><h3 id="creditos" class="botao">Créditos</h3></a>
		</figcaption>
	
	
@stop
 
