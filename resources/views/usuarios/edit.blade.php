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

    <Form action="/usuarios/{{$users->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-row">
    <div class="form-group col-md-6">
    <label>ID de usuario</label>
    <input type="text" class="form-control p-3 bg-white shadow-sm rounded" readonly value="{{$users->id_usuario}}" name="id_usuario" id="id_usuario" required>
    </div>

    <div class="form-group col-md-6">
    <label>Nombres y apellidos</label>
    <input type="text" class="form-control p-3 bg-white shadow-sm rounded" value="{{$users->name}}" name="name" id="name" required>
    </div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-6">
    <label>Correo electronico</label>
    <input type="text" class="form-control p-3 bg-white shadow-sm rounded" value="{{$users->email}}" name="email" id="email" placeholder=""required>
    </div>

    <div class="form-group col-md-6">
    <label>Contraseña</label>
    <input type="password" class="form-control p-3 bg-white shadow-sm rounded" value="" name="password" id="password">
    </div>

    <div class="form-group col-md-6 mt-2 mb-5">
    <label for="foto">Foto de usuario</label><br>
    <input type="file" class="file btn btn-success w-100" value="{{$users->foto}}" name="foto" id="foto">

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