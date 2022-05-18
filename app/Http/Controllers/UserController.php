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
        //
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
        if( $request->hasfile('foto')){
        $foto = $request->file('foto');
        $destinationPath = 'img/users/';
        $fotoname = time() . '-' . $foto->getClientOriginalName();
        $uploadSuccess = $request->file('foto')->move($destinationPath, $fotoname);
        $usuarios->foto = $destinationPath . $fotoname;
        }

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $usuarios->name = $request->get('name');
        $usuarios->email = $request->get('email');
        $usuarios->password = Hash::make($request->get('password'));
        $usuarios->save();

        return redirect('/usuarios')->with('guardar','ok');
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
        $usuarios=User::Find($id);
        if ($request->hasfile('foto')){
            $foto=$request->file('foto');
            $destinationPath = 'img/users/';
            $fotoname = time() . '-' . $foto->getClientOriginalName();
            $uploadSuccess = $request->file('foto')->move($destinationPath, $fotoname);
            $usuarios->foto = $destinationPath . $fotoname;
        }
        $usuarios->name = $request->get('name');
        $usuarios->email = $request->get('email');
        $usuarios->password = Hash::make($request->get('password'));
        $usuarios->save();

        return redirect('/usuarios')->with('editar','ok');
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

        return redirect('/usuarios')->with('eliminar','ok');
    }
}
