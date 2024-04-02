<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estudiante
 *
 * @property $id
 * @property $Nombres
 * @property $Apellidos
 * @property $Asignatura
 * @property $Nota
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estudiante extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombres', 'Apellidos', 'Asignatura', 'Nota'];



}
