@extends('layouts.plantillabaseu');

@section('contenido')
<Form action="/usuarios" method="POST">
@csrf()
<div class="mb-3">
        <label for="" class="form-label">ID de usuario</label>
        <input type="text" id="id_usuario" name="id_usuario" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" id="name" name="name" step="any" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Usuario</label>
        <input type="text" id="usuario" name="usuario" step="any" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">E mail</label>
        <input type="text" id="email" name="email" step="any" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Contraseña</label>
        <input type="text" id="password" name="password" step="any" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Perfil</label>
        <input type="text" id="perfil" name="perfil" step="any" class="form-control" tabindex="4">
    </div>
    <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</Form>
@endsection