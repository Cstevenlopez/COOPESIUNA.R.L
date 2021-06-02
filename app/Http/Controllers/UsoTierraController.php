<?php

namespace App\Http\Controllers;

use App\Models\Finca;
use Illuminate\Http\Request;
use App\Models\Uso_de_tierra;

class UsoTierraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Tierras = Uso_de_tierra::all();
        return view('tierras.index')->with('uso_de_tierras',$Tierras);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Tierras = new Uso_de_tierra();
        $Tierras->finca_id = $request->get('finca_id');
        $Tierras->area_total = $request->get('area_total');    
        $Tierras->boque_primario = $request->get('boque_primario');
        $Tierras->bosque_secundario = $request->get('bosque_secundario');
        $Tierras->cultivos_anuales = $request->get('cultivos_anuales');
        $Tierras->plantaciones_forestales = $request->get('plantaciones_forestales');
        $Tierras->areas_pasto_abierto = $request->get('areas_pasto_abierto');
        $Tierras->areas_pasto_arboles = $request->get('areas_pasto_arboles');
        $Tierras->save();

        return redirect('/tierras');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Tierras = Uso_de_tierra::find($id);
        return view('tierras.edit')->with('uso_de_tierrad',$Tierras);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Tierras = Uso_de_tierra::find($id);
        $Tierras->finca_id = $request->get('finca_id');
        $Tierras->area_total = $request->get('area_total');    
        $Tierras->boque_primario = $request->get('boque_primario');
        $Tierras->bosque_secundario = $request->get('bosque_secundario');
        $Tierras->cultivos_anuales = $request->get('cultivos_anuales');
        $Tierras->plantaciones_forestales = $request->get('plantaciones_forestales');
        $Tierras->areas_pasto_abierto = $request->get('areas_pasto_abierto');
        $Tierras->areas_pasto_arboles = $request->get('areas_pasto_arboles');
        $Tierras->save();

        return redirect('/tierras');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Tierras = Uso_de_tierra::find($id);
        $Tierras->delete();

        return redirect('/tierras');
    }
}
