<?php if($errors->any()): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert">
            <i class="fa-solid fa-triangle-exclamation mb-2"></i> <?php echo e($error); ?>

            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH D:\xampp\htdocs\Laravel\IVSS-Ciudadanos\resources\views/layout/error-message.blade.php ENDPATH**/ ?>