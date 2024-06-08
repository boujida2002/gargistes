<?php
use Illuminate\Support\Facades\Auth;
?>

<?php $__env->startSection('title', 'Update User'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="text-center mt-5 alert alert-danger w-25 m-auto">Update User</h1>
        <div class="mt-5 w-50 m-auto">
            <?php if($errors->any()): ?>
                <div class="col-12">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="alert alert-danger"><?php echo e($error); ?></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>

            <?php if(session()->has('error')): ?>
                <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
            <?php endif; ?>

            <?php if(session()->has('success')): ?>
                <div class="alert alert-success"><?php echo e(session('success')); ?></div>
            <?php endif; ?>
        </div>
        <form action="<?php echo e(route('dashboard')); ?>" method="POST" class="m-auto rounded p-5 shadow-lg" style="width: 400px">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?> <!-- Use PUT method for updating user details -->
            <div class="mb-3">
                <label class="form-label">Name :</label>
                <input type="text" class="form-control" name="name" value="<?php echo e(Auth::user()->name); ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" value="<?php echo e(Auth::user()->email); ?>">
            </div>

            <button type="submit" class="btn btn-danger">Save Changes</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bouji\Downloads\Garagiste-Project-main\Garagiste\resources\views/updateUser.blade.php ENDPATH**/ ?>