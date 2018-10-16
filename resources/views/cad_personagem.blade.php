@extends('layouts.principal')
@section('conteudo')
	<script type="text/javascript" src="/js/app.js"></script>
		
	<h2 class="titulo" id="personagem">Personagem</h2>		
	<form class="form2" action="{{route('personagem.store')}}" method="post">
			Você tem 7 pontos. Distribua-os conforme julgar melhor:
		<div id="nome_input"> 
			Nome <input required="" value="" class="campos" size="8" type="text" name="nome" > 
			<span id="agi_furt">
				Agilidade <input required="" value="0" type="number" id="agilidade" name="agilidade" min="0" max="7" onClick="medidor()">
				Furtividade <input required="" value="0" type="number" id="furtividade" name="furtividade" min="0" max="7" onClick="medidor()">
			</span>
			<div id="for_pre_est">
				Força <input required="" value="0" type="number" id="forca" name="forca" min="0" max="7" onClick="medidor()">
				Precisão <input required="" value="0" type="number" id="precisao" name="precisao" min="0" max="7" onClick="medidor()">
				Estamina <input required="" value="0" type="number" id="estamina" name="estamina" min="0" max="7" onClick="medidor()">
			
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<button id="botão2" type="submit" name="button">Avançar</button>
			</div>

		</div>

	</form>

@stop