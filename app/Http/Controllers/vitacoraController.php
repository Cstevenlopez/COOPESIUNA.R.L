<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vitacora_asistencia;

class vitacoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vitacora = Vitacora_asistencia::all();
        return view('vitacoras.index')->with('vitacora_asistencias', $vitacora);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('vitacoras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'id_vitacora' => 'required',
        //     'actividad' => 'required',
        //     'objetivo' => 'required',
        //     'temas_abordados' => 'required',
        //     'dificultades' => 'required',
        //     'soluciones' => 'required',
        //     'recomendaciones' => 'required',
        //     'fecha' => 'required',
        //     'siguiente_visita' => 'required',
        //     'productorid' => 'required',
        //     'usuario_id' => 'required'
        // ]);
        $vitacora = new Vitacora_asistencia();
        $vitacora->id_vitacora = $request->get('id_vitacora');
        $vitacora->actividad = $request->get('actividad');
        $vitacora->objetivo = $request->get('objetivo');
        $vitacora->temas_abordados = $request->get('temas_abordados');
        $vitacora->dificultades = $request->get('dificultades');
        $vitacora->soluciones = $request->get('soluciones');
        $vitacora->recomendaciones = $request->get('recomendaciones');
        $vitacora->fecha = $request->get('fecha');
        $vitacora->siguiente_visita = $request->get('siguiente_visita');
        $vitacora->productorid  = $request->get('productorid');
        $vitacora->usuario_id   = $request->get('usuario_id');
        $vitacora->save();

        return redirect('/vitacoras');
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
        return view('vitacoras.edit');
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
        $vitacora = Vitacora_asistencia::find($id);
        $vitacora->id_vitacora = $request->get('id_vitacora');
        $vitacora->actividad = $request->get('actividad');
        $vitacora->objetivo = $request->get('objetivo');
        $vitacora->temas_abordados = $request->get('temas_abordados');
        $vitacora->dificultades = $request->get('dificultades');
        $vitacora->soluciones = $request->get('soluciones');
        $vitacora->recomendaciones = $request->get('recomendaciones');
        $vitacora->fecha = $request->get('fecha');
        $vitacora->siguiente_visita = $request->get('siguiente_visita');
        $vitacora->productorid  = $request->get('productorid');
        $vitacora->usuario_id   = $request->get('usuario_id');
        $vitacora->save();

        return redirect('/vitacoras');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vitacora = Vitacora_asistencia::find($id);
        $vitacora->delete();

        return redirect('/vitacoras')->with('eliminar','ok');
    }
}
