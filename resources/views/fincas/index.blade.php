@extends('adminlte::page')

@section('title', 'Administrar fincas')

@section('content_header')
<div class="card">
    <div class="card-body text-center">
        <h4>Administrar fincas</h4>
    </div>
</div>
@stop

@section('content')

<!-- ENTRADA PARA EL MODAL DE FINCAS -->
<div class="text-center">
    @can('crear-fincas')
    <a href="" class="btn btn-default bg-info shadow mt-3 btn-rounded mb-4" data-toggle="modal" data-target="#modalFincas">Nuevo registro  <i class="fas fa-clipboard"></i></a>
    @endcan
</div>
    <div class="modal fade" id="modalFincas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header bg-info">
    <h5 class="modal-title" id="exampleModalLabel">Agregar nueva finca</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">
    <Form action="/fincas" method="POST">
    @csrf()

    <div class="mb-3 ml-2">
    <label for="" class="form-label">Nombre de la finca</label><br>
    @error('nombre')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror
    <input type="text" id="nombre" name="nombre" class="form-control" tabindex="4" placeholder="Nombre de la finca">
    </div>

    <!-- SELECT LEGALIDAD -->
    <div class="mb-3 ml-2">
    <label for="" class="form-label">Tipo de legalidad</label><br>
    @error('legalidad')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror
    <select name="legalidad" class="form-select form-control" tabindex="4" aria-label="Default select example">
    <option selected >Elija un tipo</option>
    <option value="Escritura">Escritura</option>
    <option value="Contrato">Contrato</option>
    </select>
    </div>
    <!-- FIN DEL SELECT -->

    <div class="mb-3 ml-2">
    <label for="" class="form-label">Comunidad</label><br>
    @error('comunidad')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror
    <input type="text" id="comunidad" name="comunidad" class="form-control" tabindex="4" placeholder="Comunidad de la finca" require>
    </div>

    <div class="mb-3 ml-2">
    <label for="" class="form-label">Municipio</label><br>
    @error('municipio')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror
    <input type="text" id="municipio" name="municipio" class="form-control" tabindex="4" placeholder="Municipio de la finca" require>
    </div>

    <div class="mb-3 ml-2">
    <label for="" class="form-label">Departamento</label><br>
    @error('departamento')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror
    <input type="text" id="departamento" name="departamento" class="form-control" tabindex="4" placeholder="Departamento" require>
    </div>

    <div class="mb-3 ml-2">
    <label for="" class="form-label">Pais</label><br>
    @error('pais')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror
    <input type="text" id="pais" name="pais" class="form-control" tabindex="4" placeholder="Pais" require>
    </div>

    <div class="mb-3 ml-2">
    <label for="">Energia</label><br>
    @error('disponibilidad_energia')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-info active">
    <input type="radio" name="disponibilidad_energia" value="Si"> Si
    </label>
    <label class="btn btn-info">
    <input type="radio" name="disponibilidad_energia" value="No" > No
    </label>
    </div>
</div>

<div class="mb-3 ml-2">
    <label for="">Agua</label><br>
    @error('disponibilidad_agua')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-info active">
    <input type="radio" name="disponibilidad_agua" value="Si"> Si
    </label>
    <label class="btn btn-info">
    <input type="radio" name="disponibilidad_agua" value="No" > No
    </label>
    </div>
    </div>

    <button type="submit" class="btn btn-info ml-2" style="width: 225px;" tabindex="4">Guardar  <i class="fas fa-save"></i></button>
    <a href="/fincas" class="btn btn-danger " style="width: 225px;" tabindex="5">Cancelar  <i class="fas fa-reply-all"></i></a>
    </Form>
    </div>
    </div>
    </div>
    </div>
<!-- FIN DEL MODAL DE FINCAS -->

<!-- <a href="/fincas/create" class="btn btn-dark mb-4">Añadir otra finca</a> -->

<div class="card shadow">
<div class="card-body">

<table id="fincas" class="table table-light table-bordered table-striped" style="width:100%">
    <thead class="">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Legalidad</th>
            <th scope="col">Comunidad</th>
            <th scope="col">Municipio</th>
            <th scope="col">Departamento</th>
            <th scope="col">Pais</th>
            <th scope="col">Energia</th>
            <th scope="col">Agua</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($fincas as $fincas)
        <tr>
            <td>{{ $fincas->id }}</td>
            <td>{{$fincas->nombre}}</td>
            <td>{{$fincas->legalidad}}</td>
            <td>{{$fincas->comunidad}}</td>
            <td>{{$fincas->municipio}}</td>
            <td>{{$fincas->departamento}}</td>
            <td>{{$fincas->pais}}</td>
            <td>{{$fincas->disponibilidad_energia}}</td>
            <td>{{$fincas->disponibilidad_agua}}</td>
            <td>
                @can('editar-fincas')
                <a href="/fincas/{{$fincas->id}}/edit" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
                @endcan

            @can('borrar-fincas')
            {!! Form::open(['method' => 'DELETE', 'route' => ['fincas.destroy', $fincas->id],'class' =>'formulario-eliminar', 'style'=>'display:inline']) !!}
            {!! Form::button('<i class="fas fa-trash"></i>', ['class' => 'btn btn-danger', 'type'=> 'submit']) !!}
            {!! Form::close() !!}
            @endcan
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
    'El registro ha sido eliminado correctamente.',
    'success'
)
</script>
@endif

@if(session('guardar')=== 'ok')
<script>
    Swal.fire(
    'Guardado!',
    'El registro ha sido guardado correctamente.',
    'success'
)
</script>
@endif

@if(session('editar')=== 'ok')
<script>
    Swal.fire(
    'Modificado!',
    'El registro ha sido modificado correctamente.',
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
    $('#fincas').DataTable({
        "lengthMenu":[[5,10,50,-1], [5,10,50,"All"]],
        responsive: true,
        autoWidth: false
    });
} );
</script>
@stop
