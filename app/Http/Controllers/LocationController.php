<?php

namespace App\Http\Controllers;


use App\Models\Department;
use App\Models\Province;
use App\Models\District;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    //

    public function index()
    {
        return Department::all();
    }

    public function province($department_id)
    {
        // Ahora $department_id contiene el valor del parámetro capturado en la URL
    
        // Puedes usar $department_id como lo necesites aquí
    
        // Por ejemplo, para imprimir el valor del ID
        echo($department_id);
    
        // Luego puedes continuar con el resto de tu lógica aquí
    
        // Por ejemplo, puedes usar $department_id en una consulta para obtener las provincias asociadas
        try {
            $provinces = Province::where('department_id', $department_id)->get();
            
            if ($provinces->isEmpty()) {
                return response()->json(['error' => 'No se encontraron provincias para el departamento dado.']);
            }
    
            return $provinces;
    
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }
    

    

public function district($province_id)
{
    echo($province_id);

    try {
        // Obtener los distritos asociados a la provincia dada
        $districts = District::where('province_id', $province_id)->get();
        
        // Verificar si se encontraron distritos
        if ($districts->isEmpty()) {
            return response()->json(['error' => 'No se encontraron distritos para la provincia dada.']);
        }
    
        // Devolver los distritos encontrados
        return response()->json($districts);
    
    } catch (\Exception $e) {
        // Manejar cualquier excepción que ocurra durante la ejecución de la consulta
        return response()->json(['error' => $e->getMessage()]);
    }
}

    
    // public function district($province_id)
    // {
    //     $province_id = $request->input('province_id');
    //     return District::where('province_id', $province_id)->get();
    // }

}
