<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'ubigeo_peru_districts';
    public $timestamps = false;
    
    protected $fillable = [
         'name', 'province_id', 'department_id'
    ];

    protected $primaryKey = 'id'; // Nombre de la clave primaria


    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id', 'id');
    }
}


