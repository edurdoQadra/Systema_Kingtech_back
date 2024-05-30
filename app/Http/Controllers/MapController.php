<?php

namespace App\Http\Controllers;

use App\Models\Matriz;
use Illuminate\Http\Request;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//     public function mapTinbet()
// {
//     // return response('¡Hola desde Laravel! .... 111111111111', 200)
//     // ->header('Content-Type', 'text/plain');

//     $matrices = Matriz::all()->toArray();
//     // Transformar los datos al nuevo formato

//     $response = [];
//     foreach ($matrices as $matrix) {
//         $response[] = [
//             "latitud" => $matrix["LATITUD"],
//             "longitud" => $matrix["LONGITUD"],
//             "administrador" => $matrix["ADMINISTRADOR"],
//             "estado" => $matrix["ESTADO_LOCAL"],
//             "reportes" => $matrix["REPORTES"]
//         ];
//     }

// public function mapTinbet()
// {
//     $matrices = Matriz::all()->toArray();
//     $response = [];

//     foreach ($matrices as $matrix) {
//         $response[] = [
//             "ADMINISTRADOR" => $matrix["ADMINISTRADOR"],
//             "REPORTES" => $matrix["REPORTES"],
//             "DEPARTAMENTO" => $matrix["DEPARTAMENTO"],
//             "PROVINCIA" => $matrix["PROVINCIA"],
//             "DISTRITO" => $matrix["DISTRITO"],
//             "DIRECCION" => $matrix["DIRECCION"],
//             "REFERENCIA" => $matrix["REFERENCIA"],
//             "ASOCIADO" => $matrix["ASOCIADO"],
//             "DNI" => $matrix["DNI"],
//             "NUMERO" => $matrix["NUMERO"],
//             "RAZON_SOCIAL" => $matrix["RAZON_SOCIAL"],
//             "RUC" => $matrix["RUC"],
//             "PORCENTAJE_EMPRESA" => $matrix["PORCENTAJE_EMPRESA"],
//             "CORREO" => $matrix["CORREO"],
//             "TELEFONO" => $matrix["TELEFONO"],
//             "ESTADO_LOCAL" => $matrix["ESTADO_LOCAL"],
//             "created_at" => $matrix["created_at"],
//             "updated_at" => $matrix["updated_at"]
//         ];
//     }

//     foreach ($matrices as $matrix) {
//         $response[] = [
//             "latitud" => $matrix["LATITUD"],
//             "longitud" => $matrix["LONGITUD"],
//             "administrador" => $matrix["ADMINISTRADOR"],
//             "estado" => $matrix["ESTADO_LOCAL"],
//             "reportes" => $matrix["REPORTES"]
//         ];
//     }
//     return response()->json($response, 200);
// }

// public function mapTinbet()
// {
//     $matrices = Matriz::all()->toArray();
//     $response = [];

//     foreach ($matrices as $matrix) {
//         $mappedMatrix = [
//             "latitud" => $matrix["LATITUD"],
//             "longitud" => $matrix["LONGITUD"],
//             "administrador" => $matrix["ADMINISTRADOR"],
//             "estado" => $matrix["ESTADO_LOCAL"],
//             "reportes" => $matrix["REPORTES"]
//         ];

//         $response[] = $mappedMatrix;
//     }

//     return response()->json($response, 200);
// }


public function mapTinbet()
{
    $matrices = Matriz::all()->toArray();
    $response = [];

    foreach ($matrices as $matrix) {
        // Verificar si la clave 'REFERENCIA' está definida en la matriz actual
        if (array_key_exists('REFERENCIA', $matrix)) {
            // Dividir el campo 'REFERENCIA' para obtener latitud y longitud
            $referencia = explode(',', $matrix["REFERENCIA"]);

            // Verificar si se pudieron obtener los valores de latitud y longitud
            if (count($referencia) == 2) {
                $latitud = trim($referencia[0]);
                $longitud = trim($referencia[1]);
            } else {
                // Manejar la situación donde no se pudieron obtener los valores de latitud y longitud
                // Esto podría incluir un manejo de errores o simplemente saltar este registro
                continue;
            }
        } else {
            // Manejar la situación donde 'REFERENCIA' no está definida según tus necesidades
            // Esto podría incluir un manejo de errores o simplemente saltar este registro
            continue;
        }

        // Construir el objeto con latitud y longitud obtenidos
        $mappedMatrix = [
            "latitud" => $latitud,
            "longitud" => $longitud,
            "administrador" => $matrix["ADMINISTRADOR"],
            "estado" => $matrix["ESTADO_LOCAL"],
            "reportes" => $matrix["REPORTES"]
        ];

        $response[] = $mappedMatrix;
    }

    return response()->json($response, 200);
}



public function mapBetgana()
{
    return response('¡Hola desde Laravel! .......... 2222', 200)
    ->header('Content-Type', 'text/plain');

    // $matrices = Matriz::all()->toArray();

    // // Transformar los datos al nuevo formato
    // $response = [];
    // foreach ($matrices as $matrix) {
    //     $response[] = [
    //         "latitud" => $matrix["LATITUD"],
    //         "longitud" => $matrix["LONGITUD"],
    //         "administrador" => $matrix["ADMINISTRADOR"],
    //         "estado" => $matrix["ESTADO_LOCAL"],
    //         "reportes" => $matrix["REPORTES"]
    //     ];
    // }

    // return response()->json($response);
}

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Map  $map
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Matriz $matriz)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Map  $map
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Matriz $matriz)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Map  $map
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Matriz $matriz)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Map  $map
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Matriz $matriz)
    // {
    //     //
    // }
}
