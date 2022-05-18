@extends('adminlte::page')

@section('title', 'Editar fincas')

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

    <Form action="/fincas/{{$fincas->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-row">

    <div class="form-group col-md-12">
    <label>Nombre de la finca</label>
    <input type="text" class="form-control p-3 bg-white shadow-sm rounded" value="{{$fincas->nombre}}" name="nombre" id="nombre" required>
    </div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-6">
    <label>Tipo de legalidad</label>
    <input type="text" class="form-control p-3 bg-white shadow-sm rounded" value="{{$fincas->legalidad}}" name="legalidad" id="legalidad" placeholder=""required>
    </div>

    <div class="form-group col-md-6">
    <label>Comunidad</label>
    <input type="text" class="form-control p-3 bg-white shadow-sm rounded" value="{{$fincas->comunidad}}" name="comunidad" id="comunidad" required>
    </div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-6">
    <label>Municipio</label>
    <input type="text" class="form-control p-3 bg-white shadow-sm rounded" value="{{$fincas->municipio}}" name="municipio" id="municipio" placeholder=""required>
    </div>

    <div class="form-group col-md-6">
    <label>Departamento</label>
    <input type="text" class="form-control p-3 bg-white shadow-sm rounded" value="{{$fincas->departamento}}" name="departamento" id="departamento"required>
    </div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-6">
    <label>Pais</label>
    <input type="text" class="form-control p-3 bg-white shadow-sm rounded" value="{{$fincas->pais}}" name="pais" id="pais" placeholder=""required>
    </div>

    <div class="form-group col-md-6">
    <label>Disponibilidad de energia</label>
    <input type="text" class="form-control p-3 bg-white shadow-sm rounded" value="{{$fincas->disponibilidad_energia}}" name="disponibilidad_energia" id="disponibilidad_energia"required>
    </div>

    <div class="form-group col-md-12">
    <label>Disponibilidad de agua</label>
    <input type="text" class="form-control p-3 bg-white shadow-sm rounded" width="100%" value="{{$fincas->disponibilidad_agua}}" name="disponibilidad_agua" id="disponibilidad_agua"required>
    </div>
    </div>

    <button type="submit" class="btn btn-success">Editar <i class="fas fa-edit"></i></button>
    <a href="/fincas" class="btn btn-danger" tabindex="5">Cancelar <i class="fas fa-reply-all"></i></a>
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
