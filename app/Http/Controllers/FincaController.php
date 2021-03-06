<?php

namespace App\Http\Controllers;

use App\Models\Finca;
use Illuminate\Http\Request;

class FincaController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-fincas|crear-fincas|editar-fincas|borrar-fincas', ['only' =>'index']);
        $this->middleware('permission:crear-fincas', ['only' =>'create','store']);
        $this->middleware('permission:editar-fincas', ['only' =>'edit','update']);
        $this->middleware('permission:borrar-fincas', ['only' =>'destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fincas = Finca::all();
        return view('fincas.index')->with('fincas',$fincas);

        // $fincas = Finca::all();
        // return response()->json([
        //     'res' => true,
        //     'fincas' => $fincas
        // ]);
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
        $request->validate([

            'nombre' => 'required',
            'legalidad' => 'required',
            'comunidad' => 'required',
            'municipio' => 'required',
            'departamento' => 'required',
            'pais' => 'required',
            'disponibilidad_energia' => 'required',
            'disponibilidad_agua' => 'required'
        ]);
        $fincas = new Finca();
        $fincas->nombre = $request->get('nombre');
        $fincas->legalidad = $request->get('legalidad');
        $fincas->comunidad = $request->get('comunidad');
        $fincas->municipio = $request->get('municipio');
        $fincas->departamento = $request->get('departamento');
        $fincas->pais = $request->get('pais');
        $fincas->disponibilidad_energia = $request->get('disponibilidad_energia');
        $fincas->disponibilidad_agua = $request->get('disponibilidad_agua');
        $fincas->save();

        return redirect('/fincas')->with('guardar','ok');
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
        $fincas = Finca::find($id);
        return view('fincas.edit')->with('fincas',$fincas);
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
        $fincas = Finca::find($id);

        $fincas->nombre = $request->get('nombre');
        $fincas->legalidad = $request->get('legalidad');
        $fincas->comunidad = $request->get('comunidad');
        $fincas->municipio = $request->get('municipio');
        $fincas->departamento = $request->get('departamento');
        $fincas->pais = $request->get('pais');
        $fincas->disponibilidad_energia = $request->get('disponibilidad_energia');
        $fincas->disponibilidad_agua = $request->get('disponibilidad_agua');
        $fincas->save();

         return redirect('/fincas')->with('editar','ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $finc = Finca::find($id);
        $finc->delete();

        return redirect('/fincas')->with('eliminar','ok');
    }
}
