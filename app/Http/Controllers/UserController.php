<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-usuarios|crear-usuarios|editar-usuarios|borrar-usuarios|ver-perfil', ['only' =>'index']);
        $this->middleware('permission:crear-usuarios', ['only' =>'create','store']);
        $this->middleware('permission:editar-usuarios', ['only' =>'edit','update']);
        $this->middleware('permission:borrar-usuarios', ['only' =>'destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        return view('usuarios.index')->with('users', $usuarios);
    }

    public function perfil(){
        // $users = Auth::user();
        // return view('usuarios.perfil', compact('users'));
    }
    public function usersOnline(){
        $usuarios = User::select('*')
        ->whereNotNull('last_seen')
        ->orderBy('last_seen','DESC');

        return view('usuarios.index')->with('users', $usuarios);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('usuarios.crear', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $usuarios = new User();
        // if( $request->hasfile('foto')){
        // $foto = $request->file('foto');
        // $destinationPath = 'img/users/';
        // $fotoname = time() . '-' . $foto->getClientOriginalName();
        // $uploadSuccess = $request->file('foto')->move($destinationPath, $fotoname);
        // $usuarios->foto = $destinationPath . $fotoname;
        // }

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required',
        ]);
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));
        // Seesion flash es para guardar una sesion por un pequeño tiempo
        session()->flash('guardar','ok');
         return redirect()->route('usuarios.index');
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
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();
        //Redireccionar y mandar los datos
        return view('usuarios.edit', compact('user', 'roles', 'userRole'));

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
        // $usuarios=User::Find($id);
        // if ($request->hasfile('foto')){
        //     $foto=$request->file('foto');
        //     $destinationPath = 'img/users/';
        //     $fotoname = time() . '-' . $foto->getClientOriginalName();
        //     $uploadSuccess = $request->file('foto')->move($destinationPath, $fotoname);
        //     $usuarios->foto = $destinationPath . $fotoname;
        // }

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required',
        ]);

        $input = $request->all();
        if (!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input, array('password'));
        }

        $user = User::find($id);
        $user->update($input);
        Db::table('model_has_roles')->where('model_id', $id)->delete();

        $user->assignRole($request->input('roles'));
        session()->flash('editar','ok');
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)
        ->delete();
        session()->flash('deleted','Usuario eliminado correctamente');
        return redirect()->route('usuarios.index')->with('eliminar', 'ok');
    }
}
