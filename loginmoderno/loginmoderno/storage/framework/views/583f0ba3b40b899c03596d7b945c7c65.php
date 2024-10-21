<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        <?php echo e(__('cerrar sesión')); ?>

    </a>

    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
        <?php echo csrf_field(); ?>
    </form>
</div>

<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Research Assistant</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/estiloss.css')); ?>">
</head>

<body>
    <div class="cabecera">
        <h1>Virtual <span class="highlight">Research Assistant</span></h1>
    </div>
    <div class="container">
        <img src="<?php echo e(asset('assets/images/iberov2.png')); ?>"  class="iberov">
        <img src="<?php echo e(asset('assets/images/uNIVERSIDA TRES CULTURAS.png')); ?>" class="utc">
    </div>
    
    <div class="buttons-container">           
                <a href="<?php echo e(url('/crear')); ?>" class="btn btn-blue">
                    <img src="<?php echo e(asset('assets/images/iconsformulacion.png')); ?>" alt="Icono Check">
                    <span>Crear Proyecto</span>
                </a>  
                <a href="<?php echo e(url('/Realidad')); ?>" class="btn btn-orange">
                    <img src="<?php echo e(asset('assets/images/iconsformulacion.png')); ?>" alt="Icono Check">
                    <span>Formulación Proyecto</span>
                </a>                
                <a href="/reporte-avance" class="btn btn-green">
                    <img src="<?php echo e(asset('assets/images/icons.reporte.png')); ?>" alt="Icono Reporte">
                    <span>Reporte Último Avance</span>
                </a>          
    </div>

            
        
    </div>
</body>

</html><?php /**PATH C:\Users\User\Documents\GitHub\Proyecto\loginmoderno\loginmoderno\resources\views/home.blade.php ENDPATH**/ ?>