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
        for ($i = 0; $i <= 2; $i++) {
            $user = factory(App\User::class)->create();
            $user->tipo = 'Administrador';
            $user->save ();
                

            DB::table('administradors')->insert([
                'id' => $user->id
            ]);    
        }
    }
}
