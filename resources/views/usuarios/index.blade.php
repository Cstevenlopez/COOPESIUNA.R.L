@extends('adminlte::page')

@section('title', 'Administrar usuarios')

@section('content_header')
    <h3>Administrar usuarios</h3>
@stop

@section('content')
<!-- ENTRADA PARA EL MODAL DE USUARIOS -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar usuarios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- CRUD DE USUARIOS -->
    <a href="usuarios/create" class="btn btn-dark mb-4">Crear nuevo usuario</a>

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