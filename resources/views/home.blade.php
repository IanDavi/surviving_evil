@extends('layouts.principal')
@section('conteudo')

		<figcaption>
			<h2 id="surviving_evil" class="titulo"> Surviving Evil </h2>
			<a href="{{route('jogador.index')}}"><h3 id="novo_jogo" class="botao"> Novo jogo </h3></a>
			<a href="{{ route('login') }}"><h3 id="login" class="botao">Login</h3></a>
			<a href="{{route('personagem.create')}}"><h3 id="pers" class="botao">Lista de personagens</h3></a>
			<a href="{{route('home')}}"><h3 id="creditos" class="botao">Créditos</h3></a>
		<a class="botao" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>
	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	    @csrf
	</form>
		</figcaption>
	
	
@stop
 
