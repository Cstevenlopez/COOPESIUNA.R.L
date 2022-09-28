@extends('adminlte::page')

@section('title', 'Administrar usuarios')

@section('content_header')
    <div class="card">
        <div class="card-body justify-content-between">
            <h1 style="float: left" class="text-gray">Administrar usuarios</h1>
            <img style="float: right" src="/vendor/adminlte/dist/img/Logo.png" class="img-fluid mt-2" width="200px"
                alt="Responsive imagen">
        </div>
    </div>
@stop

@section('content')

    <!-- CRUD DE USUARIOS -->

    <div class="card shadow">
<div class="card-header">
    <div class="card-title">
        <b>Usuarios | Listado</b>
    </div>
    @can('crear-usuarios')
    <a style="float: right" href="{{ route('usuarios.create') }}" class="btn btn-primary">
        <span><i class="fas fa-user-plus"></i> Agregar nuevo usuario</span>
    </a>
    @endcan
</div>
<div class="card-body">
<table id="usuarios" class="table" style="width:100%">
    <thead class="bg-primary">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombres</th>
            <th scope="col">Email</th>
            <th scope="col">Rol</th>
            {{-- <th scope="col">Foto</th> --}}
            <th scope="col">Última conexion</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if (!empty($user->getRoleNames()))
                        @foreach ($user->getRoleNames() as $rolName)
                            <h5><span style="font-size: 12px" class="badge badge-dark">{{ $rolName }}</span></h5>
                        @endforeach
                    @endif
                </td>
                <td>
                    {{ Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}
                </td>
                <td>
                    @if (Cache::has('user-is-online-' . $user->id))
                        <span class="badge badge-success">En línea</span>
                    @else
                        <span style="color:white;" class="badge badge-secondary">Offline</span>
                    @endif
                </td>
                {{-- <td><img src="{{$user->foto}}" alt="" class="img-fluid img-thumbnail" style="height:45px;"></td> --}}
                <td style="width: 15%">
                    @can('editar-usuarios')
                    <a class="btn btn-warning text-white"
                    href="{{ route('usuarios.edit', $user->id) }}"><i class="fas fa-user-edit"></i></a>
                    @endcan

                    @can('borrar-usuarios')
                    {!! Form::open(['method' => 'DELETE', 'route' => ['usuarios.destroy', $user->id], 'class' => 'formulario-eliminar', 'style' => 'display:inline']) !!}
                    {!! Form::button('<i class="fa fa-user-times"></i>', ['class' => 'btn btn-danger', 'type' => 'submit']) !!}
                    {!! Form::close() !!}
                    @endcan
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.8/css/responsive.bootstrap4.min.css">
@stop

@section('js')

<script src="https://unpkg.com/scrollreveal"></script>
<script>
    let sr = ScrollReveal({
    duration: 2500,
    distance: "60px",
});

// sr.reveal(".navbar",{delay: 600});
sr.reveal(".card",{origin: "left", delay: 200});

</script>

    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.8/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.8/js/responsive.bootstrap4.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Eliminar --}}
    @if (session('eliminar') === 'ok')
        <script>
            Swal.fire(
                'Eliminado!',
                'El usuario ha sido eliminado correctamente.',
                'success'
            )
        </script>
    @endif

    {{-- Guarda --}}
    @if (session('guardar') === 'ok')
        <script>
            Swal.fire(
                'Guardado!',
                'El usuario ha sido guardado correctamente.',
                'success'
            )
        </script>
    @endif

    {{-- Editar --}}
    @if (session('editar') === 'ok')
        <script>
            Swal.fire(
                'Modificado!',
                'El usuario ha sido modificado correctamente.',
                'success'
            )
        </script>
    @endif

    {{-- Mensaje de confirmacion para eliminar --}}
    <script>
        $(document).on("click", '.formulario-eliminar', function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Estas seguro?',
                text: "No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, borrar esto!'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })

        });
    </script>

    <script>
        $(document).ready(function() {
            $('#usuarios').DataTable({
                "lengthMenu": [
                    [5, 10, 50, -1],
                    [5, 10, 50, "Todos"]
                ],
                responsive: true,
                autoWidth: false
            });
        });
    </script>
@stop
