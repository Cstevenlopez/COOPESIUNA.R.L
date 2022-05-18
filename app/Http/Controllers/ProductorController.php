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
    public function __construct()
    {
    $this->middleware('auth');
    }
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productor = new Productor();
        // if( $request->hasfile('foto')){
        // $foto = $request->file('foto');
        // $destinationPath = 'img/productors';
        // $fotoname = time() . '-' . $foto->getClientOriginalName();
        // $uploadSuccess = $request->file('foto')->move($destinationPath, $fotoname);
        // $productor->foto = $destinationPath . $fotoname;
        // }
        $request->validate([
            'finca_id' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'numero_cedula' => 'required',
            'numero_telefono' => 'required',
            'comunidad' => 'required',
            'municipio' => 'required'
        ]);
        $productor->finca_id = $request->get('finca_id');
        $productor->nombres = $request->get('nombres');
        $productor->apellidos = $request->get('apellidos');
        $productor->numero_cedula = $request->get('numero_cedula');
        $productor->numero_telefono = $request->get('numero_telefono');
        $productor->comunidad = $request->get('comunidad');
        $productor->municipio = $request->get('municipio');
        $productor->save();

        return redirect('/productores')->with('guardar','ok');
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
        $productor=Productor::Find($id);
        // if ($request->hasfile('foto')){
        //     $foto=$request->file('foto');
        //     $destinationPath = 'img/productors/';
        //     $fotoname = time() . '-' . $foto->getClientOriginalName();
        //     $uploadSuccess = $request->file('foto')->move($destinationPath, $fotoname);
        //     $productor->foto = $destinationPath . $fotoname;
        // }
        $productor->finca_id = $request->get('finca_id');
        $productor->nombres = $request->get('nombres');
        $productor->apellidos = $request->get('apellidos');
        $productor->numero_cedula = $request->get('numero_cedula');
        $productor->numero_telefono = $request->get('numero_telefono');
        $productor->comunidad = $request->get('comunidad');
        $productor->municipio = $request->get('municipio');
        $productor->save();

        return redirect('/productores')->with('editar','ok');
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
