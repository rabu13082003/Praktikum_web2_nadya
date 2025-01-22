 
<?php $__env->startSection('content'); ?> 
<div class="card"> 
    <div class="card-header"> 
        Register User 
    </div> 
    <div class="card-body"> 
    <form action="<?php echo e(route('registerstore')); ?>" method="post"> 
        <?php echo csrf_field(); ?> 
    <div class="form-group"> 
        <label for="">name</label> 
        <input type="text" name="nama" class="form-control"> 
    </div> 
    <div class="form-group"> 
        <label for="">username</label> 
        <input type="text" name="username" class="form-control"> 
    </div> 
    <div class="form-group"> 
        <label for="">password</label> 
        <input type="password" name="password" class="form-control"> 
    </div> 
    <button type="submit" class="btn btn-primary">register</button></form> <br> 
    <a href="<?php echo e(route('register')); ?>" class="nav-link nt-2">kembali kehalaman login</a> 
</form> 
</div> 
</div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\praktikum_web2\resources\views/register.blade.php ENDPATH**/ ?>