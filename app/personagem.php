<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personagem extends Model
{
	public $timestamps = false;
    //
    public function jogador(){
    	return $this->belongsTo(
            Jogador::class,
            'id');
    }
}
