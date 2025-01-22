 
<?php $__env->startSection('content'); ?> 
    <div class="card"> 
    <div class="card-header"> 
        Sign In 
    </div> 
    <div class="card-body"> 
    <form action="<?php echo e(route('loginstore')); ?>" method="post"> 
    <?php echo csrf_field(); ?> 
    <div class="form-group"> 
        <label for="">username</label> 
        <input type="text" name="username" class="form-control"> 
    </div> 
    <div class="form-group"> 
        <label for="">password</label> 
        <input type="password" name="password" class="form-control"> 
    </div> 
    <hr> 
    <button type="submit" class="btn btn-primary">Login</button></form> <br> 
    <a href="<?php echo e(route('register')); ?>">belum punya akun? daftar disini.</a> 
</form> 
</div> 
</div> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\praktikum_web2\resources\views/login.blade.php ENDPATH**/ ?>