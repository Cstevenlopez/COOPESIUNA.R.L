@extends('adminlte::page')

@section('title', 'Vitacoras')

@section('content_header')
@stop
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.8/css/responsive.bootstrap4.min.css">
@stop
@section('content')

<!-- ENTRADA PARA EL MODAL DE VITACORAS -->
<div class="text-center">
<a href="" class="btn bg-info btn-default btn-rounded mb-3" data-toggle="modal" data-target="#modalobjetivos">Nueva vitacora  <i class="fas fa-clipboard"></i></a>
</div>
    <div class="modal fade" id="modalobjetivos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header bg-info">
    <h5 class="modal-title" id="exampleModalLabel">Agregar nueva vitacora</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">
    <Form action="/vitacoras" method="POST">
    @csrf()

    <div class="mb-3">
    <label for="" class="form-label">ID de vitacora</label><br>
    @error('id_vitacora')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror
    <input type="text" value="{{old('id_vitacora')}}" name="id_vitacora" class="form-control" tabindex="1" placeholder="CONTABILIDAD-01 ">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Actividad</label><br>
    @error('actividad')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror
    <input type="text" value="{{old('actividad')}}" name="actividad" class="form-control" tabindex="4" placeholder="Juan Benito Lopez Perez">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Objetivo de la visita</label><br>
    @error('objetivo')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror
    <input type="text" value="{{old('objetivo')}}" name="objetivo" class="form-control" tabindex="4" placeholder="Juan01">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Temas abordados</label><br>
    @error('temas_abordados')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror
    <input type="text" value="{{old('temas_abordados')}}" name="temas_abordados" class="form-control" tabindex="4" placeholder="Juan01">
    </div>


    <div class="mb-3">
    <label for="" class="form-label">Dificultades</label><br>
    @error('dificultades')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror
    <input type="text" value="{{old('dificultades')}}" name="dificultades" class="form-control" tabindex="4" placeholder="ejemplo@gmail.com">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Soluciones</label><br>
    @error('soluciones')
    <small style="background: #00ffff;"  class="text-danger">*{{$message}}</small>
    @enderror
    <input type="text" value="{{old('soluciones')}}" name="soluciones" class="form-control" tabindex="4" placeholder="...">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Recomendaciones</label><br>
    @error('recomendaciones')
    <small style="background: #00ffff;"  class="text-danger">*{{$message}}</small>
    @enderror
    <input type="text" value="{{old('recomendaciones')}}" id="recomendaciones" name="recomendaciones" class="form-control" tabindex="4" placeholder="...">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Fecha de visita</label><br>
    @error('fecha')
    <small style="background: #00ffff;"  class="text-danger">*{{$message}}</small>
    @enderror
    <input type="date" value="{{old('fecha')}}" id="fecha" name="fecha" class="form-control" tabindex="4" placeholder="...">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Siguiente visita</label><br>
    @error('siguiente_visita')
    <small style="background: #00ffff;"  class="text-danger">*{{$message}}</small>
    @enderror
    <input type="date" value="{{old('siguiente_visita')}}" name="siguiente_visita" class="form-control" tabindex="4" placeholder="...">
    </div>

    <!-- SELECT PERFIL -->
    <div class="mb-3">
        <label for="" class="form-label">ID de productor</label><br>
        @error('productorid ')
        <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
        @enderror
            <select name="productorid" class="form-select form-control" tabindex="4" aria-label="Default select example" require>
                <option>--Seleccione--</option>
                @foreach(App\Models\Productor::get() as $productor)
        <option value="{{$productor->id_productor}}">{{$productor->nombres}}</option>
            @endforeach
        </select>
    </div>
    <!-- FIN DEL SELECT -->

    <!-- SELECT PERFIL -->
    <div class="mb-3">
        <label for="" class="form-label">ID de usuario</label><br>
        @error('usuario_id ')
        <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
        @enderror
            <select name="usuario_id" class="form-select form-control" tabindex="4" aria-label="Default select example" require>
                <option>--Seleccione--</option>
                @foreach(App\Models\User::get() as $usuarios)
        <option value="{{$usuarios->id_usuario}}">{{$usuarios->name}}</option>
            @endforeach
        </select>
    </div>
    <!-- FIN DEL SELECT -->

    <button type="submit" class="btn btn-lg btn-primary formulario-guardar" tabindex="4"><i class="fas fa-save"></i></button>
    <a href="/objetivos" class="btn btn-lg btn-secondary" tabindex="5"><i class="fas fa-reply-all"></i></a>
    </Form>
    </div>
    </div>
    </div>
    </div>
<!-- FIN DEL MODAL DE VITACORAS -->

<!-- CRUD DE USUARIOS -->

<div class="card bg-light shadow-lg">
<div class="card-body">
<a href="/download-pdf" class="btn float-right mb-4 btn-sm btn-info"> Descargar  <i class="fas fa-angle-double-down"></i></a>
<a href="/get-all-logs" class="btn mb-4 btn-sm btn-info"> Ver documento  <i class="fas fa-address-book"></i></a>
<table id="tabla-vitacoras" class="table table-striped tabla-xd" style="width:100%">
<thead class="">
<tr>
        <th scope="col">ID vitacora</th>
        <th scope="col">Actividad</th>
        <th scope="col">Objetivo</th>
        <th scope="col">Temas</th>
        <th scope="col">Dificultades</th>
        <th scope="col">Soluciones</th>
        <th scope="col">recomendaciones</th>
        <th scope="col">Fecha</th>
        <th scope="col">Siguiente visita</th>
        <th scope="col">Productor</th>
        <th scope="col">Usuario</th>
        <th scope="col">Acciones</th>
    </tr>
</thead>
<tbody class="">
@foreach($vitacora_asistencias as $vitacora_asistencias)
    <tr>
        <td>{{$vitacora_asistencias->id_vitacora}}</td>
        <td>{{$vitacora_asistencias->actividad}}</td>
        <td>{{$vitacora_asistencias->objetivo}}</td>
        <td>{{$vitacora_asistencias->temas_abordados}}</td>
        <td>{{$vitacora_asistencias->dificultades}}</td>
        <td>{{$vitacora_asistencias->soluciones}}</td>
        <td>{{$vitacora_asistencias->recomendaciones}}</td>
        <td>{{$vitacora_asistencias->fecha}}</td>
        <td>{{$vitacora_asistencias->siguiente_visita}}</td>
        <td>{{$vitacora_asistencias->productorid}}</td>
        <td>{{$vitacora_asistencias->usuario_id}}</td>
        <td >
        <form class="eliminar" action="{{route('vitacoras.destroy',$vitacora_asistencias->id)}}" method="POST">
        <a href="/vitacoras/{{$vitacora_asistencias->id}}/edit" class="btn btn-sm btn-info"><i class="fas fa-pencil-alt"></i></a>
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
$('.eliminar').submit(function(e){
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
$('#tabla-vitacoras').DataTable({
"lengthMenu":[[5,10,50,-1], [5,10,50,"All"]],
responsive: true
});
} );
</script>
@stop