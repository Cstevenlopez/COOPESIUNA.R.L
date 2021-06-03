<?php

namespace App\Http\Controllers\API;

use App\Models\Finca;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EditarFincaRequest;
use App\Http\Requests\GuardarFincaRequest;

class FincaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fincas = Finca::query()->paginate();
        return response($fincas, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarFincaRequest $request)
    {
        Finca::create($request->all());
        return response()->json([
            'res'=>true,
            'mensaje'=>'Finca guardado exitosamente'
        ]);   
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Finca $finca)
    {
        return response()->json([
            'res'=>true,
            'data'=>$finca
        ]); 
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditarFincaRequest $request,Finca $finca)
    {
        $finca->update($request->all());
        return response()->json([
            'res'=>true,
            'mensaje'=>'Finca actualizada exitosamente'
        ],200); 

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Finca $finca)
    {
        $finca->delete();
        return response()->json([
            'res'=>true,
            'mensaje'=>'Finca Eliminada exitosamente'
        ]);
    }
}