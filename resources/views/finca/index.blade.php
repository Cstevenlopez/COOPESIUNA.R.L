@extends('layouts.plantillabasef')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
@endsection

@section('contenido')
<h4>Administrar fincas</h4>
<a href="fincas/create" class="btn btn-primary mb-4">Añadir otra finca</a>

<table id="finc" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID_finca</th>
            <th scope="col">Nombre</th>
            <th scope="col">Legalidad</th>
            <th scope="col">CC.</th>
            <th scope="col">Mpio.</th>
            <th scope="col">Dpto.</th>
            <th scope="col">Pais</th>
            <th scope="col">Lat.</th>
            <th scope="col">Long.</th>
            <th scope="col">Alt</th>
            <th scope="col">Disp.de energia</th>
            <th scope="col">Disp.de agua</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($fincas as $fincas)
        <tr>
            <td>{{$fincas->id_finca}}</td>
            <td>{{$fincas->nombre}}</td>
            <td>{{$fincas->legalidad}}</td>
            <td>{{$fincas->comunidad}}</td>
            <td>{{$fincas->municipio}}</td>
            <td>{{$fincas->departamento}}</td>
            <td>{{$fincas->pais}}</td>
            <td>{{$fincas->latitud}}</td>
            <td>{{$fincas->longitud}}</td>
            <td>{{$fincas->altitud}}</td>
            <td>{{$fincas->disponibilidad_energia}}</td>
            <td>{{$fincas->disponibilidad_agua}}</td>
            <td>
            <form action="{{ route('fincas.destroy',$fincas->id)}}" method="POST">
            <a href="/fincas/{{$fincas->id}}/edit" class="btn btn-primary">Editar</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
            </td>
        </tr>    
        @endforeach
    </tbody>
</table>

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
@endsection
@endsection


