<!DOCTYPE html>
<html lang="en">
<head>
    <title>Resultados búsqueda | IVSS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo asset('css/showstyles.css'); ?>">
    
    <link href="assets/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="assets/fontawesome/css/brands.css" rel="stylesheet">
    <link href="assets/fontawesome/css/solid.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark ticky-top bg-body-tertiary" >
        <div class="logo">
            <a><img src="assets/membrete2.jpg" width="1900" height="100" alt=""></a>
        </div>  
    </nav>

    <section>    
        
        <div class="container-fluid page-body-wrapper" align="center">

            <?php echo $__env->make('layout.success-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->make('layout.error-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <br>
        
            <table class="content-table">

                <thead>
            
                    <tr>
                
                        <th scope="col">Cédula de Identidad</th>
                        <th scope="col">Primer Nombre</th>
                        <th scope="col">Segundo Nombre</th>
                        <th scope="col">Primer Apellido</th>
                        <th scope="col">Segundo Apellido</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Estado Civil</th>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col">Fecha de fallecimiento</th>
                        
                
                    </tr>
            
                </thead>
            
                <tbody>
            
                    <tr>
                
                        <?php $__currentLoopData = $ciudadanos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ciudadano): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($ciudadano->id_ciudadano); ?></td>
                                <td><?php echo e($ciudadano->primer_nombre); ?></td>
                                <td><?php echo e($ciudadano->segundo_nombre); ?></td>
                                <td><?php echo e($ciudadano->primer_apellido); ?></td>
                                <td><?php echo e($ciudadano->segundo_apellido); ?></td>
                                <td><?php echo e($ciudadano->sexo); ?></td>
                                <td><?php echo e($ciudadano->id_estado_civil); ?></td>
                                <td><?php echo e(\Carbon\Carbon::parse($ciudadano->fecha_nacimiento)->format('d-m-Y')); ?></td>
                                <td><?php echo e($ciudadano->fecha_fallecimiento); ?></td>
                                
                            </tr>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                    </tr>
            
                </tbody>

            </table>
            
            

            <div class="back">
                <p><a href="<?php echo e(url('/')); ?>">Regresar</a></p>
            </div>

        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html><?php /**PATH D:\xampp\htdocs\Laravel\IVSS-Ciudadanos\resources\views/show.blade.php ENDPATH**/ ?>