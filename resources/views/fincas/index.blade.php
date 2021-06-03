@extends('adminlte::page')

@section('title', 'Administrar fincas')

@section('content_header')
@stop

@section('content')

<!-- ENTRADA PARA EL MODAL DE FINCAS -->
<div class="text-center">
<a href="" class="btn btn-default bg-info btn-rounded mb-4" data-toggle="modal" data-target="#modalFincas">Nuevo registro  <i class="fas fa-clipboard"></i></a>
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

    <div class="mb-3">
    <label for="" class="form-label">Codigo de finca</label><br>
    @error('id_finca')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror
    <input type="text" id="id_finca" name="id_finca" class="form-control" tabindex="1" placeholder="CONTABILIDAD-01">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Nombre de la finca</label><br>
    @error('nombre')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror
    <input type="text" id="nombre" name="nombre" class="form-control" tabindex="4" placeholder="Nombre de la finca">
    </div>

    <!-- SELECT LEGALIDAD -->
    <div class="mb-3">
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

    <div class="mb-3">
    <label for="" class="form-label">Comunidad</label><br>
    @error('comunidad')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror
    <input type="text" id="comunidad" name="comunidad" class="form-control" tabindex="4" placeholder="Comunidad de la finca" require>
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Municipio</label><br>
    @error('municipio')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror
    <input type="text" id="municipio" name="municipio" class="form-control" tabindex="4" placeholder="Municipio de la finca" require>
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Departamento</label><br>
    @error('departamento')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror
    <input type="text" id="departamento" name="departamento" class="form-control" tabindex="4" placeholder="Departamento" require>
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Pais</label><br>
    @error('pais')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror
    <input type="text" id="pais" name="pais" class="form-control" tabindex="4" placeholder="Pais" require>
    </div>

    <!-- SELECT ENERGIA -->
    <div class="mb-3">
    <label for="" class="form-label">Disponibilidad de energia</label><br>
    @error('disponibilidad_energia')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror
    <select name="disponibilidad_energia" class="form-select form-control" tabindex="4" aria-label="Default select example" require>
    <option selected >Seleccione</option>
    <option value="si">Si</option>
    <option value="no">No</option>
    </select>
    </div>
    <!-- FIN DEL SELECT -->
    <!-- SELECT AGUA -->
    <div class="mb-5">
    <label for="" class="form-label">Disponibilidad de agua</label><br>
    @error('disponibilidad_agua')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror<br>
    <select name="disponibilidad_agua" class="form-select form-control" tabindex="4" aria-label="Default select example" require>
    <option selected >Seleccione</option>
    <option value="si">Si</option>
    <option value="no">No</option>
    </select>
    </div>
    <!-- FIN DEL SELECT -->
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar  <i class="fas fa-save"></i></button>
    <a href="/fincas" class="btn btn-secondary" tabindex="5">Cancelar  <i class="fas fa-reply-all"></i></a>
    </Form>
    </div>
    </div>
    </div>
    </div>
<!-- FIN DEL MODAL DE FINCAS -->

<!-- <a href="/fincas/create" class="btn btn-dark mb-4">Añadir otra finca</a> -->

<table id="fincas" class="table table-responsive-md table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-info text-white">
        <tr>
            <th scope="col">Nombre de la finca</th>
            <th scope="col">Legalidad</th>  
            <th scope="col">Comunidad</th>
            <th scope="col">Municipio</th>
            <th scope="col">Departamento</th>
            <th scope="col">Pais</th>
            <th scope="col">Hay energia</th>
            <th scope="col">Hay agua</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($fincas as $fincas)
        <tr>
            <td>{{$fincas->nombre}}</td>
            <td>{{$fincas->legalidad}}</td>
            <td>{{$fincas->comunidad}}</td>
            <td>{{$fincas->municipio}}</td>
            <td>{{$fincas->departamento}}</td>
            <td>{{$fincas->pais}}</td>
            <td>{{$fincas->disponibilidad_energia}}</td>
            <td>{{$fincas->disponibilidad_agua}}</td>
            <td>
            <form action="{{ route('fincas.destroy',$fincas->id)}}" class="formulario-eliminar" method="POST">
            <a href="/fincas/{{$fincas->id}}/edit" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
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
<script src="https://unpkg.com/ionicons@5.5.1/dist/ionicons.js"></script>
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
    $('#fincas').DataTable({
        "lengthMenu":[[5,10,50,-1], [5,10,50,"All"]]
    });
} );
</script>
@stop