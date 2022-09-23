<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tercero extends Model
{
    public $timestamps = false;
    static $rules = [
		'numero_identificacion' => 'required',
		'nombre1' => 'required',
		'nombre2' => 'required',
		'apellido1' => 'required',
		'apellido2' => 'required',
		'departamento_id' => 'required',
		'ciudad_id' => 'required',
		'tipo_tercero_id' => 'required',
		'tipo_contribuyente_id' => 'required',
		'tipo_identificacion_id' => 'required',
    ];

    protected $fillable = ['numero_identificacion','nombre1','nombre2','apellido1','apellido2','departamento_id','ciudad_id','tipo_tercero_id','tipo_contribuyente_id','tipo_identificacion_id'];



}
