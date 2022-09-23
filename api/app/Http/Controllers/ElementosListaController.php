<?php

namespace App\Http\Controllers;

use App\Models\ElementosLista;
use App\Models\TiposLista;
use Illuminate\Http\Request;

/**
 * Class ElementosListaController
 * @package App\Http\Controllers
 */
class ElementosListaController extends Controller
{

    public function index()
    {
        $elementosListas = ElementosLista::all();
        return $elementosListas;
    }

    public function store(Request $request)
    {
        $elementosLista = new ElementosLista();
        $elementosLista->nombre = $request->nombre;
        $elementosLista->tipo_lista_id = $request->tipo_lista_id;
        $elementosLista->elemento_lista_id = $request->elemento_lista_id;
        $elementosLista->save();

        return redirect()->route('elementos-listas.index')
            ->with('success', 'ElementosLista created successfully.');
    }

    public function show($id)
    {
        $elementosLista = ElementosLista::find($id);

        return $elementosLista;
    }

    public function update(Request $request, $id)
    {
        $elementosLista = ElementosLista::find($id);
        $elementosLista->nombre = $request->nombre;
        $elementosLista->tipo_lista_id = $request->tipo_lista_id;
        $elementosLista->elemento_lista_id = $request->elemento_lista_id;
        $elementosLista->update();
        return $elementosLista;
    }

    public function destroy($id)
    {
        $elementosLista = ElementosLista::find($id)->delete();
        return $elementosLista;
    }

    //Desarrollamos este metodo para traer
    //Todos los elemento, dependiendo del tipo
    public function findElemento($tipo){
        $tipolista = TiposLista::where('nombre',$tipo)->get();
        $elemento=ElementosLista::where('tipo_lista_id','=',$tipolista[0]->id)->get();
        return $elemento;
    }

}
