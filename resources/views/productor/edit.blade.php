@extends('adminlte::page')

@section('title', 'Editar usuarios')

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

<Form action="/productores/{{$productors->id}}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="form-row">
<div class="form-group col-md-6">
<label>ID de la finca</label>
<input type="text" class="form-control p-3 bg-white shadow-sm rounded" readonly value="{{$productors->fincaid}}" name="fincaid" id="fincaid" required>
</div>

<div class="form-group col-md-6">
<label>ID del productor</label>
<input type="text" class="form-control p-3 bg-white shadow-sm rounded" value="{{$productors->id_productor}}" name="id_productor" id="id_productor" required>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label>Nombres</label>
<input type="text" class="form-control p-3 bg-white shadow-sm rounded"  value="{{$productors->nombres}}" name="nombres" id="nombres" required>
</div>

<div class="form-group col-md-6">
<label>Apellidos</label>
<input type="text" class="form-control p-3 bg-white shadow-sm rounded" value="{{$productors->apellidos}}" name="apellidos" id="apellidos" required>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label>Número de cedula</label>
<input type="text" class="form-control p-3 bg-white shadow-sm rounded"  value="{{$productors->numero_cedula}}" name="numero_cedula" id="numero_cedula" required>
</div>

<div class="form-group col-md-6">
<label>Número de teléfono</label>
<input type="text" class="form-control p-3 bg-white shadow-sm rounded" value="{{$productors->numero_telefono}}" name="numero_telefono" id="numero_telefono" required>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label>Comunidad</label>
<input type="text" class="form-control p-3 bg-white shadow-sm rounded" value="{{$productors->comunidad}}" name="comunidad" id="comunidad" placeholder=""required>
</div>

<div class="form-group col-md-6">
<label>Municipio</label>
<input type="text" class="form-control p-3 bg-white shadow-sm rounded" value="{{$productors->municipio}}" name="municipio" id="municipio">
</div>

</div>
<button type="submit" class="btn btn-info">Editar <i class="fas fa-pencil-alt"></i></button>
<a href="/usuarios" class="btn btn-danger" tabindex="5">Cancelar <i class="fas fa-reply-all"></i></a>
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