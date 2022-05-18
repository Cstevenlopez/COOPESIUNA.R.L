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

    public function downloadPDF(){

        $logs = Vitacora_asistencia::all();
        $personalizado = array(0,0,567,283.80);
        $pdf = PDF::loadView('vitacoras.detalle', compact('logs'))->setPaper($personalizado, 'portrait');

        return $pdf->stream('logs.pdf');
    }
}
