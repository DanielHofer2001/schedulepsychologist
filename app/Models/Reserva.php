<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    static $rules=[
            'nombre'=>'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'descripcion' => 'required',
    ];

        protected $fillable=['nombre','apellido','telefono','email','descripcion'];


}