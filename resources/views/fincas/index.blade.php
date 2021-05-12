@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Administrar fincas</h1>
@stop

@section('content')
<a href="/fincas/create" class="btn btn-dark mb-4">Añadir otra finca</a>

<table id="finc" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="thead-dark text-white">
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Legalidad</th>  
            <th scope="col">Comunidad.</th>
            <th scope="col">Mpio.</th>
            <th scope="col">Dpto.</th>
            <th scope="col">Pais</th>
            <th scope="col">Energia</th>
            <th scope="col">Agua</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($fincas as $fincas)
        <tr>
            <td>{{$fincas->nombre}}</td>
            <td>{{$fincas->legalidad}}</td>
            <td>{{$fincas->comunidad}}</td>
            <td>{{$fincas->municipio}}</td>
            <td>{{$fincas->departamento}}</td>
            <td>{{$fincas->pais}}</td>
            <td>{{$fincas->disponibilidad_energia}}</td>
            <td>{{$fincas->disponibilidad_agua}}</td>
            <td>
            <form action="{{ route('fincas.destroy',$fincas->id)}}" method="POST">
            <a href="/fincas/{{$fincas->id}}/edit" class="btn btn-success">Editar</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger formulario-eliminar">Eliminar</button>
            </form>
            </td>
        </tr>    
        @endforeach
    </tbody>
</table>
@stop

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script> 
<script>
$(document).ready(function() {
    $('#finc').DataTable({
        "lengthMenu":[[5,10,50,-1], [5,10,50,"All"]]
    });
} );
</script>
@stop