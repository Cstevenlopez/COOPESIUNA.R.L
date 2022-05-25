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
                    <div class="card bg-c-green order-card">
                        <div class="card-block">
                            <h5>Productores</h5>
                            @php
                            use App\Models\Productor;
                            $count_productor = Productor::count();
                            @endphp
                            <h2 class="text-right"><i class="fab fa-product-hunt f-left"></i><span>{{$count_productor}}</span></h2>
                            <p class="m-b-0 text-right"><a class="text-white" href="/productores">Ver más</a></p>
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
                        <p class="m-b-0 text-right"><a class="text-white" href="/vitacoras">Ver más</a></p>
                    </div>
                </div>
                </div>
                </div>

            </div>
        </div>
    </div>
    </div>

    <div class="card shadow">
        <div class="card-header bg-light">
            <h5>Últimas asistencias técnicas</h5>
            <a class="btn  btn-link btn-sm " href="{{ route('vitacoras.index') }}">
                <span><i class="fas fa-angle-double-right"></i> Ver todas las bitacoras</span>
            </a>
        </div>
        <div class="card-body">
            <table class="table table-responsive-sm">
                <thead class=" bg-c-blue text-white">
                  <tr>
                    <th>ID</th>
                    <th >Nombre del productor</th>
                    <th >Actividad</th>
                    <th >fecha de visita</th>
                    <th >Usuario</th>
                  </tr>
                </thead>
                @foreach ($bitacoras as $bitacora)


                <tbody>
                  <tr>
                      <td>{{ $bitacora->id }}</td>
                    <td>{{ $bitacora->productor->nombres}}</td>
                    <td>{{ $bitacora->actividad }}</td>
                    <td>{{ $bitacora->fecha }}</td>
                    <td>{{ $bitacora->users->name }}</td>
                  </tr>
                </tbody>
                @endforeach
              </table>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@stop

@section('js')

@stop
