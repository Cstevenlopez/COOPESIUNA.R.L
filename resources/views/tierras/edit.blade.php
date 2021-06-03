@extends('adminlte::page')

@section('title', 'Editar usuarios')

@section('content_header')
<div class="w-max shadow-lg text-center p-3 bg-info">Editar tierras</div>
@stop
@section('content')
<Form action="/tierras/{{$uso_de_tierras->id}}" method="POST">
@csrf
@method('PUT')
<div class="form-row ml-5">
    <div class="ml-5 col-md-3 mb-2">
    <label class="text-info">ID Finca</label>
    <input type="text" style="height: 50px;" class="form-control shadow-lg p-3 mb-2 bg-white rounded" value="{{$uso_de_tierras->finca_id}}" name="finca_id" id="finca_id" placeholder=""required>
    <div class="valid-feedback">
    </div>
    </div>

    <div class="col-md-4 mb-3">
    <label class="text-info">Área total</label>
    <input type="text" style="height: 50px" class="form-control shadow-lg p-3 mb-4 bg-white rounded" value="{{$uso_de_tierras->area_total}}" name="area_total" id="area_total" placeholder=""required>
    <div class="valid-feedback">
    </div>
    </div>

    <div class="col-md-3 mb-3">
    <label class="text-info">Bosque primario</label>
    <input type="text" style="height: 50px" class="form-control shadow-lg p-3 mb-4 bg-white rounded" value="{{$uso_de_tierras->boque_primario}}" name="boque_primario" id="boque_primario" placeholder=""required>
    <div class="valid-feedback">
    </div>
    </div>  

    <div class="ml-5 col-md-3 mb-3">
    <label class="text-info">Bosque secundario</label>
    <input type="text" style="height: 50px" class="form-control shadow-lg p-3 mb-4 bg-white rounded" value="{{$uso_de_tierras->bosque_secundario}}" name="bosque_secundario" id="bosque_secundario" placeholder=""required>
    <div class="valid-feedback">
    </div>
    </div>

    <div class="col-md-4">
    <label class="text-info">Cultivos anuales</label>
    <input type="text" style="height: 50px" class="form-control shadow-lg p-3 mb-5 bg-white rounded" value="{{$uso_de_tierras->cultivos_anuales}}" name="cultivos_anuales" id="cultivos_anuales" placeholder=""required>
    <div class="valid-feedback">
    </div>
    </div>
    
    <div class="col-md-3">
    <label class="text-info">Plantaciones forestales</label>
    <input type="text" style="height: 50px" class="form-control shadow-lg p-3 mb-5 bg-white rounded" value="{{$uso_de_tierras->plantaciones_forestales}}" name="plantaciones_forestales" id="plantaciones_forestales" placeholder=""required>
    <div class="valid-feedback">
    </div>
    </div>

    <div class="ml-5 col-md-5">
    <label class="text-info">Áreas de pasto abierto</label>
    <input type="text" style="height: 50px" class="form-control shadow-lg p-3 mb-5 bg-white rounded" value="{{$uso_de_tierras->areas_pasto_abierto}}" name="areas_pasto_abierto" id="areas_pasto_abierto" placeholder=""required>
    <div class="valid-feedback">
    </div>
    </div>

    <div class="col-md-5">
    <label class="text-info">Áreas de pasto con árboles</label>
    <input type="text" style="height: 50px" class="form-control shadow-lg p-3 mb-5 bg-white rounded" value="{{$uso_de_tierras->areas_pasto_arboles}}" name="areas_pasto_arboles" id="areas_pasto_arboles" placeholder=""required>
    <div class="valid-feedback">
    </div>
    </div>
</div>
<button type="submit" style="margin-left:100px;" class="btn btn-primary btn-lg">Editar <i class="fas fa-edit"></i></button>
<a href="/tierras" class="btn btn-secondary btn-lg" tabindex="5">Cancelar <i class="fas fa-reply-all"></i></a>
</Form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop