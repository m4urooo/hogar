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
        'seguro_cesantia',
        'tipo_contrato',
        'fecha_contrato',
        'sueldo_base',
        'valor_hora_ex',
        'valor_hora_ex_feriado',
        'asig_familiar_cantidad',
        'asig_familiar_valor',
        'caja_comp',
        'valor_caja_comp',
        'email',
        'password',
        'hogar',
        'prestamo_cla',
        'fecha_prestamo_cla',
        'valor_cuota_prestamo_cla',
        'cantidad_cuotas_prestamo_cla',
        'cuotas_restantes_prestamo_cla'
     
  
    ];
}
