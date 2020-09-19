

<?php $__env->startSection('content'); ?>

  <h1><?php echo e($post->title); ?></h1>

  <?php echo e($post->body); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Desktop\cv_laravel\resources\views/post.blade.php ENDPATH**/ ?>