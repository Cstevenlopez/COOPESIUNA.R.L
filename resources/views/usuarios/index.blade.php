@extends('adminlte::page')

@section('title', 'Administrar usuarios')

@section('content_header')
    <h3>Administrar usuarios</h3>
@stop

@section('content')
<!-- ENTRADA PARA EL MODAL DE USUARIOS -->
<button type="button" class="btn btn-dark mb-4" data-toggle="modal" data-target="#modalUsuarios" data-whatever="@mdo">Agregar usuarios</button>
    <div class="modal fade" id="modalUsuarios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header bg-dark">
    <h5 class="modal-title" id="exampleModalLabel">Agregar usuarios</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">
    <Form action="/usuarios" method="POST">
    @csrf()
    <div class="mb-3">
    <label for="" class="form-label">ID de usuario</label>
    <input type="text" id="id_usuario" name="id_usuario" class="form-control" tabindex="1" placeholder="CONTABILIDAD-01 ">
    </div>
    <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input type="text" id="name" name="name" class="form-control" tabindex="4" placeholder="Juan Benito Lopez Perez">
    </div>
    <div class="mb-3">
    <label for="" class="form-label">Usuario</label>
    <input type="text" id="usuario" name="usuario" class="form-control" tabindex="4" placeholder="Juan01">
    </div>
    <!-- SELECT PERFIL -->
    <div class="mb-3">
    <label for="" class="form-label">Perfil de usuario</label>
    <select name="perfil" class="form-select form-control" tabindex="4" aria-label="Default select example">
    <option selected >Elija un perfil</option>
    <option value="Administrador">Administrador</option>
    <option value="Tecnico">Tecnico</option>
    </select>
    <!-- FIN DEL SELECT -->
    </div>
    <div class="mb-3">
    <label for="" class="form-label">E mail</label>
    <input type="email" id="email" name="email" class="form-control" tabindex="4" placeholder="ejemplo@gmail.com">
    </div>
    <div class="mb-3">
    <label for="" class="form-label">Contraseña</label>
    <input type="password" id="password" name="password" class="form-control" tabindex="4" placeholder="...">
    </div>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    <a href="/usuarios" class="btn btn-secondary" tabindex="5">Cancelar</a>
    </Form>
    </div>
    </div>
    </div>
    </div>
<!-- FIN DEL MODAL DE USUARIOS -->

<!-- CRUD DE USUARIOS -->
<table id="usuarios" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
<thead class="thead-dark text-white">
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
        <a href="/usuarios/{{$users->id}}/edit" class="btn btn-success">Editar</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
        </td>
    </tr>
    @endforeach      
</tbody>
</table>
@stop

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
@stop

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
@stop