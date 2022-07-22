<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabla1 extends Model
{
    use HasFactory;

    static $rules=[
            'id_evento'=>'required',
            'title' => 'required',
            'descripcion' => 'required',
            'start' => 'required',
            'end' => 'required',
            'hinicio' => 'required',
            'hfinal' => 'required',
            'id_cliente' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'psicologo' => 'required',


    ];

    protected $table = 'v_tabla1';
    protected $primarykey = 'id_evento';


}