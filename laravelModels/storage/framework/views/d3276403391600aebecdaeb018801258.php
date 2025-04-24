<?php $__env->startSection('content'); ?>
<main class="signup-form">
    <div class="container mt-4">
        <!-- Thanh điều hướng -->
        <nav class="card p-2 mb-3 bg-dark text-white">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?php echo e(route('login')); ?>">Đăng nhập</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active fw-bold text-light" href="<?php echo e(route('user.createUser')); ?>">Đăng ký</a>
                </li>
            </ul>
        </nav>

        <!-- Form đăng ký -->
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card p-4 shadow-lg" style="background-color: #f8f9fa;">
                    <h3 class="text-center text-primary">Màn hình đăng ký</h3>

                    <div class="card-body">
                        <form action="<?php echo e(route('user.postUser')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group mb-3">
                                <label for="username" class="text-secondary">Username</label>
                                <input type="text" id="username" class="form-control" name="name" required autofocus>
                            </div>

                            <div class="form-group mb-3">
                                <label for="email" class="text-secondary">Email</label>
                                <input type="email" id="email" class="form-control" name="email" required>
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="address" class="text-secondary">Địa chỉ</label>
                                <input type="text" id="address" class="form-control" name="address" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="password" class="text-secondary">Mật khẩu</label>
                                <input type="password" id="password" class="form-control" name="password" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="confirm_password" class="text-secondary">Nhập lại mật khẩu</label>
                                <input type="password" id="confirm_password" class="form-control" name="password_confirmation" required>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <button type="submit" class="btn btn-primary">Đăng ký</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="text-center mt-4">
            <p class="text-muted">© 2025</p>
        </footer>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Admin\Downloads\CRUD-Role_24_4\crud\resources\views\crud_user\registration.blade.php ENDPATH**/ ?>