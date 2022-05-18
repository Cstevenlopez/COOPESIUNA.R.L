@extends('adminlte::page')

@section('title', 'Uso de tierras')

@section('content_header')
@stop

@section('content')
<!-- ENTRADA PARA EL MODAL DE TIERRAS -->
<div class="text-center">
<a href="" class="btn bg-info btn-default mt-3 btn-rounded mb-4" data-toggle="modal" data-target="#modalTierras">Nuevo registro  <i class="fas fa-clipboard"></i></a>
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
        <label for="" class="form-label">Seleccione la finca</label><br>
        @error('finca_id')
        <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
        @enderror
            <select name="finca_id" class="form-select form-control" tabindex="4" aria-label="Default select example" require>
                <option>--Seleccione--</option>
                @foreach(App\Models\Finca::get() as $fincas)
        <option value="{{$fincas->id}}">{{$fincas->nombre}}</option>
            @endforeach
        </select>
    </div>
    <!-- FIN DEL SELECT -->

    <div class="mb-3">
        <label for="" class="form-label">Area total</label><br>
        @error('area_total')
        <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
        @enderror
        <input type="text" id="area_total" name="area_total" class="form-control" tabindex="4" placeholder="Area total de la finca" require>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Bosque primario</label><br>
        @error('boque_primario')
        <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
        @enderror
        <input type="text" id="boque_primario" name="boque_primario" class="form-control" tabindex="4" placeholder="Área del bosque primario" require>
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Bosque secundario</label><br>
    @error('bosque_secundario')
        <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
        @enderror
    <input type="text" id="bosque_secundario" name="bosque_secundario" class="form-control" tabindex="4" placeholder="Área del bosque secundario" require>
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Cultivos anuales</label><br>
    @error('cultivos_anuales')
        <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
        @enderror
    <input type="text" id="cultivos_anuales" name="cultivos_anuales" class="form-control" tabindex="4" placeholder="" require>
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Plantaciones forestales</label><br>
    @error('plantaciones_forestales')
        <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
        @enderror
    <input type="text" id="plantaciones_forestales" name="plantaciones_forestales" class="form-control" tabindex="4" placeholder="" require>
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Áreas de pasto abierto</label><br>
    @error('areas_pasto_abierto')
        <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
        @enderror
    <input type="text" id="areas_pasto_abierto" name="areas_pasto_abierto" class="form-control" tabindex="4" placeholder="" require>
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Áreas de pasto con árboles</label><br>
    @error('areas_pasto_arboles')
        <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
        @enderror
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

<!-- CRUD DE TIERRAS -->

<!-- <style>
        tr:hover {
        background-color: DodgerBlue;
        color:white;
        }
</style> -->
<div class="card shadow-lg">
<div class="card-body">

<table id="usuarios"  class="table table-light table-striped table-bordered" style="width:100%">
<thead class="">
    <tr>
        <th scope="col">Finca</th>
        <th scope="col">Area Total</th>
        <th scope="col">Bosque N°1</th>
        <th scope="col">Bosque N°2</th>
        <th scope="col">Cultivos anuales</th>
        <th scope="col">Plantaciones forestales</th>
        <th scope="col">Areas de pasto</th>
        <th scope="col">Áreas de Árboles</th>
        <th scope="col">Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach($uso_de_tierras as $uso_de_tierras)
    <tr>
        <td>{{ $uso_de_tierras->finca->nombre }}</td>
        <td>{{$uso_de_tierras->area_total}}</td>
        <td>{{$uso_de_tierras->boque_primario}}</td>
        <td>{{$uso_de_tierras->bosque_secundario}}</td>
        <td>{{$uso_de_tierras->cultivos_anuales}}</td>
        <td>{{$uso_de_tierras->plantaciones_forestales}}</td>
        <td>{{$uso_de_tierras->areas_pasto_abierto}}</td>
        <td>{{$uso_de_tierras->areas_pasto_arboles}}</td>
        <td>
        <form action="{{ route('tierras.destroy',$uso_de_tierras->id)}}" class="formulario-eliminar" method="POST">
        <a href="/tierras/{{$uso_de_tierras->id}}/edit" class="btn btn-sm btn-info"><i class="fas fa-pencil-alt"></i></a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
        </form>
</div>
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
$('#usuarios').DataTable({
"lengthMenu":[[5,10,50,-1], [5,10,50,"All"]],
 responsive: true,
 autoWidth: false
});
} );
</script>
@stop
