<?php $__env->startSection('title', 'Registration '); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="text-center mt-5 alert alert-danger w-25 m-auto">Registration</h1>
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

        <form action="<?php echo e(route('registration.post')); ?>" method="POST" class="m-auto rounded p-5 shadow-lg"
            enctype="multipart/form-data" style="max-width: 500px;">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Profile Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image" required>
            </div>
            <div class="mb-3">
                <label for="user_type" class="form-label">User Type</label>
                <select class="form-select" id="user_type" name="user_type" required>
                    <option value="client">Client</option>
                    <option value="mechanic">Mechanic</option>
                    <option value="administrator">Administrator</option>
                </select>
            </div>


            <!-- Additional fields for mechanics -->
            <div id="mechanic_fields" style="display: none;">

                <div class="mb-3">
                    <label for="license_number" class="form-label">Mechanic License Number</label>
                    <input type="text" class="form-control" id="license_number" name="license_number">
                </div>
                <div class="mb-3">
                    <label for="specialization" class="form-label">Specialization</label>
                    <input type="text" class="form-control" id="specialization" name="specialization">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address">
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city" name="city">
                </div>
            </div>

            <!-- Additional field for administrator -->
            <div id="administrator_fields" style="display: none;">
                <div class="mb-3">
                    <label for="codeLogin" class="form-label">Code Login (optional)</label>
                    <input type="text" class="form-control" id="codeLogin" name="codeLogin">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script>
        document.getElementById('user_type').addEventListener('change', function() {
            var userType = this.value;
            if (userType === 'mechanic') {
                document.getElementById('mechanic_fields').style.display = 'block';
                document.getElementById('administrator_fields').style.display = 'none';
            } else if (userType === 'administrator') {
                document.getElementById('administrator_fields').style.display = 'block';
                document.getElementById('mechanic_fields').style.display = 'none';
            } else {
                document.getElementById('mechanic_fields').style.display = 'none';
                document.getElementById('administrator_fields').style.display = 'none';
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bouji\OneDrive\سطح المكتب\Garagiste\resources\views/registration.blade.php ENDPATH**/ ?>