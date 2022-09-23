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
        //Tipos de identificacion
        ElementosLista::create([
            'nombre' => 'REGISTRO CIVIL',
            'tipo_lista_id' => 1,
        ]);
        ElementosLista::create([
            'nombre' => 'CC',
            'tipo_lista_id' => 1,
        ]);
        ElementosLista::create([
            'nombre' => 'TI',
            'tipo_lista_id' => 1,
        ]);
        ElementosLista::create([
            'nombre' => 'NIT',
            'tipo_lista_id' => 1,
        ]);
        ElementosLista::create([
            'nombre' => 'CE',
            'tipo_lista_id' => 1,
        ]);
        ElementosLista::create([
            'nombre' => 'PA',
            'tipo_lista_id' => 1,
        ]);
        //Tipo tercero
        ElementosLista::create([
            'nombre' => 'PACIENTE',
            'tipo_lista_id' => 2,
        ]);
        ElementosLista::create([
            'nombre' => 'EMPLEADO',
            'tipo_lista_id' => 2,
        ]);
        ElementosLista::create([
            'nombre' => 'CONTRATISTA',
            'tipo_lista_id' => 2,
        ]);
        //Departamentos
        ElementosLista::create([
            'nombre' => 'VALLE DEL CAUCA',
            'tipo_lista_id' => 3,
        ]);
        ElementosLista::create([
            'nombre' => 'TOLIMA',
            'tipo_lista_id' => 3,
        ]);
        ElementosLista::create([
            'nombre' => 'VICHADA',
            'tipo_lista_id' => 3,
        ]);
        ElementosLista::create([
            'nombre' => 'BOGOTA',
            'tipo_lista_id' => 3,
        ]);
        ElementosLista::create([
            'nombre' => 'BOLIVAR',
            'tipo_lista_id' => 3,
        ]);
        ElementosLista::create([
            'nombre' => 'NARIÑO',
            'tipo_lista_id' => 3,
        ]);
        ElementosLista::create([
            'nombre' => 'MAGDALENA',
            'tipo_lista_id' => 3,
        ]);
        //Ciudades
        ElementosLista::create([
            'nombre' => 'SANTA MARTA',
            'tipo_lista_id' => 4,
        ]);
        ElementosLista::create([
            'nombre' => 'PASTO',
            'tipo_lista_id' => 4,
        ]);
        ElementosLista::create([
            'nombre' => 'CARTAGENA',
            'tipo_lista_id' => 4,
        ]);
        ElementosLista::create([
            'nombre' => 'BOGOTA',
            'tipo_lista_id' => 4,
        ]);
        ElementosLista::create([
            'nombre' => 'IBAGUE',
            'tipo_lista_id' => 4,
        ]);
        ElementosLista::create([
            'nombre' => 'CALI',
            'tipo_lista_id' => 4,
        ]);
        ElementosLista::create([
            'nombre' => 'TULUA',
            'tipo_lista_id' => 4,
        ]);
        ElementosLista::create([
            'nombre' => 'YUMBO',
            'tipo_lista_id' => 4,
        ]);
        //TIPO CONTRIBUYENTE
        ElementosLista::create([
            'nombre' => 'GRAN CONTRIBUYENTE',
            'tipo_lista_id' => 5,
        ]);
        ElementosLista::create([
            'nombre' => 'RESPONSABLE DE IVA',
            'tipo_lista_id' => 5,
        ]);
        ElementosLista::create([
            'nombre' => 'REGIMEN ESPECIAL',
            'tipo_lista_id' => 5,
        ]);
        ElementosLista::create([
            'nombre' => 'ENTIDAD DE DERECHO PUBLICO',
            'tipo_lista_id' => 5,
        ]);
        ElementosLista::create([
            'nombre' => 'MEDIANO ALTO',
            'tipo_lista_id' => 5,
        ]);
        ElementosLista::create([
            'nombre' => 'MEDIANO',
            'tipo_lista_id' => 5,
        ]);
        ElementosLista::create([
            'nombre' => 'PEQUEÑO',
            'tipo_lista_id' => 5,
        ]);
        ElementosLista::create([
            'nombre' => 'MICRO',
            'tipo_lista_id' => 5,
        ]);
        ElementosLista::create([
            'nombre' => 'POR CLASIFICAR',
            'tipo_lista_id' => 5,
        ]);
    }
}
