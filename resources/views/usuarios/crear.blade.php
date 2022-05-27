@extends('adminlte::page')

@section('title', 'Crear usuarios')

@section('content_header')
<div class="card">
    <div class="card-body">
    <img src="/vendor/adminlte/dist/img/Logo.png" class="img-fluid" width="250px" alt="Responsive imagen">
    </div>
    </div>
@stop

@section('content')
    <div class="section-body">
    <div class="row">
    <div class="col-lg-12">
    <div class="card">
        <div class="card-body">

            @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>¡Revise los campos!</strong>
                @foreach($errors->all() as $error)
                <span class="badge badge-danger">{{$error}}</span>
                @endforeach
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            {!! Form::open(array('route'=>'usuarios.store', 'method'=>'POST')) !!}

            <div class="form-row">
            <div class="col-xs-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <label for="name">Nombre completo*</label>
                        {!! Form::text('name', null, array('class'=>'form-control p-3 bg-white shadow-sm rounded'))!!}
                    </div>
                        </div>
                    <div class="col-xs-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <label for="email">E-mail*</label>
                        {!! Form::email('email', null, array('class'=>'form-control p-3 bg-white shadow-sm rounded'))!!}
                    </div>
                    </div>
                </div>
                <div class="form-row">

                    <div class="col-xs-3 col-md-3 col-sm-3">
                    <div class="form-group">
                        <label for="password">Contraseña*</label>
                        {!! Form::password('password', array('class'=>'form-control p-3 bg-white shadow-sm rounded'))!!}
                    </div>
                    </div>

                    <div class="col-xs-3 col-md-3 col-sm-3">
                    <div class="form-group">
                        <label for="confirm-password">Confirmar la contraseña*</label>
                        {!! Form::password('confirm-password', array('class'=>'form-control p-3 bg-white shadow-sm rounded'))!!}
                    </div>
                    </div>

                    <div class="col-xs-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <label for="">Rol de usuario*</label>
                        {!! Form::select('roles[]', $roles,[], array('class' => 'form-control bg-white shadow-sm rounded'))!!}
                    </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12"><button type="submit" class="btn btn-info">
                        <i class="fas fa-save"></i> Guardar
                        </button>
                        <a class="btn btn-secondary" href="/usuarios"><i class="fas fa-arrow-left"></i> Regresar</a>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
    </div>
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
