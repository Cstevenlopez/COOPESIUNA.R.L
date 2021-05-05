@extends ('layouts.plantillabaseu')

@section('contenido')
<Form action="/usuarios/{{$users->id}}" method="POST">
@csrf
@method('PUT')
<div class="mb-3">
        <label for="" class="form-label">ID de usuario</label>
        <input type="text" id="id_usuario" name="id_usuario" value="{{$users->id_usuario}}" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" id="name" name="name" value="{{$users->name}}" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Usuario</label>
        <input type="text" id="usuario" name="usuario" value="{{$users->usuario}}"  class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">E mail</label>
        <input type="text" id="email" name="email" value="{{$users->email}}"  class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Contraseña</label>
        <input type="text" id="password" name="password" value="{{$users->password}}"   class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Perfil</label>
        <input type="text" id="perfil" name="perfil" value="{{$users->perfil}}" class="form-control" tabindex="4">
    </div>
    <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Editar</button>
</Form>
@endsection