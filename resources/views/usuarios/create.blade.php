@extends('adminlte::page')

@section('title', 'Añadir usuarios')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<Form action="/usuarios/{{$users->id}}" method="POST">
@csrf()
<div class="mb-3">
        <label for="" class="form-label">ID de usuario</label>
        <input type="text" id="id_usuario" name="id_usuario" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" id="name" name="name" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Usuario</label>
        <input type="text" id="usuario" name="usuario" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">E mail</label>
        <input type="text" id="email" name="email" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Contraseña</label>
        <input type="text" id="password" name="password" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Perfil</label>
        <input type="text" id="perfil" name="perfil" class="form-control" tabindex="4">
    </div>
    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">Guardar</button>
    <a href="/usuarios" class="btn btn-secondary btn-lg btn-block mt-1" tabindex="5">Cancelar</a>
</Form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop