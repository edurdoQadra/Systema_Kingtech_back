<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matriz extends Model
{
    use HasFactory;

    protected $table = 'matrizs'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'ADMINISTRADOR',
        'REPORTES',
        'DEPARTAMENTO',
        'PROVINCIA',
        'DISTRITO',
        'DIRECCION',
        'REFERENCIA',
        'ASOCIADO',
        'DNI',
        'NUMERO',
        'RAZON_SOCIAL',
        'RUC',
        'PORCENTAJE_EMPRESA',
        'CORREO',
        'TELEFONO',
        'ESTADO_LOCAL',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at'=>'datetime'
    ];

    protected $primaryKey = 'ID'; // Nombre de la clave primaria
}
