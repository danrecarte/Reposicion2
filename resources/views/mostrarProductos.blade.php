<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Producto</title>
</head>
<body>
    <div class="container">
    <h1>Mantenimiento Producto</h1>
    <br>
    <a class="btn btn-success" href="{{route('nuevoProducto')}}">Agregar Nuevo</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                
            </tr>
        </thead>
        <tbody>
            
                @foreach ($productos as $producto)

                <tr>
                    <td>{{$producto->id}}</td>
                    <td>{{$producto->descripcion}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->stock}}</td>
                    <td>{{$producto->pagaisv}}</td>

                </tr>
                    
                @endforeach
            
            
        </tbody>

    </table>
    </div>
</body>
</html>