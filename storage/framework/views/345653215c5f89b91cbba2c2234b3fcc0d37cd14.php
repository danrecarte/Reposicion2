<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proveedores</title>
</head>
<body>
    <div class="container">
    <h1>Mantenimiento Proveedor</h1>
    <br>
    <a class="btn btn-success" href="<?php echo e(route('nuevoProveedor')); ?>">Agregar Nuevo</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                
            </tr>
        </thead>
        <tbody>
            
                <?php $__currentLoopData = $proveedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proveedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr>
                    <td><?php echo e($proveedor->idproveedor); ?></td>
                    <td><?php echo e($proveedor->nombre); ?></td>
                    <td><?php echo e($proveedor->fecharegistro); ?></td>
                    <td><?php echo e($proveedor->telefono); ?></td>
                    <td><?php echo e($proveedor->correo); ?></td>

                </tr>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            
        </tbody>

    </table>
    </div>
</body>
</html><?php /**PATH C:\wamp64\www\reposicion\resources\views/mostrarProveedores.blade.php ENDPATH**/ ?>