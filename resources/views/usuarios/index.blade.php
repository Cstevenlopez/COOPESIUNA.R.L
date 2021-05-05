@extends('layouts.plantillabaseu');

@section('contenido')
<a href="usuarios/create" class="btn btn-primary">Crear nuevo usuario</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ID de usuario</th>
            <th scope="col">Nombre</th>
            <th scope="col">E mail</th>
            <th scope="col">Contraseña</th>
            <th scope="col">Usuario</th>
            <th scope="col">Perfil</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $users)
        <tr>
            <td>{{$users->id}}</td>
            <td>{{$users->id_usuario}}</td>
            <td>{{$users->name}}</td>
            <td>{{$users->email}}</td>
            <td>{{$users->password}}</td>
            <td>{{$users->usuario}}</td>
            <td>{{$users->perfil}}</td>
            <td>
            <a class="btn btn-info">Editar</a>
            <button class="btn btn-danger">Eliminar</button>
            </td>
        </tr>
        @endforeach      
    </tbody>
</table>
@endsection
