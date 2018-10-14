<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personagems', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jogador_id')
                ->unsigned();
            $table->string('nome');
            $table->integer('forca');
            $table->integer('agilidade');
            $table->integer('precisao');
            $table->integer('estamina');
            $table->integer('furtividade');
            //$table->integer('saude_mental');
        
            $table->foreign('jogador_id')
                ->references('id')
                ->on('jogadors');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personagems');
    }
}
