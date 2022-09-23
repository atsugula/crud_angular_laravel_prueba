<?php

namespace App\Http\Controllers;

use App\Models\Tercero;
use Illuminate\Http\Request;
use App\Models\ElementosLista;

/**
 * Class TerceroController
 * @package App\Http\Controllers
 */
class TerceroController extends Controller
{

    public function index()
    {
        //Para llevar el nombre de los selects y no el id
        $elementos = [];
        $terceros = Tercero::all();
        foreach ($terceros as $lista){
            $e = [
                'id' => $lista->id,
                'nombre1' => $lista->nombre1,
                'nombre2' => $lista->nombre2,
                'apellido1' => $lista->apellido1,
                'apellido2' => $lista->apellido2,
                'numero_identificacion' => $lista->numero_identificacion,
                'departamento_id' => ElementosLista::where('id','=',$lista->departamento_id)->value('nombre'),
                'ciudad_id' => ElementosLista::where('id','=',$lista->ciudad_id)->value('nombre'),
                'tipo_contribuyente_id' => ElementosLista::where('id','=',$lista->tipo_contribuyente_id)->value('nombre'),
                'tipo_identificacion_id' => ElementosLista::where('id','=',$lista->tipo_identificacion_id)->value('nombre'),
                'tipo_tercero_id' => ElementosLista::where('id','=',$lista->tipo_tercero_id)->value('nombre'),
            ];
            array_push($elementos,$e);
        }
        return $elementos;
    }

    public function store(Request $request)
    {
        $tercero = new Tercero();
        $tercero->numero_identificacion = $request->numero_identificacion;
        $tercero->nombre1 = $request->nombre1;
        $tercero->nombre2 = $request->nombre2;
        $tercero->apellido1 = $request->apellido1;
        $tercero->apellido2 = $request->apellido2;
        $tercero->departamento_id = $request->departamento_id;
        $tercero->ciudad_id = $request->ciudad_id;
        $tercero->tipo_tercero_id = $request->tipo_tercero_id;
        $tercero->tipo_contribuyente_id = $request->tipo_contribuyente_id;
        $tercero->tipo_identificacion_id = $request->tipo_identificacion_id;
        $tercero->save();
        return $tercero;
    }

    public function show($id)
    {
        $tercero = Tercero::find($id);
        return $tercero;
    }

    public function update(Request $request, $id)
    {
        $tercero = Tercero::find($id);
        $tercero->numero_identificacion = $request->numero_identificacion;
        $tercero->nombre1 = $request->nombre1;
        $tercero->nombre2 = $request->nombre2;
        $tercero->apellido1 = $request->apellido1;
        $tercero->apellido2 = $request->apellido2;
        $tercero->departamento_id = $request->departamento_id;
        $tercero->ciudad_id = $request->ciudad_id;
        $tercero->tipo_tercero_id = $request->tipo_tercero_id;
        $tercero->tipo_contribuyente_id = $request->tipo_contribuyente_id;
        $tercero->tipo_identificacion_id = $request->tipo_identificacion_id;
        $tercero->update();
        return $tercero;
    }

    public function destroy($id)
    {
        $tercero = Tercero::find($id)->delete();

        return $tercero;
    }
}
