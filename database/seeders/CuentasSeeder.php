<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CuentasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        DB::table('Cuentas')->insert([
            [
                'user' => 'Administrador',
                'password' => 'soyadmi123',
                'nombre' => 'Moussa',
                'apellido' => 'Rus',
                'perfil_id' => 1,
                
            ],
           
            [
                'user' => 'Artista1',
                'password' => 'soyartista123',
                'nombre' => 'Eneko',
                'apellido' => 'Ferre',
                'perfil_id' => 2,
                
            ],
            [
                'user' => 'Artista2',
                'password' => 'soyartista456',
                'nombre' => 'Sabrina',
                'apellido' => 'Dominguez',
                'perfil_id' => 2,
               
            ],
        ]);
    }
}