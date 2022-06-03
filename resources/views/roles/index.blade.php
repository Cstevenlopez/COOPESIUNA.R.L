@extends('adminlte::page')

@section('title', 'Administrar roles')

@section('content_header')
<div>
    <div class="card">
        <div class="card-body justify-content-between">
            <h1 style="float: left" class="text-gray flex-wrap">Administrar roles</h1>
            <img style="float: right" src="/vendor/adminlte/dist/img/Logo.png" class="img-fluid" width="200px" alt="Responsive imagen">
        </div>
    </div>
</div>
@stop

@section('content')
    <div class="section-body">
        <div class="row">
    <div class="col-lg-12">

<div class="card">
    <div class="card-header">
        <div class="card-title">
            <b>Roles | Listado</b>
        </div>
        @can('crear-rol')
        <div>
        <a style="float: right" href="{{ route('roles.create') }}" class="btn btn-primary">
            <span><i class="fas fa-plus-square"></i> Agregar nuevo rol</span>
        </a>
        </div>
        @endcan
    </div>
    <div class="card-body">
        <table id="mytable" class="table table-bordered" style="width:100%">
    <thead class="bg-primary">
        <tr>
            <th>Rol</th>
            <th>Acciones</th>
        </tr>
    </thead>
<tbody>
@foreach($roles as $role)
<tr>
    <td>{{$role->name}}</td>
<td>
    @can('editar-rol')
    <a class="btn btn-warning text-white" href="{{ route('roles.edit', $role->id) }}"><i class="fas fa-edit"></i></a>
    @endcan

    @can('borrar-rol')
    {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style'=>'display:inline']) !!}
        {!! Form::button('<i class="fa fa-trash"></i>', ['class' => 'btn btn-danger formulario-eliminar', 'type'=> 'submit']) !!}
    {!! Form::close() !!}
    @endcan
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</section>

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
$('#mytable').DataTable({
"lengthMenu":[[5,10,50,-1], [5,10,50,"Todos"]],
    responsive: true,
    autoWidth: false
});
} );
</script>
@stop

