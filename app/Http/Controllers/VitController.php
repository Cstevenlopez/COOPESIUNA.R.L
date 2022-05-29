<?php

namespace App\Http\Controllers;

use App\Models\Vitacora_asistencia;
use Dompdf\Dompdf;
use PDF;

class VitController extends Controller
{
    public function getAllLogs()
    {
        $logs = Vitacora_asistencia::all();
        return view('logs', compact('logs'));
    }

    public function detalle(){

        $logs = Vitacora_asistencia::all();
        $pdf = PDF::loadView('vitacoras.detalle', compact('logs'));
        return $pdf->setPaper('Legal', 'landscape')->stream();
    }
}
