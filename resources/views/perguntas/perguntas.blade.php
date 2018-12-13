	<h2>Seja bem-vindo(a), jogador(a)</h2>

	<a class="botao" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>
	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	    @csrf
	</form>


	@foreach ($perguntas as $pergunta)
<?php
	$id = $pergunta->id;
	$certa = $pergunta->resposta;
?>
	<p><b>{{$pergunta->enunciado}}</b></p>

	<form action="pergunta.create" method="post">
	  <input type="radio" name="opcao" id="a" value="' +$id+ ';' +$certa+ 'a">
	  <label for="a">{{$pergunta->letra_a}}</label>
	  <br>
	  <input type="radio" name="opcao" id="b" value="' +$id+ ';' +$certa+ 'b">
	  <label for="b">{{$pergunta->letra_b}}</label>
	  <br>
	  <input type="radio" name="opcao" id="c" value="' +$id+ ';' +$certa+ 'c">
	  <label for="c">{{$pergunta->letra_c}}</label>
	  <br>
	  <input type="radio" name="opcao" id="d" value="<?php echo $id; ?> + ; + <?php echo $certa; ?> + d">
	  <label for="d">{{$pergunta->letra_d}}</label>
	  <br><br>
	  <input type="submit" value="Pronto">
	</form>

	@endforeach
