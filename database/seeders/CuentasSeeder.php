<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


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
                'password' => Hash::make('soyadmi123'),
                'nombre' => 'Moussa',
                'apellido' => 'Rus',
                'perfil_id' => 1,
                
            ],

            [
                'user' => 'Artista1',
                'password' => Hash::make('soyartista123'),
                'nombre' => 'Camila',
                'apellido' => 'Manrriquez',
                'perfil_id' => 2,
                
            ],


            [
                'user' => 'Artista2',
                'password' => Hash::make('soyartista456'),
                'nombre' => 'Abdellah',
                'apellido' => 'Jover',
                'perfil_id' => 2,
                
            ],
           
        ]);
    }
}