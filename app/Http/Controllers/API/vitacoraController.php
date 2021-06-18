<?php

namespace App\Http\Controllers\API;

use App\Models\Vitacora_asistencia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EditarVitacoraRequest;
use App\Http\Requests\GuardarVitacoraRequest;

class VitacoraController extends Controller
{
    // HOLA
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vitacoras = Vitacora_asistencia::query()->paginate();
        return response($vitacoras, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarVitacoraRequest $request)
    {
        Vitacora_asistencia::create($request->all());
        return response()->json([
            'res'=>true,
            'mensaje'=>'Vitacora guardada exitosamente'
        ]);   
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vitacora_asistencia $vitacora)
    {
        return response()->json([
            'res'=>true,
            'data'=>$vitacora
        ]); 
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditarVitacoraRequest $request,Vitacora_asistencia $vitacora)
    {
        $vitacora->update($request->all());
        return response()->json([
            'res'=>true,
            'mensaje'=>'Vitacora actualizada exitosamente'
        ],200); 

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vitacora_asistencia $vitacora)
    {
        $vitacora->delete();
        return response()->json([
            'res'=>true,
            'mensaje'=>'Vitacora Eliminado exitosamente'
        ]);
    }
}