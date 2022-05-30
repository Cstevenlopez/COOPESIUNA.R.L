    @extends('adminlte::page')

    @section('title', 'Inicio')

    @section('content_header')

    @stop

    @section('content')
    <div class="row">
    <div class="col-md-12">
    <div class="card">
        <div class="card-header bg-info">
            <div style="position: absolute" class="card-tittle">Perfil de usuario
                <p>Vista detallada del usuario {{ $users->name }}</p>
            </div>
            <img style="width: 110px; height: 110px; border-radius:150px; display:block; margin:auto"
                                src="https://www.bing.com/th?id=OIP.CsCEiIgcxJ54PXFJ-Ep5nQHaHa&w=150&h=150&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"
                                alt="">

        </div>
        {{-- Body --}}
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <img style="width: 110px; height: 110px; border-radius:150px"
                                src="https://www.bing.com/th?id=OIP.CsCEiIgcxJ54PXFJ-Ep5nQHaHa&w=150&h=150&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"
                                alt="">
                            <div class="mt-3">
                                <p>{{ $users->name }}</p>
                                <p>{{ $users->email }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                {!! Form::model($users, ['method'=>'PUT','route'=>['usuarios.update', $users->id]]) !!}
                @csrf
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
                        <div class="col-xs-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            {!! Form::password('password', array('class'=>'form-control p-3 bg-white shadow-sm rounded'))!!}
                        </div>
                        </div>
                        <div class="col-xs-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="confirm-password">Confirmar la contraseña</label>
                            {!! Form::password('confirm-password', array('class'=>'form-control bg-white shadow-sm rounded'))!!}
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
                </div>

            </div>

        </div>
    </div>
    </div>
    </div>
    @stop

    @section('css')

    @stop

    @section('js')

    @stop
