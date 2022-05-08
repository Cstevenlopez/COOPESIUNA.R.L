@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')

@stop

@section('content')

<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <div class="row">
                <div class="col-md-4 col-xl-4">
                <div class="card bg-c-blue order-card">
                    <div class="card-block">
                        <h5>Usuarios</h5>
                        @php
                        use App\Models\User;
                        $count_users = User::count();
                        @endphp
                        <h2 class="text-right"><i class="fas fa-users f-left"></i><span>{{$count_users}}</span></h2>
                        <p class="m-b-0 text-right"><a class="text-white" href="/usuarios">Ver más</a></p>
                    </div>
                </div>
                </div>

                <div class="col-md-4 col-xl-4">
                    <div class="card bg-c-pink order-card">
                        <div class="card-block">
                            <h5>Productores</h5>
                            @php
                            use App\Models\Productor;
                            $count_productor = Productor::count();
                            @endphp
                            <h2 class="text-right"><i class="fab fa-product-hunt f-left"></i><span>{{$count_productor}}</span></h2>
                            <p class="m-b-0 text-right"><a class="text-white" href="/comunidades">Ver más</a></p>
                        </div>
                    </div>
                    </div>

                <div class="col-md-4 col-xl-4">
                <div class="card bg-c-pink order-card">
                    <div class="card-block">
                        <h5>Bitàcoras</h5>
                        @php
                        use App\Models\Vitacora_asistencia;
                        $count_vitacoras = Vitacora_asistencia::count();
                        @endphp
                        <h2 class="text-right"><i class="fas fa-file-alt f-left"></i><span>{{$count_vitacoras}}</span></h2>
                        <p class="m-b-0 text-right"><a class="text-white" href="/comunidades">Ver más</a></p>
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
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">
@stop

@section('js')

@stop
