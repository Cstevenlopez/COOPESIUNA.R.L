@extends('adminlte::page')

@section('title', 'Administrar productores')

@section('content_header')
@stop

@section('content')
<!-- ENTRADA PARA EL MODAL DE USUARIOS -->
<div class="text-center">
<a href="" class="btn bg-info btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalUsuarios">Nuevo productor <i class="fas fa-clipboard"></i></a>
</div>
    <div class="modal fade" id="modalUsuarios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header bg-info">
    <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo productor</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>

    <div class="modal-body">
    <Form action="/productores" method="POST">
    @csrf()

    <div class="mb-3">
        <label for="" class="form-label">Finca</label><br>
        @error('fincaid')
            <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
        @enderror
            <select  name="fincaid" class="form-select form-control" tabindex="4" aria-label="Default select example" require>
                <option>--Seleccione--</option>
                @foreach(App\Models\uso_de_tierra::get() as $uso_de_tierra)
        <option value="{{$uso_de_tierra->finca_id}}">{{$uso_de_tierra->finca_id}}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
    <label for="" class="form-label">ID del productor</label><br>
    @error('id_productor')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror
    <input type="text" value="{{old('id_productor')}}" name="id_productor" class="form-control" tabindex="4" placeholder="Juan Benito Lopez Perez">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Nombre del productor</label><br>
    @error('nombres')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror
    <input type="text" value="{{old('nombres')}}" name="nombres" class="form-control" tabindex="4" placeholder="Juan01">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Apellido del productor</label><br>
    @error('apellidos')
    <small style="background: #00ffff;"  class="text-danger">*{{$message}}</small>
    @enderror
    <input type="text" value="{{old('apellidos')}}"  name="apellidos" class="form-control" tabindex="4" placeholder="...">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Cedula</label><br>
    @error('numero_cedula')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror
    <input type="text" value="{{old('numero_cedula')}}" name="numero_cedula" class="form-control" tabindex="4" placeholder="ejemplo@gmail.com">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Número de teléfono</label><br>
    @error('numero_telefono')
    <small style="background: #00ffff;"  class="text-danger">*{{$message}}</small>
    @enderror
    <input type="text" value="{{old('numero_telefono')}}" name="numero_telefono" class="form-control" tabindex="4" placeholder="...">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Comunidad</label><br>
    @error('comunidad')
    <small style="background: #00ffff;"  class="text-danger">*{{$message}}</small>
    @enderror
    <input type="text" value="{{old('comunidad')}}" name="comunidad" class="form-control" tabindex="4" placeholder="...">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Municipio</label><br>
    @error('municipio')
    <small style="background: #00ffff;"  class="text-danger">*{{$message}}</small>
    @enderror
    <input type="text" value="{{old('municipio')}}" name="municipio" class="form-control" tabindex="4" placeholder="...">
    </div>

    <button type="submit" class="btn btn-primary" tabindex="4">Guardar<i class="fas fa-save"></i></button>
    <a href="/productores" class="btn btn-secondary" tabindex="5">Cancelar <i class="fas fa-reply-all"></i></a>
    </Form>
    </div>
    </div>
    </div>
    </div>
<!-- FIN DEL MODAL DE PRODUCTORES -->

<!-- CRUD DE PRODUCTORES -->
<div class="card shadow-lg">
<div class="card-body">
<table id="table-productor" class="table table-light table-striped table-bordered" style="width:100%;">
<thead class="">
    <tr>
        <th scope="col">ID de la Finca</th>
        <th scope="col">ID del Productor</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Cedula</th>
        <th scope="col">Teléfono</th>
        <th scope="col">Comunidad</th>
        <th scope="col">Municipio</th>
        <th scope="col">Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach($productors as $productors)
    <tr>
        <td>{{$productors->fincaid}}</td>
        <td>{{$productors->id_productor}}</td>
        <td>{{$productors->nombres}}</td>
        <td>{{$productors->apellidos}}</td>
        <td>{{$productors->numero_cedula}}</td>
        <td>{{$productors->numero_telefono}}</td>
        <td>{{$productors->comunidad}}</td>
        <td>{{$productors->municipio}}</td>
        <td>
        <form action="{{ route('productores.destroy',$productors->id)}}" class="formulario-eliminar" method="POST">
        <a href="/productores/{{$productors->id}}/edit" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-eraser"></i></button>
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
$('#table-productor').DataTable({
"lengthMenu":[[5,10,50,-1], [5,10,50,"All"]],
responsive: true
});
} );
</script>
@stop