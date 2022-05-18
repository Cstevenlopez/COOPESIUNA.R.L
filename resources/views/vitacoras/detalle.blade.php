<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle bitácoras</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Actividad</h4>
                <p>{{ $vitacora->actividad }}</p>

            <div class="card" style="width: 100%">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <h5>Objetivos:</h5>
                    <p>{{ $vitacora->objetivo }}</p>
                  </li>
                  <li class="list-group-item">
                    <h5>Temas abordados</h5>
                    <p>{{$vitacora->temas_abordados}}</p>
                  </li>
                  <li class="list-group-item">
                    <h5>Dificultades</h5>
                    <p>{{ $vitacora->dificultades }}</p>
                  </li>
                  <li class="list-group-item">
                    <h5>Soluciones</h5>
                    <p>{{$vitacora->soluciones}}</p>
                  </li>
                  <li class="list-group-item">
                    <h5>Recomendaciones</h5>
                    <p>{{ $vitacora->recomendaciones }}</p>
                  </li>
                  <li class="list-group-item">
                    <h5>Fecha de visita</h5>
                    <p>{{ $vitacora->fecha }}</p>
                  </li>
                  <li class="list-group-item">
                    <h5>Siguiente visita</h5>
                    <p>{{ $vitacora->siguiente_visita }}</p>
                  </li>
                  <li class="list-group-item">
                    <h5>Productor al que se realiza la asistencia</h5>
                    <p>{{ $vitacora->productor->nombres }}</p>
                  </li>
                  <li class="list-group-item">
                    <h5>Usuario que realiza la asistencia</h5>
                    <p>{{ $vitacora->users->name }}</p>
                  </li>
                </ul>
              </div>
        </div>
    </div>
</body>
</html>

