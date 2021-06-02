@extends('adminlte::page')

@section('title', 'Administrar productores')

@section('content_header')
    <h3>Administrar productores</h3>
@stop

@section('content')
<!-- Entrada para el modal de productores -->
<div class="text-center">
<a href="" class="btn bg-info btn-default btn-rounded" data-toggle="modal" data-target="#modalTierras">Nuevo registro  <i class="fas fa-clipboard"></i></a>
</div>
    <div class="modal fade" id="modalTierras" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header bg-info">
    <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo registro de tierras</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">
    <Form action="/tierras" method="POST">
    @csrf()
    <!-- SELECT PERFIL -->
    <div class="mb-3">
        <label for="" class="form-label">Finca</label>
            <select name="finca_id" class="form-select form-control" tabindex="4" aria-label="Default select example" require>
                <option>--Seleccione--</option>
                @foreach(App\Models\Finca::get() as $fincas)
        <option value="{{$fincas->id_finca}}">{{$fincas->nombre}}</option>
            @endforeach
        </select>
    </div>
    <!-- FIN DEL SELECT -->

    <div class="mb-3">
        <label for="" class="form-label">Area total</label>
        <input type="text" id="area_total" name="area_total" class="form-control" tabindex="4" placeholder="Area total de la finca" require>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Bosque primario</label>
        <input type="text" id="boque_primario" name="boque_primario" class="form-control" tabindex="4" placeholder="Área del bosque primario" require>
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Bosque secundario</label>
    <input type="text" id="bosque_secundario" name="bosque_secundario" class="form-control" tabindex="4" placeholder="Área del bosque secundario" require>
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Cultivos anuales</label>
    <input type="text" id="cultivos_anuales" name="cultivos_anuales" class="form-control" tabindex="4" placeholder="" require>
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Plantaciones forestales</label>
    <input type="text" id="plantaciones_forestales" name="plantaciones_forestales" class="form-control" tabindex="4" placeholder="" require>
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Áreas de pasto abierto</label>
    <input type="text" id="areas_pasto_abierto" name="areas_pasto_abierto" class="form-control" tabindex="4" placeholder="" require>
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Áreas de pasto con árboles</label>
    <input type="text" id="areas_pasto_arboles" name="areas_pasto_arboles" class="form-control" tabindex="4" placeholder="" require>
    </div>

    <button type="submit" class="btn btn-info text-ligth bold border-0" tabindex="4">Guardar  <i class="fas fa-save"></i></button>
    <a href="/tierras" class="btn btn-danger bold text-light border-0" tabindex="5">Cancelar  <i class="fas fa-reply-all"></i></a>
    </Form>
    </div>
    </div>
    </div>
    </div>
<!-- FIN DEL MODAL DE TIERRAS -->

<!-- CRUD DE PRODUCTORES -->
<table id="usuarios" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
<thead class="thead-dark text-white">
    <tr>
        <th scope="col">Finca</th>
        <th scope="col">ID Productor</th>
        <th scope="col">Nombres</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Cedula</th>
        <th scope="col">Teléfono</th>
        <th scope="col">Foto</th>
        <th scope="col">Comunidad</th>
        <th scope="col">Municipio</th>
        <th scope="col">Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach($productors as $productors)
    <tr>
        <td>{{$productors->finca_id}}</td>
        <td>{{$productors->id_productor}}</td>
        <td>{{$productors->nombres}}</td>
        <td>{{$productors->apellidos}}</td>
        <td>{{$productors->numero_cedula}}</td>
        <td>{{$productors->numero_telefono}}</td>
        <td>{{$productors->foto}}</td>
        <td>{{$productors->comunidad}}</td>
        <td>{{$productors->municipio}}</td>
        <td>
        <form action="{{ route('productors.destroy',$productors->id)}}" method="POST">
        <a href="/productores/{{$productors->id}}/edit" class="btn btn-success">Editar</a>
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