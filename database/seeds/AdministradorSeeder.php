<?php

use Illuminate\Database\Seeder;

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $prefixo = '20150401';

        

        for ($i = 0; $i <= 2; $i++) {
            $user = factory(App\User::class)->create();
            $user->tipo = 'Administrador';

            $a = rand(1,9);
            $b = rand(1,9);

            $matricula = $prefixo . $a . $b;

            $user->save ();
                

            DB::table('administradors')->insert([
                'matricula' => $matricula,
                'id' => $user->id
            ]);    
        }
    }
}
