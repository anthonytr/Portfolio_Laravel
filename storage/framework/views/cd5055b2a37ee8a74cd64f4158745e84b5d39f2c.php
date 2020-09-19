

<?php $__env->startSection('content'); ?>

  <h1>Contenido de blog</h1>

  <ul>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li>
        <a href="<?php echo e(route('blog.show', $post->slug)); ?>">
          <?php echo e($post->title); ?>

        </a>
      </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </ul>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Desktop\cv_laravel\resources\views/blog.blade.php ENDPATH**/ ?>