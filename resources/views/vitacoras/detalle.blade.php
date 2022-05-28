<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle bitácoras</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    {{--
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600&display=swap" rel="stylesheet">
    --}}
</head>
{{-- <style>
    * {
        font-family: 'Nunito', sans-serif;
    }
</style> --}}

<body>
    <header>
        <p style="font-size: 12px;">Fecha:
            <?php echo $fecha; ?>
        </p>

        <div class="justify-content-between">
            <img src="<?php echo $pic3; ?>" width="100px" height="50px" alt="Onudi_logo">
            <img style="margin-left: 50px" src="<?php echo $pic2; ?>" width="125px" height="20px" alt="procacao_logo">
            <img style="margin-left: 50px" src="<?php echo $pic; ?>" width="100px" height="30px" alt="copesiuna_logo">
            <img style="margin-left: 60px" src="<?php echo $pic4; ?>" width="200px" height="90px" alt="logo">
        </div>
        <div class="mt-2">
            <p style="font-weight: bold;" class="text-center">Proyecto: Mejoramiento de las capacidades organizativas y
                productivas de los productores y productoras del cacao en el Triángulo Minero </p>
            <p style="font-weight: bold;" class="text-center">PROCACAO Nicaragua Fase II (2019-2022)</p>
            <p style="font-weight: bold;" class="text-center">NIC- 180069</p>
            <p style="font-weight: bold;" class="text-center">BITACORA DE ASISTENCIA TECNICA A PRODUCTORES</p>
        </div>
    </header>
    <main class="mt-1">
        <div>
        </div>
        <section>
            <p style="font-weight:bold" class="bg-info p-1 rounded text-white">Detalles del productor</p>
            <div class="">
                <table style="width: 100%;" class="table table-sm table-striped table-borderless">
                    <tr>
                        <th style="color: #333;">Comunidad y municipio</th>
                        <td>{{ $vitacoras->productor->comunidad }}</td>
                    </tr>
                    <tr>
                        <th style="color: #333;">Nombre del productor</th>
                        <td>{{ $vitacoras->productor->nombres }}</td>
                    </tr>
                    <tr>
                        <th style="color: #333;">Apellido del productor</th>
                        <td>{{ $vitacoras->productor->apellidos }}</td>
                    </tr>
                    <tr>
                        <th style="color: #333;">Numero de cedula</th>
                        <td>{{ $vitacoras->productor->numero_cedula }}</td>
                    </tr>
                    <tr>
                        <th style="color: #333;">Numero de teléfono</th>
                        <td>{{ $vitacoras->productor->numero_telefono }}</td>
                    </tr>
                </table>
            </div>
        </section>
        <section class="mt-2">
            <p style="font-weight:bold" class="bg-info p-1 rounded text-white">Detalles de la asistencia</p>
            <table class="table table-sm table-bordered table-striped table-borderless">
                <thead></thead>
                <tr>
                    <th>Actividad</th>
                    <td>{{ $vitacoras->actividad }}</td>
                </tr>
                <tr>
                    <th>Objetivo</th>
                    <td>{{ $vitacoras->objetivo }}</td>
                </tr>
                <tr>
                    <th>Temas abordados</th>
                    <td>{{ $vitacoras->temas_abordados }}</td>
                </tr>
                <tr>
                    <th>Dificultades</th>
                    <td>{{ $vitacoras->dificultades }}</td>
                </tr>
                <tr>
                    <th>Soluciones</th>
                    <td>{{ $vitacoras->soluciones }}</td>
                </tr>
                <tr>
                    <th>Recomendaciones</th>
                    <td>{{ $vitacoras->recomendaciones }}</td>
                </tr>
            </table>
        </section>
        <section class="mt-5">
            <div class="justify-content-between">
                <div style="float: left;">
                    <p>Firma del Técnico</p>
                    <br>
                    <p>___________________</p>
                </div>
                <div style="float: right;">
                    <p>Firma del Productor</p>
                    <br>
                    <p>___________________</p>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
