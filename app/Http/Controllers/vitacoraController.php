<?php

namespace App\Http\Controllers;

use App\Models\Productor;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Vitacora_asistencia;
use PDF;
use Spatie\Permission\Models\Role;

class VitacoraController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-bitacora|crear-bitacora|editar-bitacora|borrar-bitacora', ['only' =>'index']);
        $this->middleware('permission:crear-bitacora', ['only' =>'create','store']);
        $this->middleware('permission:editar-bitacora', ['only' =>'edit','update']);
        $this->middleware('permission:borrar-bitacora', ['only' =>'destroy']);
    }
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

    public function mostrarUltimoregistro(){
        $vitacora = Vitacora_asistencia::latest()
            ->take(2)
            ->get();

        return view('home', compact('vitacora'));
    }

    public function download($id){

        $vitacoras = Vitacora_asistencia::find($id);
        $path = base_path(('/public/assets/img/CopesiunaLogo.jpg'));
        $path2 = base_path(('/public/assets/img/procacao-logo.jpg'));
        $path3 = base_path(('/public/assets/img/ONUDI_logo.jpg'));
        $path4 = base_path(('/public/assets/img/LogoSchweizerischen.jpg'));


        $type = pathinfo($path, PATHINFO_EXTENSION);
        $type = pathinfo($path2, PATHINFO_EXTENSION);
        $type = pathinfo($path3, PATHINFO_EXTENSION);
        $type = pathinfo($path4, PATHINFO_EXTENSION);

        $data = file_get_contents($path);
        $data2 = file_get_contents($path2);
        $data3 = file_get_contents($path3);
        $data4 = file_get_contents($path4);

        $pic = 'data:image/'. $type .';base64,' . base64_encode($data);
        $pic2 = 'data:image/'. $type .';base64,' . base64_encode($data2);
        $pic3 = 'data:image/'. $type .';base64,' . base64_encode($data3);
        $pic4 = 'data:image/'. $type .';base64,' . base64_encode($data4);

        date_default_timezone_set('America/Managua');
        $fecha = date('Y-m-d h:i:s a',time());
        $fecha2 = date('Y-m-d');
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])
                ->loadView('vitacoras.detalle', compact('vitacoras','pic','pic2','pic3','pic4', 'fecha'));

        // $pdf->setPaper('a4', 'landscape');
        return $pdf->download('bitacora-reporte-' . $fecha2 . '.pdf');
    }

    public function printPDF($id){

        $vitacoras = Vitacora_asistencia::find($id);
        $path = base_path (('/public/assets/img/CopesiunaLogo.jpg'));
        $path2 = base_path(('/public/assets/img/procacao-logo.jpg'));
        $path3 = base_path(('/public/assets/img/ONUDI_logo.jpg'));
        $path4 = base_path(('/public/assets/img/LogoSchweizerischen.jpg'));

        $type = pathinfo($path,  PATHINFO_EXTENSION);
        $type = pathinfo($path2, PATHINFO_EXTENSION);
        $type = pathinfo($path3, PATHINFO_EXTENSION);
        $type = pathinfo($path4, PATHINFO_EXTENSION);

        $data = file_get_contents ($path);
        $data2 = file_get_contents($path2);
        $data3 = file_get_contents($path3);
        $data4 = file_get_contents($path4);

        $pic =  'data:image/'. $type .';base64,' . base64_encode($data);
        $pic2 = 'data:image/'. $type .';base64,' . base64_encode($data2);
        $pic3 = 'data:image/'. $type .';base64,' . base64_encode($data3);
        $pic4 = 'data:image/'. $type .';base64,' . base64_encode($data4);

        date_default_timezone_set('America/Managua');
        $fecha = date('Y-m-d h:i:s a',time());
        $fecha2 = date('Y-m-d');
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])
                ->loadView('vitacoras.detalle', compact('vitacoras','pic','pic2','pic3','pic4', 'fecha'));

        // $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('bitacora-reporte-' . $fecha2 . '.pdf');

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
