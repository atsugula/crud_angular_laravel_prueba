<?php

namespace App\Http\Controllers;

use App\Models\TiposLista;
use Illuminate\Http\Request;

/**
 * Class TiposListaController
 * @package App\Http\Controllers
 */
class TiposListaController extends Controller
{

    public function index()
    {
        $tiposListas = TiposLista::all();

        return $tiposListas;
    }

    public function store(Request $request)
    {
        $tiposLista = new TiposLista();
        $tiposLista->nombre = $request->nombre;
        $tiposLista->save();
        return $tiposLista;
    }

    public function show($id)
    {
        $tiposLista = TiposLista::find($id);

        return $tiposLista;
    }

    public function update(Request $request, $id)
    {
        $tiposLista = TiposLista::find($id);
        $tiposLista->nombre = $request->nombre;
        $tiposLista->save();
        return $tiposLista;
    }

    public function destroy($id)
    {
        $tiposLista = TiposLista::find($id)->delete();

        return $tiposLista;
    }
}
