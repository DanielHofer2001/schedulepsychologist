<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HorasAdmin
 *
 * @property $id
 * @property $fecha
 * @property $fecha_inicio
 * @property $fecha_final
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class HorasAdmin extends Model
{
    
    static $rules = [
		'fecha' => 'required',
		'fecha_inicio' => 'required',
		'fecha_final' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha','fecha_inicio','fecha_final'];



}
