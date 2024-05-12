<?php if(session('status')): ?>
    <div class="alert alert-success">
        <i class="fa-solid fa-check mb-2"></i> <?php echo e(session('status')); ?>

        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
    </div>
<?php endif; ?><?php /**PATH D:\xampp\htdocs\Laravel\IVSS-Ciudadanos\resources\views/layout/success-message.blade.php ENDPATH**/ ?>