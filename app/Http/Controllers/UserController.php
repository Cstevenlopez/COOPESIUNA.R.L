<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
        $usuarios = User::all();
        return view('usuarios.index')->with('users',$usuarios);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarios = new User();
        $usuarios->id_usuario = $request->get('id_usuario');
        $usuarios->name = $request->get('name');    
        $usuarios->email = $request->get('email');
        $usuarios->password = Hash::make($request->get('password'));
        $usuarios->usuario = $request->get('usuario');
        $usuarios->perfil = $request->get('perfil');
        $usuarios->save();

        return redirect('/usuarios');
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
        $usuarios = User::find($id);
        return view('usuarios.edit')->with('users',$usuarios);

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
        $usuarios = User::find($id);
        $usuarios->id_usuario = $request->get('id_usuario');
        $usuarios->name = $request->get('name');    
        $usuarios->email = $request->get('email');
        $usuarios->password = Hash::make($request->get('password'));
        $usuarios->usuario = $request->get('usuario');
        $usuarios->perfil = $request->get('perfil');
        $usuarios->save();

        return redirect('/usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarios = User::find($id);
        $usuarios->delete();

        return redirect('/usuarios');
    }
}
