<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            Register User
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('registerstore')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="">Nama</label>
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
                <hr>
                <button type="submit" class="btn btn-primary">register</button> <br>
                <a href="<?php echo e(route('login')); ?>" class="nav-link mt-2">Kembali ke halaman login</a>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\praktikum_web2\resources\views/register.blade.php ENDPATH**/ ?>