@extends('adminlte::page')

@section('title', 'Editar tierras')

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

    <Form action="/tierras/{{$uso_de_tierras->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-row">

    <div class="form-group col-md-12">
    <label>Área total de la finca</label>
    <input type="text" class="form-control p-3 bg-white shadow-sm rounded" value="{{$uso_de_tierras->area_total}}" name="area_total" id="area_total" required>
    </div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-6">
    <label>Bosque primario</label>
    <input type="text" class="form-control p-3 bg-white shadow-sm rounded" value="{{$uso_de_tierras->boque_primario}}" name="boque_primario" id="boque_primario" placeholder=""required>
    </div>

    <div class="form-group col-md-6">
    <label>Bosque secundario</label>
    <input type="text" class="form-control p-3 bg-white shadow-sm rounded" value="{{$uso_de_tierras->bosque_secundario}}" name="bosque_secundario" id="bosque_secundario" required>
    </div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-6">
    <label>Cultivos anuales</label>
    <input type="text" class="form-control p-3 bg-white shadow-sm rounded" value="{{$uso_de_tierras->cultivos_anuales}}" name="cultivos_anuales" id="cultivos_anuales" placeholder=""required>
    </div>

    <div class="form-group col-md-6">
    <label>Plantaciones forestales</label>
    <input type="text" class="form-control p-3 bg-white shadow-sm rounded" value="{{$uso_de_tierras->plantaciones_forestales}}" name="plantaciones_forestales" id="plantaciones_forestales"required>
    </div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-6">
    <label>Áreas de pasto abierto</label>
    <input type="text" class="form-control p-3 bg-white shadow-sm rounded" value="{{$uso_de_tierras->areas_pasto_abierto}}" name="areas_pasto_abierto" id="areas_pasto_abierto" placeholder=""required>
    </div>

    <div class="form-group col-md-6">
    <label>Áreas de pasto con árboles</label>
    <input type="text" class="form-control p-3 bg-white shadow-sm rounded" value="{{$uso_de_tierras->areas_pasto_arboles}}" name="areas_pasto_arboles" id="areas_pasto_arboles"required>
    </div>
    </div>

    <button type="submit" class="btn btn-success">Editar <i class="fas fa-edit"></i></button>
    <a href="/tierras" class="btn btn-danger" tabindex="5">Cancelar <i class="fas fa-reply-all"></i></a>
    </Form>
    </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
