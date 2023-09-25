<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'rut',
        'cargo',
        'salud',
        'valor_salud',
        'afp',
        'valor_afp',
        'tipo_contrato',
        'fecha_contrato',
        'sueldo_base',
        'valor_hora_ex',
        'asig_familiar',
        'caja_comp',
        'valor_caja_comp',
        'email',
        'password',
        'hogar'
    ];
}
