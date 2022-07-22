<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    static $rules=[
            'nombre'=>'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'psicologo' => 'required',
            'eventoid' => 'required',

    ];

        protected $fillable=['nombre','apellido','telefono','email','psicologo','hinicio','eventoid'];


}