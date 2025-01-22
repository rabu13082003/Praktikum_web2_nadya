 
<?php $__env->startSection('content'); ?> 
<div class="card"> 
    <div class="card-header">
         Edit Profil
        </div>
    <div class="card-body">
        <form action="<?php echo e(route('profilUpdate',$user->id)); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <div class="form-group mt-3">
        <label for="">Nama</label>
        <input type="text" name="nama" class="form-control" value="<?php echo e($user->nama); ?>">
    </div>
    <div class="form-group mt-3">
        <label for="">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo e($user->tanggal_lahir); ?>">
    </div>
    <div class="form-group mt-3">
        <label for="">Nomor Telepon</label>
        <input type="text" name="nomor_telepon" class="form-control" value="<?php echo e($user->nomor_telepon); ?>">
    </div>
    <div class="form-group mt-3">
        <label for="">Foto</label>
        <input type="file" name="foto" class="form-control">
        <small> Isi jika ingin merubah foto Profil</small>
    </div>
    <div class="form-group mt-3">
        <label for="">Username</label>
        <input type="text" name="username" class="form-control">
        <small> Isi jika ingin merubah Username</small>
    </div>
    <div class="form-group mt-3">
        <label for="">Password</label>
        <input type="password" name="password" class="form-control">
        <small> Isi jika ingin merubah Password</small>
    </div>

    <div class="float-end mt-3">
        <a href="<?php echo e(route('profil')); ?>" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Update Data</button>
</div>
</form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\praktikum_web2\resources\views/user/profil_edit.blade.php ENDPATH**/ ?>