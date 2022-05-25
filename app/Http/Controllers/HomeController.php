<?php

namespace App\Http\Controllers;

use App\Models\Vitacora_asistencia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $bitacoras = Vitacora_asistencia::latest()
        ->take(3)
        ->get();

        return view('home', compact('bitacoras'));
    }
}
