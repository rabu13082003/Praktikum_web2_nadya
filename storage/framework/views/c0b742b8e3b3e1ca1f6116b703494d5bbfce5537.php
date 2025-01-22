 
<?php $__env->startSection('content'); ?> 
<div class="card"> 
    <div class="card-header"> 
        <p>Add New Post</p> 
    </div> 
    <div class="card-body"> 
    <?php if(Auth::check()): ?> 
        <form action="<?php echo e(route('postStore')); ?>" method="post"> 
            <?php echo csrf_field(); ?> 
            <div class="form-group"> 
                <label for="">Title</label> 
                <input type="text" name="title" id="title" class="form-control" required> 
            </div> 
            <div class="form-group"> 
                <label for="">body</label> 
                <textarea name="body" id="body" class="form-control" required></textarea> 
            </div> 
            <div class="text-end mt-3"> 
                <button type="submit" class="btn btn-primary">Save Post</button> 
            </div> 
        </form> 
        <?php else: ?> 
        <p> Please login in to create a post </p> 
        <?php endif; ?> 
    </div> 
</div> 
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
    <div class="card mb-3"> 
        <div class="card-body"> 
            <h4 class="m-0"><?php echo e($post->title); ?></h4> 
            <small class="m-0"> 
                posted by <?php echo e($post->user->nama); ?> on <?php echo e(Carbon\carbon::parse($post->created_at)->diffForHumans()); ?> 
            </small> 
            <p class="mt-2"><?php echo e($post->body); ?></p> 
        </div> 
        <div class="card"> 
            <div class="text-end"> 
                <?php if(Auth::check()): ?> 
                <?php if(Auth::user()->id == $post->user_id): ?> 
                <form action="<?php echo e(route('postDelete', $post->id)); ?>" method="post"> 
                    <?php echo csrf_field(); ?> 
                    <?php echo method_field('delete'); ?> 
                    <button type="submit" class="btn btn-danger"> Delete</button> 
                </form> 
                <?php endif; ?> 
                <?php endif; ?> 
            </div> 
        </div> 
    </div> 
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\praktikum_web2\resources\views/welcome.blade.php ENDPATH**/ ?>