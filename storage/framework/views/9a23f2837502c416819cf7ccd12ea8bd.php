<?php if(session()->has('message')): ?>
    
    <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        <i class="fa-solid fa-triangle-exclamation mb-2"></i> <?php echo e(session()->get('message')); ?>

    </div>

<?php endif; ?><?php /**PATH D:\xampp\htdocs\Laravel\IVSS-Ciudadanos\resources\views/layout/alternative-message.blade.php ENDPATH**/ ?>