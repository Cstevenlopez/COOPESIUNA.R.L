<?php

namespace App\Http\Controllers\API;

use App\Models\Productor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EditarProductorRequest;
use App\Http\Requests\GuardarProductorRequest;

class ProductorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productores = Productor::query()->paginate();
        return response($productores, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarProductorRequest $request)
    {
        Productor::create($request->all());
        return response()->json([
            'res'=>true,
            'mensaje'=>'Productor guardado exitosamente'
        ]);   
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Productor $productor)
    {
        return response()->json([
            'res'=>true,
            'data'=>$productor
        ]); 
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditarProductorRequest $request,Productor $productor)
    {
        $productor->update($request->all());
        return response()->json([
            'res'=>true,
            'mensaje'=>'Productor actualizado exitosamente'
        ],200); 

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productor $productor)
    {
        $productor->delete();
        return response()->json([
            'res'=>true,
            'mensaje'=>'Productor Eliminado exitosamente'
        ]);
    }
}