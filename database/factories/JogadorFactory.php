<?php

use Faker\Generator as Faker;

$factory->define(App\Jogador::class, function (Faker $faker) {

	$user = factory(App\User::class)->create();
	$user->type = 'Jogador';
	$user->save();

    return [
    	'nick' => $faker->name,
    	'id' => $user
        //
    ];
});
