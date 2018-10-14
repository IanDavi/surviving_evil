<?php

use Faker\Generator as Faker;

$factory->define(App\Jogador::class, function (Faker $faker) {

	$user = factory(App\User::class)->create();
	$user->tipo = 'Jogador';
	$user->save();

    return [
    	'id' => $user

        //
    ];
});
