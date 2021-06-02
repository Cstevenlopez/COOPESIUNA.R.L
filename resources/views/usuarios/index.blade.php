@extends('adminlte::page')

@section('title', 'Administrar usuarios')

@section('content_header')
@stop

@section('content')
<!-- ENTRADA PARA EL MODAL DE USUARIOS -->
<div class="text-center">
<a href="" class="btn bg-info btn-default btn-rounded" data-toggle="modal" data-target="#modalUsuarios">Nuevo usuario  <i class="fas fa-clipboard"></i></a>
</div>
    <div class="modal fade" id="modalUsuarios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header bg-info">
    <h5 class="modal-title" id="exampleModalLabel">Agregar usuarios</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">
    <Form action="/usuarios" method="POST">
    @csrf()

    <div class="mb-3">
    <label for="" class="form-label">ID de usuario</label><br>
    @error('id_usuario')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror
    <input type="text" value="{{old('id_usuario')}}" id="id_usuario" name="id_usuario" class="form-control" tabindex="1" placeholder="CONTABILIDAD-01 ">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Nombre</label><br>
    @error('name')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror
    <input type="text" value="{{old('name')}}" id="name" name="name" class="form-control" tabindex="4" placeholder="Juan Benito Lopez Perez">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Usuario</label><br>
    @error('usuario')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror
    <input type="text" value="{{old('usuario')}}" id="usuario" name="usuario" class="form-control" tabindex="4" placeholder="Juan01">
    </div>

    <!-- SELECT PERFIL -->
    <div class="mb-3">
    @error('perfil')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror
    <label for="" class="form-label">Perfil de usuario</label>
    <select name="perfil" class="form-select form-control" tabindex="4" aria-label="Default select example">
    <option selected >Elija un perfil</option>
    <option value="Administrador">Administrador</option>
    <option value="Tecnico">Tecnico</option>
    </select>
    <!-- FIN DEL SELECT -->
    </div>

    <div class="mb-3">
    <label for="" class="form-label">E mail</label><br>
    @error('email')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror
    <input type="email" value="{{old('email')}}" id="email" name="email" class="form-control" tabindex="4" placeholder="ejemplo@gmail.com">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Contraseña</label><br>
    @error('password')
    <small style="background: #00ffff;"  class="text-danger">*{{$message}}</small>
    @enderror
    <input type="password" value="{{old('password')}}" id="password" name="password" class="form-control" tabindex="4" placeholder="...">
    </div>
    <button type="submit" class="btn btn-lg btn-primary formulario-guardar" tabindex="4"><i class="fas fa-save"></i></button>
    <a href="/usuarios" class="btn btn-lg btn-secondary" tabindex="5"><i class="fas fa-reply-all"></i></a>
    </Form>
    </div>
    </div>
    </div>
    </div>
<!-- FIN DEL MODAL DE USUARIOS -->

<!-- CRUD DE USUARIOS -->
<table id="usuarios" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
<thead class="bg-info text-white">
    <tr>
        <th scope="col">ID.Usuario</th>
        <th scope="col">Nombre y apellido</th>
        <th scope="col">Correo electronico</th>
        <th scope="col">Usuario</th>
        <th scope="col">Perfil</th>
        <th scope="col">Ultima modificacion</th>
        <th scope="col">Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach($users as $users)
    <tr>
        <td>{{$users->id_usuario}}</td>
        <td>{{$users->name}}</td>
        <td>{{$users->email}}</td>
        <td>{{$users->usuario}}</td>
        <td>{{$users->perfil}}</td>
        <td>{{$users->updated_at}}</td>
        <td>
        <form action="{{ route('usuarios.destroy',$users->id)}}" class="formulario-eliminar" method="POST">
        <a href="/usuarios/{{$users->id}}/edit" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-eraser"></i></button>
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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('eliminar')=== 'ok')
<script>
    Swal.fire(
    'Eliminado!',
    'El usuario ha sido eliminado correctamente.',
    'success'
)
</script>
@endif

<script>
$('.formulario-eliminar').submit(function(e){
    e.preventDefault();

    Swal.fire({
    title: 'Estas seguro?',
    text: "No podrás revertir esto!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Si, borrar esto!'
}).then((result) => {
if (result.isConfirmed) {
    this.submit();
}
})

});
</script>

<script>
$(document).ready(function() {
$('#usuarios').DataTable({
"lengthMenu":[[5,10,50,-1], [5,10,50,"All"]]
});
} );
</script>
@stop