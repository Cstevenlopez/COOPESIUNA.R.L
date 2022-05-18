<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vitacora_asistencia;
use PDF;

class VitacoraController extends Controller
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
        $vitacora = Vitacora_asistencia::all();
        return view('vitacoras.index')->with('vitacora_asistencias', $vitacora);
    }

    public function detalle($id){

        $vitacora = Vitacora_asistencia::find($id);
        // dd($id);
        return view('vitacoras.detalle', compact('vitacora'));
    }

    public function download($id){
        $vitacora = Vitacora_asistencia::find($id);

        $pdf = PDF::loadView('vitacoras.detalle', compact('vitacora'));

        return $pdf->stream('vitacoras.detalle.pdf');
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

        return redirect('/vitacoras')->with('guardar','ok');
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
        $vitacora = Vitacora_asistencia::find($id);
        return view('vitacoras.edit')->with('Vitacora_asistencias',$vitacora);
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

        return redirect('/vitacoras')->with('editar','ok');
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
