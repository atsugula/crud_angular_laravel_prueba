<?php

namespace App\Http\Controllers;

use App\Models\Tercero;
use Illuminate\Http\Request;

/**
 * Class TerceroController
 * @package App\Http\Controllers
 */
class TerceroController extends Controller
{

    public function index()
    {
        $terceros = Tercero::all();
        return $terceros;
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
