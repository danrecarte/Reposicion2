<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empleado</title>
</head>
<body>
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Agregar Empleado</h2>
                <br>
                


                <form method="POST" action="<?php echo e(route('agregarEmpleado')); ?>">
                    <?php echo csrf_field(); ?>

    
                    <div class="form-group">
                        <label for="metros">Fecha de Igreso</label>
                        <input type="date"class="form-control" value = "" name="fechaingreso" />
                    </div>
                    <div class="form-group">
                        <label for="color">Numero</label>
                        <input type="text" class="form-control" name="nombre" />
                    </div>

                    <div class="form-group">
                        <label for="color">Apellido</label>
                        <input type="text" class="form-control" name="apellido" />
                    </div>

                    <div class="form-group">
                        <label for="color">Salario</label>
                        <input type="number" class="form-control" name="salario" />
                    </div>
                    
                    <br>
                    <div class="form-group">
                        <a class="btn btn-warning" href="<?php echo e(route('mostrarEmpleado')); ?>">Volver</a>
                        <button type="submit" class="btn btn-success"  >Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\wamp64\www\reposicion\resources\views/agregarEmpleados.blade.php ENDPATH**/ ?>