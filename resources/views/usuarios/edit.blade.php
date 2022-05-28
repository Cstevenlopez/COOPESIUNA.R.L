    @extends('adminlte::page')

    @section('title', 'Editar usuarios')

    @section('content_header')
    <div style="border-bottom: 2px solid #0275d8" class="card">
        <div class="card-body justify-content-between">
            <h1 style="float: left; font-weight: bold;" class="text-gray">Editar usuario</h1>
            <img style="float: right" src="/vendor/adminlte/dist/img/Logo.png" class="img-fluid mt-2" width="200px" alt="Responsive imagen">
        </div>
    </div>
    @stop
    @section('content')
        <div class="card shadow">
            <div class="card-body">
                @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>¡Revise los campos!</strong>
                    @foreach($errors->all() as $error)
                    <span class="badge badge-danger">{{$error}}</span>
                    @endforeach
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                {!! Form::model($user, ['method'=>'PUT','route'=>['usuarios.update', $user->id]]) !!}

                <div class="form-row">
                <div class="col-xs-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="name">Nombre completo</label>
                            {!! Form::text('name', null, array('class'=>'form-control p-3 bg-white shadow-sm rounded'))!!}
                        </div>
                            </div>
                        <div class="col-xs-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            {!! Form::email('email', null, array('class'=>'form-control p-3 bg-white shadow-sm rounded'))!!}
                        </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-xs-3 col-md-3 col-sm-3">
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            {!! Form::password('password', array('class'=>'form-control p-3 bg-white shadow-sm rounded'))!!}
                        </div>
                        </div>
                        <div class="col-xs-3 col-md-3 col-sm-3">
                        <div class="form-group">
                            <label for="confirm-password">Confirmar la contraseña</label>
                            {!! Form::password('confirm-password', array('class'=>'form-control bg-white shadow-sm rounded'))!!}
                        </div>
                        </div>
                        <div class="col-xs-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="">Rol de usuario</label>
                            {!! Form::select('roles[]', $roles,[], array('class'=>'form-control bg-white shadow-sm rounded'))!!}
                        </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <button type="submit" class="btn btn-primary">
                                <span><i class="fas fa-archive"></i> Guardar</span>
                            </button>
                            <a class="btn btn-success" href="/usuarios">
                                <span><i class="fas fa-arrow-left"></i> Cancelar</span>
                            </a>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    @stop

    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

    @section('js')
    <script> console.log('Hi!'); </script>
    @stop
