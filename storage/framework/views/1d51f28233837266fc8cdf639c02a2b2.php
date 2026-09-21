<!doctype html>
<html>
<body>
<?php $__currentLoopData = [1,2,3]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p><?php echo e($item); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>
<?php /**PATH C:\Users\PC\Documents\Cursos\Projetos\laravel-studies\studies\resources\views\temp_test.blade.php ENDPATH**/ ?>