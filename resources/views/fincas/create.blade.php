@extends('adminlte::page')

@section('title', 'Añadir fincas')

@section('content_header')
    <h1>Añadir finca</h1>
@stop

@section('content')
    <Form action="/fincas" method="POST">
@csrf()
<div class="mb-3">
        <label for="" class="form-label">ID de finca</label>
        <input type="text" id="id_finca" name="id_finca" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Legalidad</label>
        <input type="text" id="legalidad" name="legalidad" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Comunidad</label>
        <input type="text" id="comunidad" name="comunidad" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Municipio</label>
        <input type="text" id="municipio" name="municipio" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Departamento</label>
        <input type="text" id="departamento" name="departamento" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Pais</label>
        <input type="text" id="pais" name="pais" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Disponibilidad de energia</label>
        <input type="text" id="disponibilidad_energia" name="disponibilidad_energia" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Disponibilidad de agua</label>
        <input type="text" id="disponibilidad_agua" name="disponibilidad_agua" class="form-control" tabindex="4">
    </div>
    <a href="/fincas" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</Form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop