<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vitacora_asistencia;
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
        $pdf = PDF::loadView('logs', compact('logs'));

        return $pdf->download('logs.pdf');
    }
}
