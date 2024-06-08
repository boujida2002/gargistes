<style>
    .nav-link.active:hover {
        border-bottom: 2px solid red;
    }
</style>


<nav class="navbar navbar-expand-lg shadow shadow-1">
    <div class="container">
        <!-- Logo on the left -->
        <div class="navbar-brand">
            <img src="<?php echo e(asset('car.png')); ?>" alt="" width="120" height="50">
        </div>

        <!-- Toggle button for small screens -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Centered navigation links -->
            <div class="navbar-nav mx-auto ">
                <a class="nav-link active" aria-current="page" href="<?php echo e(route('home')); ?>">Home</a>
                <a class="nav-link active" aria-current="page" href="#">Service</a>
                <a class="nav-link active" aria-current="page" href="#">Contact</a>
                <a class="nav-link active" aria-current="page" href="#">About</a>
            </div>

            <div class="ms-auto">
                <ul class="navbar-nav">
                    <?php if(auth()->guard()->check()): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="navbarDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo e(auth()->user()->name); ?>

                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?php echo e(route('profile')); ?>">Edit Profile</a></li>
                                <li><a class="dropdown-item" href="#">Historique</a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('logout')); ?>">Logout</a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>"><button
                                    class="btn btn-danger">Login</button></a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\bouji\Downloads\Garagiste-Project-main\Garagiste\resources\views/include/header.blade.php ENDPATH**/ ?>