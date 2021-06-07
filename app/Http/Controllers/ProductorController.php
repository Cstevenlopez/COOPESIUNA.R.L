<?php

namespace App\Http\Controllers;

use App\Models\Productor;
use Illuminate\Http\Request;

class ProductorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productor = Productor::all();
        return view('productor.index')->with('productors',$productor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \redirect('/productor.create');
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
            'fincaid' => 'required',
            'id_productor' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'numero_cedula' => 'required',
            'numero_telefono' => 'required',
            'comunidad' => 'required',
            'municipio' => 'required'
        ]);
        $productor = new Productor();
        $productor->fincaid = $request->get('fincaid');
        $productor->id_productor = $request->get('id_productor');    
        $productor->nombres = $request->get('nombres');
        $productor->apellidos = $request->get('apellidos');
        $productor->numero_cedula = $request->get('numero_cedula');
        $productor->numero_telefono = $request->get('numero_telefono');
        $productor->comunidad = $request->get('comunidad');
        $productor->municipio = $request->get('municipio');
        $productor->save();

        return redirect('/productores');
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
    $productor = Productor::find($id);
    return view('productor.edit')->with('productors', $productor);
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
        $productor = Productor::find($id);
        $productor->fincaid = $request->get('fincaid');
        $productor->id_productor = $request->get('id_productor');    
        $productor->nombres = $request->get('nombres');
        $productor->apellidos = $request->get('apellidos');
        $productor->numero_cedula = $request->get('numero_cedula');
        $productor->numero_telefono = $request->get('numero_telefono');
        $productor->comunidad = $request->get('comunidad');
        $productor->municipio = $request->get('municipio');
        $productor->save();

        return redirect('/productores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productor = Productor::find($id);
        $productor->delete();

        return redirect('/productores')->with('eliminar','ok');
    }
}
