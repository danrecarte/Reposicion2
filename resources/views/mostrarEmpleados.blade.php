<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empleados</title>
</head>
<body>
    <div class="container">
    <h1>Mantenimiento empleados</h1>
    <br>
    <a class="btn btn-success" href="{{route('nuevoEmpleado')}}">Agregar Nuevo</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de ingreso</th>
                <th>Salario</th>
                
            </tr>
        </thead>
        <tbody>
            
                @foreach ($empleados as $empleado)

                <tr>
                    <td>{{$empleado->idprestamo}}</td>
                    <td>{{$empleado->nombre}}</td>
                    <td>{{$empleado->apellido}}</td>
                    <td>{{$empleado->fechaingreso}}</td>
                    <td>{{$empleado->salario}}</td>

                </tr>
                    
                @endforeach
            
            
        </tbody>

    </table>
    </div>
</body>
</html>