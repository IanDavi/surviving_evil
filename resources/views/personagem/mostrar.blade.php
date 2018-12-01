<!DOCTYPE html>
<html>
<head>
	<title>Lista de Personagens</title>
</head>
<body>

	<div>
	    <h1>Listagem das personagens:</h1>
	 
	    @forelse ($personagens as $personagem)
	        <p><b>Nome:</b> {{$personagem->nome}}</p>
	        <p><b>Força:</b> {{$personagem->forca}}</p>
	        <p><b>Agilidade:</b> {{$personagem->agilidade}}</p>
	        <p><b>Precisão:</b> {{$personagem->precisao}}</p>
	        <p><b>Estamina:</b> {{$personagem->estamina}}</p>
	        <p><b>Furtividade:</b> {{$personagem->furtividade}}</p>
	    @endforelse
	</div>
</body>
</html>