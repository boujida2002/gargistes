<?php $__env->startSection('title', 'Edit Profile'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="text-center mt-5 alert alert-success w-25 m-auto">Profile</h1>
        <div class="mt-5">
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

        <form action="<?php echo e(route('profile.update')); ?>" method="POST" class="m-auto rounded p-5 shadow-lg" style="width: 400px"
            style="max-width: 400px;">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo e(auth()->user()->name); ?>"
                    required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo e(auth()->user()->email); ?>"
                    required>
            </div>


            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bouji\Downloads\Garagiste-Project-main\Garagiste\resources\views/profile.blade.php ENDPATH**/ ?>