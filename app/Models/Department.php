<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'ubigeo_peru_departments';
    public $timestamps = false;
    
    protected $fillable = [
         'name'
    ];

    // protected $primaryKey = 'id'; // Nombre de la clave primaria
    
}
