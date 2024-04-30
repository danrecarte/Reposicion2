<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proveedor</title>
</head>
<body>
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Agregar Proveedor</h2>
                <br>
                


                <form method="POST" action="<?php echo e(route('agregarProveedor')); ?>">
                    <?php echo csrf_field(); ?>

                
    
                    <div class="form-group">
                        <label for="metros">Nombre</label>
                        <input type="text"class="form-control" name="nombre"/>
                    </div>
                    <div class="form-group">
                        <label for="color">Fecha Registro</label>
                        <input type="date" class="form-control" name="fecharegistro" />
                    </div>

                    <div class="form-group">
                        <label for="color">Telefono</label>
                        <input type="text" class="form-control" name="telefono" />
                    </div>

                    <div class="form-group">
                        <label for="color">correo</label>
                        <input type="text" class="form-control" name="correo" />
                    </div>
                    
                    <br>
                    <div class="form-group">
                        <a class="btn btn-warning" href="<?php echo e(route('mostrarProveedor')); ?>">Volver</a>
                        <button type="submit" class="btn btn-success"  >Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\wamp64\www\reposicion\resources\views/agregarProveedores.blade.php ENDPATH**/ ?>