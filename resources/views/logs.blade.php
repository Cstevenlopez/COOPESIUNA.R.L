
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Exportar a PDF</title>
</head>
<body>
       	<img style="width:150px" class="mb-3" src="data:image/jpeg;base64,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afvPYnyElrRwqVu2hXGr3XvkqsnbyD2nt5UY0qI56tbqqein3qj7kHzmhMFiMQoatiAlNhcU8PoCPvVj0iPhtOXZFdaDNSIWnTXMjgIcqvcZGZ7dIOpJux3+ki5PgQlaO7Le/j55EjsrZXSGIruKtYjokdSmp4U1/wDLeZL4mutNS7kKqi7E7gBK42I/J0INTJQYg0QA3Om9700Qi51tY8A1raXm2js+pimFXFrlpqc1KhfiNz1T7Tfd3CE6XJX9394nIzotWKv7vbx4bct3zBUmxdRa9VStFDmoU23sf1rj+EecssRJpULox1REROkhERAEREAREQBERAEREAREQBERAEREAREQCDxewhnNXDuaNU9YgXR/jTcfEWMisVX5tcuIoCgcyMK1Jc9IsjBlzgDMouNxHHfLjPkg4LIqlYr+W725fDT3lWx1JsQDVR1e68ygpNmCrUZecdm01ygaW0txvPtfDc1WSmjdY1KrKGNMABUpqq2v8VuJBMkMXybw7tnCFH9+kxRvPLofMGaG2RiF6mLzAbhXpK/+pcpkXFlThJX05NdadTTleoa5Ch8rMlPMtIrdUUBWJGa+ck9k5qKIxpBKSjOta4elTDK1PKArWW2jE7t+k6Ds7EjN9ThSW3lWqISbg33HW4BvMkw+JBUjDUQUzZTz76Zut7GpPG85fmcpJ4p+u1PZsrtMaVVmo4dqVkatRYnIFHS5sMDoODA+sywteqXou4zhgwWsg0KsmazJvRrquouDru3TKjgcUCSiYWle+oFRiL6mw0GpmabFrsAKuLa3u0UWkvhfpN852/YzqU7scuF1Nu2mSqceHJwiLmqoiMqsyPoUbo5gii5OYXuPe11vabFxVWu5fC0TTzAKa9a6gqCbZKW9jqbFrb5J4HYGHpHMlMF/fcl3/ea5kpadUXgTjZSpRui2L5eHkk9+BFbN2IlJjUYmrWO+q+reCjci9wktESaSWBbGKiqIRETpIREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREA//2Q==" alt="">
            <p class="ml-3 bold">Coopesiuna.R.L</p>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Actividad</h4>
                @foreach ($logs as $log)
                    <p>{{ $log->actividad }}</p>

                <div class="card" style="width: 100%">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">
                        <h5>Objetivos:</h5>
                        <p>{{ $log->objetivo }}</p>
                      </li>
                      <li class="list-group-item">
                        <h5>Temas abordados</h5>
                        <p>{{$log->temas_abordados}}</p>
                      </li>
                      <li class="list-group-item">
                        <h5>Dificultades</h5>
                        <p>{{ $log->dificultades }}</p>
                      </li>
                      <li class="list-group-item">
                        <h5>Soluciones</h5>
                        <p>{{$log->soluciones}}</p>
                      </li>
                      <li class="list-group-item">
                        <h5>Recomendaciones</h5>
                        <p>{{ $log->recomendaciones }}</p>
                      </li>
                      <li class="list-group-item">
                        <h5>Fecha de visita</h5>
                        <p>{{ $log->fecha }}</p>
                      </li>
                      <li class="list-group-item">
                        <h5>Siguiente visita</h5>
                        <p>{{ $log->siguiente_visita }}</p>
                      </li>
                      <li class="list-group-item">
                        <h5>Productor al que se realiza la asistencia</h5>
                        <p>{{ $log->productor->nombres }}</p>
                      </li>
                      <li class="list-group-item">
                        <h5>Usuario que realiza la asistencia</h5>
                        <p>{{ $log->users->name }}</p>
                      </li>
                    </ul>
                  </div>
                  @endforeach
            </div>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
