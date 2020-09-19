<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anthony Trillo</title>

  <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
  <ul class="menu">
    <li><a href="<?php echo e(route('home')); ?>">Inicio</a></li>
    <li><a href="<?php echo e(route('about')); ?>">Acerca de</a></li>
    <li><a href="<?php echo e(route('project')); ?>">Proyectos</a></li>
    <li><a href="<?php echo e(route('blog.index')); ?>">Blog</a></li>
    <li><a href="<?php echo e(route('contact')); ?>">Contactos</a></li>
  </ul>

  <div id="app">
    <?php echo $__env->yieldContent('content'); ?>
  </div>

</body>
</html><?php /**PATH D:\Desktop\cv_laravel\resources\views/layout.blade.php ENDPATH**/ ?>