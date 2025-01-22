   
<?php $__env->startSection('content'); ?>   
<div class="card">   
    <div class="card-header">  
        <div class="row">  
            <div class="col-md"> 
                <h6>Profil User</h6> 
            </div> 
            <div class="col-md"> 
                <div class="float-end"> 
                    <a href="<?php echo e(route('profilEdit', $user->id)); ?>" class="btn btn-primary"> Edit Profil</a> 
                </div> 
            </div> 
        </div> 
    </div> 
        <div class="card-body"> 
            <div class="row"> 
            <div class="col-md-2">  
                <?php if($user->foto): ?>  
                    <img src="<?php echo e(asset('storage/user/'.$user->foto)); ?>" alt="" width="100%"> 
                <?php else: ?>  
            <img src="https://api.dicebear.com/9.x/notionists-neutral/svg?seed=Luis&eyes=variant01,variant03&nose=variant03"   
            width="100%"  
            alt="avatar">  
            <?php endif; ?>  
</div>  
<div class="col-md">  
    <table class="table">  
        <tr>  
            <td width="20%">Nama</td>  
            <td width="3%">:</td>  
            <td><?php echo e($user->nama); ?></td>  
        </tr>  
  
        <tr>  
            <td width="20%">Tanggal Lahir</td>  
            <td width="3%">:</td>  
            <td><?php echo e($user->tanggal_lahir); ?></td>  
        </tr>  
  
        <tr>  
            <td width="20%">Nomor Telepon</td>  
            <td width="3%">:</td>  
            <td><?php echo e($user->nomor_telepon); ?></td>  
        </tr> 
         
        <tr>  
            <td width="20%">Username</td>  
            <td width="3%">:</td>  
            <td><?php echo e($user->username); ?></td>  
        </tr> 
    </table>  
</div>  
     
</div>   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\praktikum_web2\resources\views/user/profil.blade.php ENDPATH**/ ?>