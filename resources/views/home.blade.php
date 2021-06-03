@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')

@stop

@section('content')
<div class="small-box bg-info w-25">
<div class="inner">
    <h3>1</h3>
    <p>Usuarios</p>
</div>
<div class="icon">
    <i class="fas fa-user-plus"></i>
</div>
<a href="/usuarios" class="small-box-footer">
    Ver registros <i class="fas fa-arrow-circle-right"></i>
</a>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop