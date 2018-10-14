<?php

use Illuminate\Database\Seeder;

class PersonagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Personagem::class, 10)
        	->create();
    }
}
