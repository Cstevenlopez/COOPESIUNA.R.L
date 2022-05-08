@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
@stop

@section('content')
<!-- ENTRADA PARA EL MODAL DE USUARIOS -->
<div class="text-center">
<a href="" class="btn bg-info shadow mb-3 mt-3 btn-rounded" data-toggle="modal" data-target="#modalUsuarios">Nuevo usuario  <i class="fas fa-clipboard"></i></a>
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
    <Form action="/usuarios" method="POST" enctype="multipart/form-data">
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

    <!-- <div class="mb-3">
    <label for="username" class="form-label">Usuario</label><br>
    @error('usuario')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror
    <input type="text" value="{{old('username')}}" id="username" name="username" class="form-control" tabindex="4" placeholder="Juan01">
    </div> -->

    <div class="mb-3">
    <label for="" class="form-label">Foto</label><br>
    <input type="file" value="{{old('foto')}}" id="foto" name="foto" class="file">
    </div>

    <!-- SELECT PERFIL
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

    </div>
        FIN DEL SELECT -->

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
    <button type="submit" class="btn btn-primary formulario-guardar" tabindex="4">Guardar  <i class="fas fa-save"></i></button>
    <a href="/usuarios" class="btn btn-secondary" tabindex="5">Cancerlar  <i class="fas fa-reply-all"></i></a>
    </Form>
    </div>
    </div>
    </div>
    </div>
<!-- FIN DEL MODAL DE USUARIOS -->

<!-- CRUD DE USUARIOS -->

<div class="card shadow-lg">
<div class="card-body">

<table id="usuarios" class="table table-light table-bordered table-striped" style="width:100%">
<thead class="">
    <tr>
        <th scope="col">Identificación</th>
        <th scope="col">Nombres y apellidos</th>
        <th scope="col">Correo electronico</th>
        <th scope="col">Foto</th>
        <th scope="col">Acciones</th>

    </tr>
</thead>
<tbody>
    @foreach($users as $users)
    <tr>
        <td>{{$users->id_usuario}}</td>
        <td>{{$users->name}}</td>
        <td>{{$users->email}}</td>
        <td><img src="{{$users->foto}}" alt="" class="img-fluid img-thumbnail" style="height:45px;"></td>
        <td>
        <form action="{{ route('usuarios.destroy',$users->id)}}" class="formulario-eliminar" method="POST">
        <a href="/usuarios/{{$users->id}}/edit" class="btn btn-sm btn-info"><i class="fas fa-pencil-alt"></i></a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
        <!-- <a href="/usuarios/{{$users->id}}/edit" class="btn btn-sm btn-info"><i class="fas fa-user"></i></a> -->
        </form>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.8/css/responsive.bootstrap4.min.css">
@stop

@section('js')
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.8/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.8/js/responsive.bootstrap4.min.js"></script>
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

@if(session('guardar')=== 'ok')
<script>
    Swal.fire(
    'Guardado!',
    'El usuario ha sido guardado correctamente.',
    'success'
)
</script>
@endif

@if(session('editar')=== 'ok')
<script>
    Swal.fire(
    'Modificado!',
    'El usuario ha sido modificado correctamente.',
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
"lengthMenu":[[5,10,50,-1], [5,10,50,"Todos"]],
responsive: true
});
} );
</script>
@stop
