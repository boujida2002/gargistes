<?php $__env->startSection('title', 'Login '); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="text-center mt-5 alert alert-danger w-25 m-auto">Login</h1>
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
        <form action="<?php echo e(route('login.post')); ?>" method="POST" class="m-auto rounded p-5 shadow-lg" style="width: 400px">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                <label class="form-check-label" for="remember_me">Remember Me</label>
            </div>
            <a class="text-decoration-none text-primary mb-3 d-block" href="<?php echo e(route('registration')); ?>">Create New Account,
                Click Here</a>
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bouji\Downloads\Garagiste-Project-main\Garagiste\resources\views/login.blade.php ENDPATH**/ ?>