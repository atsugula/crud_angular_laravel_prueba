<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TiposLista;

class TipolistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TiposLista::create([
            'nombre' => 'tipo_identificacion',
        ]);
        TiposLista::create([
            'nombre' => 'tipo_tercero',
        ]);
        TiposLista::create([
            'nombre' => 'departamento',
        ]);
        TiposLista::create([
            'nombre' => 'ciudad',
        ]);
        TiposLista::create([
            'nombre' => 'tipo_contribuyente',
        ]);
    }
}
