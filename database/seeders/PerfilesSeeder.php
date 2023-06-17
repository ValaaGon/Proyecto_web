<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Perfil;

class PerfilesSeeder extends Seeder
{
  
    public function run(): void
    {
        $perfiles = [
            ['nombre' => 'Admi'],
            ['nombre' => 'Artista'],
        ];

        DB::table('Perfiles')->insert($perfiles);
    }
}
