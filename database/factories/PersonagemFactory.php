<?php

use Faker\Generator as Faker;

$factory->define(App\Personagem::class, function (Faker $faker) {

	$pontos = [
		1,
		2,
		3,
		4,
		5,
		6,
		7
	];

	$soma = 0;
	
	$a = 0;
	$b = 0;
	$c = 0;
	$d = 0;
	$e = 0;

	while ($soma==0 || $soma>7){
		$a = $pontos[rand(0,6)];
		$b = $pontos[rand(0,6)];
		$c = $pontos[rand(0,6)];
		$d = $pontos[rand(0,6)];
		$e = $pontos[rand(0,6)];

		$soma = $a+$b+$c+$d+$e;
	}


    return [
        //
        'jogador_id' => function () {
			$count = App\Jogador::get()->count();
        	return App\Jogador::find(rand(1,$count));
        },
        'nome' => $faker->name,
        'forca' => $a,
		'agilidade' => $b,
		'precisao' => $c,
		'estamina' => $d,
		'furtividade' => $e
    ];
});
