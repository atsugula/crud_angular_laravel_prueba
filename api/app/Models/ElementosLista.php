<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ElementosLista extends Model
{
    public $timestamps = false;
    protected $fillable = ['nombre','tipo_lista_id'];

    public function tiposLista()
    {
        return $this->hasOne('App\Models\TiposLista', 'id', 'tipo_lista_id');
    }


}
