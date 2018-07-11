@extends('layouts.principal')
@section('conteudo')
		
	<h2 class="titulo" id="personagem">Personagem</h2>		
	<form class="form2" action="{{route('erro')}}" method="post">
			Você tem 7 pontos. Distribua-os conforme julgar melhor:
		<div id="nome_input"> 
			Nome <input class="campos" size="8" type="text" name="nome" > 
			<span id="agi_furt">
				Agilidade <input type="number" name="agilidade" max="7">
				Furtividade <input type="number" name="furtividade" max="7">
			</span>
			<div id="for_pre_est">
				Força <input type="number" name="forca" max="7">
				Precisão <input type="number" name="precisao" max="7">
				Estamina <input type="number" name="estamina" max="7">
			
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<button id="botão2" type="submit" name="button">Avançar</button>
			</div>

		</div>

	</form>

@stop