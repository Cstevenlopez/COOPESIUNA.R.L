
@extends('adminlte::page')

@section('title', 'Vitacoras')

@section('content_header')
<div class="card">
    <div class="card-body justify-content-between">
        <h1 style="float: left" class="text-gray">Administrar bitácoras</h1>
        <img style="float: right" src="/vendor/adminlte/dist/img/Logo.png" class="img-fluid mt-2" width="200px" alt="Responsive imagen">
    </div>
</div>
@stop
@section('css')
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.8/css/responsive.bootstrap4.min.css">
@stop
@section('content')

    <!-- ENTRADA PARA EL MODAL DE VITACORAS -->
    <div class="modal fade bd-example-modal-lg" id="modalbitacoras" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="exampleModalLabel">Agregar nueva Bitácora</h5>
                <img src="https://firebasestorage.googleapis.com/v0/b/restaurant-687a2.appspot.com/o/productos%2Fdf10692f-e58d-41f6-b2c0-fef2f915bb15.png?alt=media&token=329a01f5-6da1-469d-bda6-f102d1852f33" width="100px" alt="Logo">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <Form action="/vitacoras" method="POST">
                                @csrf()

                                <div class="row">
                                <div class=" col mb-3">
                                <label for="" class="form-label">Actividad</label><br>
                                @error('actividad')
                                <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
                                @enderror
                                <input type="text" value="{{old('actividad')}}" name="actividad" class="form-control" tabindex="4" placeholder="Nombre de la actividad">
                                </div>

                                <div class="col mb-3">
                                <label for="" class="form-label">Objetivo</label><br>
                                @error('objetivo')
                                <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
                                @enderror
                                <input type="text" value="{{old('objetivo')}}" name="objetivo" class="form-control" tabindex="4" placeholder="Objetivo de la actividad">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col mb-3">
                                <label for="" class="form-label">Temas</label><br>
                                @error('temas_abordados')
                                <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
                                @enderror
                                <input type="text" value="{{old('temas_abordados')}}" name="temas_abordados" class="form-control" tabindex="4" placeholder="Temas abordados">
                                </div>
                                <div class="col mb-3">
                                <label for="" class="form-label">Dificultades</label><br>
                                @error('dificultades')
                                <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
                                @enderror
                                <input type="text" value="{{old('dificultades')}}" name="dificultades" class="form-control" tabindex="4" placeholder="Dificultades encontradas">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col mb-3">
                                <label for="" class="form-label">Soluciones</label><br>
                                @error('soluciones')
                                <small style="background: #00ffff;"  class="text-danger">*{{$message}}</small>
                                @enderror
                                <input type="text" value="{{old('soluciones')}}" name="soluciones" class="form-control" tabindex="4" placeholder="Soluciones">
                                </div>
                                <div class="col mb-3">
                                <label for="" class="form-label">Recomendaciones</label><br>
                                @error('recomendaciones')
                                <small style="background: #00ffff;"  class="text-danger">*{{$message}}</small>
                                @enderror
                                <input type="text" value="{{old('recomendaciones')}}" id="recomendaciones" name="recomendaciones" class="form-control" tabindex="4" placeholder="Recomendaciones">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col mb-3">
                                <label for="" class="form-label">Fecha de visita</label><br>
                                @error('fecha')
                                <small style="background: #00ffff;"  class="text-danger">*{{$message}}</small>
                                @enderror
                                <input type="text" value="{{ $fecha_actual }}" id="fecha" name="fecha" class="form-control" tabindex="4" readonly>
                                </div>

                                <div class=" col mb-3">
                                <label for="" class="form-label">Siguiente visita</label><br>
                                @error('siguiente_visita')
                                <small style="background: #00ffff;"  class="text-danger">*{{$message}}</small>
                                @enderror
                                <input type="date" value="{{old('siguiente_visita')}}" name="siguiente_visita" class="form-control" tabindex="4" placeholder="">
                                </div>
                            </div>

                                <!-- SELECT PERFIL -->
                                <div class="mb-3">
                                    <label for="" class="form-label">Seleccione el nombre del productor</label><br>
                                    @error('productorid ')
                                    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
                                    @enderror
                                        <select name="productorid" class="form-select form-control" tabindex="4" aria-label="Default select example" require>
                                            @foreach(App\Models\Productor::get() as $productor)
                                    <option value="{{$productor->id}}">{{$productor->nombres}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- FIN DEL SELECT -->

                                <!-- SELECT PERFIL -->
                                <div class="mb-3">
                                    @error('usuario_id ')
                                    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
                                    @enderror
                                    <select style="visibility: hidden;" name="usuario_id" class="">
                                        @foreach (App\Models\User::where('id', auth()->user()->id)->get() as $usersName )
                                        <option value="{{$usersName->id}}">{{$usersName->id}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- FIN DEL SELECT -->

                                <button type="submit" class="btn btn-primary formulario-guardar" tabindex="4"><i class="fas fa-save"></i>Guardar</button>
                                <a href="/objetivos" class="btn btn-secondary" tabindex="5"><i class="fas fa-reply-all"></i>Cancelar</a>
                                </Form>
                        </div>
                    </div>
                </div>
          </div>
        </div>
      </div>
    <!-- FIN DEL MODAL DE VITACORAS -->

    <!-- CRUD DE USUARIOS -->
    <div class="card shadow-lg">
    <div class="card-header">
        <div class="card-title">
            <b class="text-dark">Productores | Listado</b>
        </div>
        @can('crear-bitacora')
        <a style="float: right" href="" class="btn bg-primary" data-toggle="modal" data-target="#modalbitacoras">Nueva Bitácora  <i class="fas fa-plus-circle"></i></a>
        @endcan
    </div>
    <div class="card-body">
    <table id="tabla-vitacoras" class="table">
    <thead class="bg-primary">
    <tr>
            <th scope="col">Actividad</th>
            <th scope="col">Objetivo</th>
            <th scope="col">Temas</th>
            <th scope="col">Didicultades</th>
            <th scope="col">Soluciones</th>
            <th scope="col">Recom.</th>
            <th scope="col">Fecha</th>
            <th scope="col">Sig. visita</th>
            <th scope="col">Productor</th>
            <th scope="col">Usuario</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody class="">
    @foreach($vitacora_asistencias as $vitacora_asistencias)
        <tr>
            <td>{{$vitacora_asistencias->actividad}}</td>
            <td>{{$vitacora_asistencias->objetivo}}</td>
            <td>{{$vitacora_asistencias->temas_abordados}}</td>
            <td>{{$vitacora_asistencias->dificultades}}</td>
            <td>{{$vitacora_asistencias->soluciones}}</td>
            <td>{{$vitacora_asistencias->recomendaciones}}</td>
            <td>{{$vitacora_asistencias->fecha}}</td>
            <td>{{$vitacora_asistencias->siguiente_visita}}</td>
            <td>{{$vitacora_asistencias->productor->nombres}}</td>
            <td>{{$vitacora_asistencias->users->name}}</td>
            <td>
                @can('editar-bitacora')
                <a href="/vitacoras/{{$vitacora_asistencias->id}}/edit" class="btn btn-warning text-white"><i class="fas fa-edit"></i></a>
                @endcan
                <a class="btn btn-info" href="/vitacoras/{{ $vitacora_asistencias->id }}"><i class="fas fa-file-pdf"></i></a>
                <a  class="btn btn-primary" target="_blank" href="/vitacoras-print-pdf/{{ $vitacora_asistencias->id }}"class="btn btn-info"><i class="fas fa-print"></i></a>
                @can('borrar-bitacora')
                    {!! Form::open(['method' => 'DELETE', 'route' => ['vitacoras.destroy', $vitacora_asistencias->id],'class' =>'formulario-eliminar', 'style'=>'display:inline']) !!}
                    {!! Form::button('<i class="fas fa-trash"></i>', ['class' => 'btn btn-danger eliminar', 'type'=> 'submit']) !!}
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
responsive: true,
autoWidth: false
});
} );
</script>
@stop
