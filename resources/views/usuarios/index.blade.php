@extends('layouts.plantillabaseu')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
@endsection

@section('contenido')
<h4>Administrar usuarios</h4>
<a href="usuarios/create" class="btn btn-primary mb-4">Crear nuevo usuario</a>

<table id="usuarios" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ID de usuario</th>
            <th scope="col">Nombre</th>
            <th scope="col">E mail</th>
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
            <td>{{$users->usuario}}</td>
            <td>{{$users->perfil}}</td>
            <td>
            <form action="{{ route('usuarios.destroy',$users->id)}}" method="POST">
            <a href="/usuarios/{{$users->id}}/edit" class="btn btn-outline-primary">Editar</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">Eliminar</button>
            </form>
            </td>
        </tr>
        @endforeach      
    </tbody>
</table>

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script> 

<script>
$(document).ready(function() {
    $('#usuarios').DataTable({
        "lengthMenu":[[5,10,50,-1], [5,10,50,"All"]]
    });
} );
</script>
@endsection
@endsection
