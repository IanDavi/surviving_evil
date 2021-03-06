<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jogador extends Model
{
    //
    public $timestamps = false;

    public function personagens(){
    	return $this->hasMany(
            Personagem::class, 
            'jogador_id');
    }

    public function user()
	{
		return $this->belongsTo(
			User::class,
			'id');
	}
}
