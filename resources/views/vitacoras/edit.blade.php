@extends('adminlte::page')

@section('title', 'Editar Bitacoras')

@section('content_header')
    <div class="card">
        <div class="card-body">
            <img src="/vendor/adminlte/dist/img/Logo.png" class="img-fluid" width="250px" alt="Responsive imagen">
        </div>
    </div>
@stop
@section('content')
    <div class="card shadow-lg">
        <div class="card-body">

            <Form action="/vitacoras/{{ $Vitacora_asistencias->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-row">

                    <div class="form-group col-md-12">
                        <label>Actividad</label>
                        <input type="text" class="form-control p-3 bg-white shadow-sm rounded"
                            value="{{ $Vitacora_asistencias->actividad }}" name="actividad" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Objetivo</label>
                        <input type="text" class="form-control p-3 bg-white shadow-sm rounded"
                            value="{{ $Vitacora_asistencias->objetivo }}" name="objetivo" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Temas abordados</label>
                        <input type="text" class="form-control p-3 bg-white shadow-sm rounded"
                            value="{{ $Vitacora_asistencias->temas_abordados }}" name="temas_abordados" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Dificultades</label>
                        <input type="text" class="form-control p-3 bg-white shadow-sm rounded"
                            value="{{ $Vitacora_asistencias->dificultades }}" name="dificultades" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Soluciones</label>
                        <input type="text" class="form-control p-3 bg-white shadow-sm rounded"
                            value="{{ $Vitacora_asistencias->soluciones }}" name="soluciones" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Recomendaciones</label>
                        <input type="text" class="form-control p-3 bg-white shadow-sm rounded"
                            value="{{ $Vitacora_asistencias->recomendaciones }}" name="recomendaciones" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Fecha de visita</label>
                        <input type="text" class="form-control p-3 bg-white shadow-sm rounded"
                            value="{{ $Vitacora_asistencias->fecha }}" name="fecha" readonly required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Siguiente visita</label>
                        <input type="date" class="form-control p-3 bg-white shadow-sm rounded"
                            value="{{ $Vitacora_asistencias->siguiente_visita }}" name="siguiente_visita" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Productor</label>
                        <p>{{ $Vitacora_asistencias->productor->nombres }}</p>
                        <input style="visibility: hidden;" type="text" class="form-control p-3 bg-white shadow-sm rounded"
                            value="{{ $Vitacora_asistencias->productorid }}" name="productorid" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Usuario</label>
                        <p>{{ $Vitacora_asistencias->users->name }}</p>
                        <input style="visibility: hidden;" type="text" class="form-control p-3 bg-white shadow-sm rounded"
                            value="{{ $Vitacora_asistencias->usuario_id }}" name="usuario_id" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-info">Editar <i class="fas fa-pencil-alt"></i></button>
                <a href="/vitacoras" class="btn btn-danger" tabindex="5">Cancelar <i class="fas fa-reply-all"></i></a>
            </Form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
