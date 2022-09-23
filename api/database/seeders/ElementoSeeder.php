<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ElementosLista;

class ElementoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ElementosLista::create([
            'nombre' => 'CC',
            'tipo_lista_id' => 1,
            'elemento_lista_id' => 1,
        ]);
        ElementosLista::create([
            'nombre' => 'Tarjeta Identidad',
            'tipo_lista_id' => 1,
            'elemento_lista_id' => 2,
        ]);
    }
}
