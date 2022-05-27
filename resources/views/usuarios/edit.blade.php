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
        <div class="section-body">
        <div class="row">
        <div class="col-lg-12">
        <div class="card">
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
                            <label for="name">Nombre completo*</label>
                            {!! Form::text('name', null, array('class'=>'form-control p-3 bg-white shadow-sm rounded'))!!}
                        </div>
                            </div>
                        <div class="col-xs-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="email">E-mail*</label>
                            {!! Form::email('email', null, array('class'=>'form-control p-3 bg-white shadow-sm rounded'))!!}
                        </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-xs-3 col-md-3 col-sm-3">
                        <div class="form-group">
                            <label for="password">Contraseña*</label>
                            {!! Form::password('password', array('class'=>'form-control p-3 bg-white shadow-sm rounded'))!!}
                        </div>
                        </div>
                        <div class="col-xs-3 col-md-3 col-sm-3">
                        <div class="form-group">
                            <label for="confirm-password">Confirmar la contraseña*</label>
                            {!! Form::password('confirm-password', array('class'=>'form-control p-3 bg-white shadow-sm rounded'))!!}
                        </div>
                        </div>
                        <div class="col-xs-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="">Rol de usuario*</label>
                            {!! Form::select('roles[]', $roles,[], array('class'=>'form-control bg-white shadow-sm rounded'))!!}
                        </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <button type="submit" class="btn btn-info">
                            <i class="fas fa-save"></i> Guardar
                            </button>
                            <a class="btn btn-secondary" href="/usuarios"><i class="fas fa-arrow-left"></i> Regresar</a>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
        </div>
        </div>
        </div>
    @stop

    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

    @section('js')
    <script> console.log('Hi!'); </script>
    @stop
