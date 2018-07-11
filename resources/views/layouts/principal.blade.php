<!DOCTYPE html>
<html>
<head>
	<title>Surviving Evil</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/app.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<audio autoplay hidden loop>
  		<source src="/audio/musga.mp3" type="audio/mp3">
	</audio>
</head>
<body>


	<figure id="container-imagem">

		<img id="imagem" src="img/folha.jpg"> <!-- Aparentemente a maneira correta seria <img src="{!! asset('img/folha.jpg') !!}">> !-->
		<a href="{{route('home')}}"><i id="icone" class="fa fa-home"></i></a>
		@yield('conteudo')

	</figure>
	


</body>
</html>