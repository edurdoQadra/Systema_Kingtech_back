<?php

namespace App\Http\Controllers;

use App\Models\Matriz;
use Illuminate\Http\Request;

class MatrizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matrices = Matriz::all()->toArray();
        return response()->json($matrices);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ADMINISTRADOR' => 'max:255',
            'REPORTES' => 'max:255',
            'DEPARTAMENTO' => 'max:255',
            'PROVINCIA' => 'max:255',
            'DISTRITO' => 'max:255',
            'DIRECCION' => 'max:255',
            'REFERENCIA' => 'max:255',
            'ASOCIADO' => 'max:255',
            'DNI' => 'max:255',
            'NUMERO' => 'max:255',
            'RAZON_SOCIAL' => 'max:255',
            'RUC' => 'max:255',
            'PORCENTAJE_EMPRESA' => 'max:255',
            'CORREO' => 'max:255|email',
            'TELEFONO' => 'max:255',
            'ESTADO_LOCAL' => 'max:255',
        ]);
        
        $matriz = Matriz::create($request->all());
        return response()->json($matriz, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matriz  $matriz
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // echo($id);
        $matriz = Matriz::findOrFail($id);
        //echo($matriz);
        return response()->json($matriz);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matriz  $matriz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matriz $matriz)
    {
        $validatedData = $request->validate([
            'ADMINISTRADOR' => 'max:255',
            'REPORTES' => 'max:255',
            'DEPARTAMENTO' => 'max:255',
            'PROVINCIA' => 'max:255',
            'DISTRITO' => 'max:255',
            'DIRECCION' => 'max:255',
            'REFERENCIA' => 'max:255',
            'ASOCIADO' => 'max:255',
            'DNI' => 'max:255',
            'NUMERO' => 'max:255',
            'RAZON_SOCIAL' => 'max:255',
            'RUC' => 'max:255',
            'PORCENTAJE_EMPRESA' => 'max:255',
            'CORREO' => 'max:255|email',
            'TELEFONO' => 'max:255',
            'ESTADO_LOCAL' => 'max:255',
        ]);
    
        $matriz->fill($validatedData);
        $matriz->save();
    
        return response()->json($matriz, 200);
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matriz  $matriz
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Matriz $matriz)
    // {
    //     $matriz->delete();

    //     return response()->json(null, 200);
    // }
    public function destroy(Matriz $matriz)
    {
        $matrizId = $matriz->id; // Obtener el ID de la matriz antes de eliminarla
        echo ($matrizId);
        //$matriz->delete();
    
      //  return response()->json(['id' => $matrizId], 200); // Devolver el ID eliminado en la respuesta JSON
    }
    

}
