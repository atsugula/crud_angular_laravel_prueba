<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TiposLista extends Model
{
    public $timestamps = false;

    protected $fillable = ['nombre'];

    public function elementosListas()
    {
        return $this->hasMany('App\Models\ElementosLista', 'tipo_lista_id', 'id');
    }


}
