@extends('adminlte::page')

@section('title', 'Editar fincas')

@section('content_header')
    <h1>Editar fincas</h1>
@stop

@section('content')
<Form action="/fincas/{{$fincas->id}}" method="POST">
@csrf()
@method('PUT')
<div class="mb-3">
        <label for="" class="form-label">ID de finca</label>
        <input type="text" id="id_finca" name="id_finca" value="{{$fincas->id_finca}}" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" id="nombre" name="nombre" value="{{$fincas->nombre}}" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Legalidad</label>
        <input type="text" id="legalidad" name="legalidad" value="{{$fincas->legalidad}}" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Comunidad</label>
        <input type="text" id="comunidad" name="comunidad" value="{{$fincas->comunidad}}" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Municipio</label>
        <input type="text" id="municipio" name="municipio" value="{{$fincas->municipio}}" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Departamento</label>
        <input type="text" id="departamento" name="departamento" value="{{$fincas->departamento}}" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Pais</label>
        <input type="text" id="pais" name="pais" value="pais" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Disponibilidad de energia</label>
        <input type="text" id="disponibilidad_energia" name="disponibilidad_energia" value="{{$fincas->disponibilidad_energia}}" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Disponibilidad de agua</label>
        <input type="text" id="disponibilidad_agua" name="disponibilidad_agua" value="{{$fincas->disponibilidad_agua}}" class="form-control" tabindex="4">
    </div>
    <a href="/fincas" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Editar</button>
</Form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop