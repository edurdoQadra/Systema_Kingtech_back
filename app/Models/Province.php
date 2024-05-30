<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'ubigeo_peru_provinces';
    
    public $timestamps = false;
    
    protected $fillable = [
         'name', 'department_id'
    ];
    
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }
}
