@extends('adminlte::page')

@section('title', 'Editar fincas')

@section('content_header')
<div class="w-max shadow-lg text-center p-3 bg-info">Editar Fincas</div>
@stop

@section('content')

<Form action="/fincas/{{$fincas->id}}" method="POST">

@csrf()
@method('PUT')

<div class="form-row ml-5">
    <div class="ml-5 col-md-3 mb-2">
    <label class="text-info">ID Finca</label>
    <input type="text" style="height: 50px;" class="form-control shadow-lg p-3 mb-2 bg-white rounded" value="{{$fincas->id_finca}}" name="id_finca" id="id_finca" placeholder=""required>
    <div class="valid-feedback">
    </div>
    </div>

    <div class="col-md-4 mb-3">
    <label class="text-info">Nombre de la finca</label>
    <input type="text" style="height: 50px" class="form-control shadow-lg p-3 mb-4 bg-white rounded" value="{{$fincas->nombre}}" name="nombre" id="nombre" placeholder=""required>
    <div class="valid-feedback">
    </div>
    </div>

    <div class="col-md-3 mb-3">
    <label class="text-info">Tipo de legalidad</label>
    <input type="text" style="height: 50px" class="form-control shadow-lg p-3 mb-4 bg-white rounded" value="{{$fincas->legalidad}}" name="legalidad" id="legalidad" placeholder=""required>
    <div class="valid-feedback">
    </div>
    </div>  

    <div class="ml-5 col-md-3 mb-3">
    <label class="text-info">Comunidad</label>
    <input type="text" style="height: 50px" class="form-control shadow-lg p-3 mb-4 bg-white rounded" value="{{$fincas->comunidad}}" name="comunidad" id="comunidad" placeholder=""required>
    <div class="valid-feedback">
    </div>
    </div>

    <div class="col-md-4 mb-3">
    <label class="text-info">Municipio</label>
    <input type="text" style="height: 50px" class="form-control shadow-lg p-3 mb-5 bg-white rounded" value="{{$fincas->municipio}}" name="municipio" id="municipio" placeholder=""required>
    <div class="valid-feedback">
    </div>
    </div>
    
    <div class="col-md-3 mb-3">
    <label class="text-info">Departamento</label>
    <input type="text" style="height: 50px" class="form-control shadow-lg p-3 mb-5 bg-white rounded" value="{{$fincas->departamento}}" name="departamento" id="departamento" placeholder=""required>
    <div class="valid-feedback">
    </div>
    </div>

    <div class="ml-5 col-md-3 mb-3">
    <label class="text-info">Pais</label>
    <input type="text" style="height: 50px" class="form-control shadow-lg p-3 mb-5 bg-white rounded" value="{{$fincas->pais}}" name="pais" id="pais" placeholder=""required>
    <div class="valid-feedback">
    </div>
    </div>

    <div class="col-md-4 mb-3">
    <label class="text-info">Disponibilidad de energia</label>
    <input type="text" style="height: 50px" class="form-control shadow-lg p-3 mb-5 bg-white rounded" value="{{$fincas->disponibilidad_energia}}" name="disponibilidad_energia" id="disponibilidad_energia" placeholder=""required>
    <div class="valid-feedback">
    </div>
    </div>
    
    <div class="col-md-3 mb-3">
    <label class="text-info">Disponibilidad de agua</label>
    <input type="text" style="height: 50px" class="form-control shadow-lg p-3 mb-5 bg-white rounded" value="{{$fincas->disponibilidad_agua}}" name="disponibilidad_agua" id="disponibilidad_agua" placeholder=""required>
    <div class="valid-feedback">
    </div>
    </div>
</div>
<button type="submit" style="margin-left:100px;" class="btn btn-primary btn-lg">Editar <i class="fas fa-edit"></i></button>
<a href="/fincas" class="btn btn-secondary btn-lg" tabindex="5">Cancelar <i class="fas fa-reply-all"></i></a>

</Form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop