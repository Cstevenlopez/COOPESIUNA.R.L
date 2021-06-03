@extends('adminlte::page')

@section('title', 'Editar usuarios')

@section('content_header')
<div class="w-max shadow-lg text-center p-3 bg-info">Editar usuarios</div>
@stop
@section('content')
<Form action="/usuarios/{{$users->id}}" method="POST">
@csrf
@method('PUT')
<div class="form-row ml-5">
    <div class="ml-5 col-md-3 mb-2">
    <label class="text-info">ID de usuario</label>
    <input type="text" style="height: 50px;" class="form-control shadow-lg p-3 mb-2 bg-white rounded" value="{{$users->id_usuario}}" name="id_usuario" id="id_usuario" placeholder=""required>
    <div class="valid-feedback">
    </div>
    </div>

    <div class="col-md-4 mb-3">
    <label class="text-info">Nombres y apellidos</label>
    <input type="text" style="height: 50px" class="form-control shadow-lg p-3 mb-4 bg-white rounded" value="{{$users->name}}" name="name" id="name" placeholder=""required>
    <div class="valid-feedback">
    </div>
    </div>

    <div class="col-md-3 mb-3">
    <label class="text-info">Correo electronico</label>
    <input type="text" style="height: 50px" class="form-control shadow-lg p-3 mb-4 bg-white rounded" value="{{$users->email}}" name="email" id="email" placeholder=""required>
    <div class="valid-feedback">
    </div>
    </div>  

    <div class="ml-5 col-md-3 mb-3">
    <label class="text-info">Usuario</label>
    <input type="text" style="height: 50px" class="form-control shadow-lg p-3 mb-4 bg-white rounded" value="{{$users->usuario}}" name="usuario" id="comunusuarioidad" placeholder=""required>
    <div class="valid-feedback">
    </div>
    </div>

    <div class="col-md-4 mb-3">
    <label class="text-info">Contraseña</label>
    <input type="text" style="height: 50px" class="form-control shadow-lg p-3 mb-5 bg-white rounded" value="{{$users->password}}" name="password" id="password" placeholder=""required>
    <div class="valid-feedback">
    </div>
    </div>
    
    <div class="col-md-3 mb-3">
    <label class="text-info">Perfil de usuario</label>
    <input type="text" style="height: 50px" class="form-control shadow-lg p-3 mb-5 bg-white rounded" value="{{$users->perfil}}" name="perfil" id="perfil" placeholder=""required>
    <div class="valid-feedback">
    </div>
    </div>
</div>
<button type="submit" style="margin-left:100px;" class="btn btn-primary btn-lg">Editar <i class="fas fa-edit"></i></button>
<a href="/users" class="btn btn-secondary btn-lg" tabindex="5">Cancelar <i class="fas fa-reply-all"></i></a>
</Form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop