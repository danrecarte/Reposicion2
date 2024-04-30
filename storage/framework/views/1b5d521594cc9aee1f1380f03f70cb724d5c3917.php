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
    <a class="btn btn-success" href="<?php echo e(route('nuevoEmpleado')); ?>">Agregar Nuevo</a>
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
            
                <?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr>
                    <td><?php echo e($empleado->idprestamo); ?></td>
                    <td><?php echo e($empleado->nombre); ?></td>
                    <td><?php echo e($empleado->apellido); ?></td>
                    <td><?php echo e($empleado->fechaingreso); ?></td>
                    <td><?php echo e($empleado->salario); ?></td>

                </tr>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            
        </tbody>

    </table>
    </div>
</body>
</html><?php /**PATH C:\wamp64\www\reposicion\resources\views/mostrarEmpleados.blade.php ENDPATH**/ ?>