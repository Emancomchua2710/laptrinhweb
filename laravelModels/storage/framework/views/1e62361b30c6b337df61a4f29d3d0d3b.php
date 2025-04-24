<?php $__env->startSection('content'); ?>
<main class="signup-form">
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <h3 class="card-header text-center text-primary">Màn hình cập nhật</h3>
                    <div class="card-body">
                        <form action="<?php echo e(route('user.postUpdateUser')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input name="id" type="hidden" value="<?php echo e($user->id); ?>">

                            <div class="form-group mb-3">
                                <label for="name" class="text-secondary">Username</label>
                                <input type="text" id="name" class="form-control" name="name"
                                       value="<?php echo e($user->name); ?>" required autofocus>
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group mb-3">
                                <label for="password" class="text-secondary">Mật khẩu</label>
                                <input type="password" id="password" class="form-control" name="password" required>
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group mb-3">
                                <label for="password_confirmation" class="text-secondary">Nhập lại mật khẩu</label>
                                <input type="password" id="password_confirmation" class="form-control"
                                       name="password_confirmation" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="email" class="text-secondary">Email</label>
                                <input type="email" id="email" class="form-control" name="email"
                                       value="<?php echo e($user->email); ?>" required>
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="d-grid mx-auto text-center">
                                <button type="submit" class="btn btn-primary mt-3">Cập Nhật</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Admin\Downloads\CRUD-Role_24_4\crud\resources\views\crud_user\update.blade.php ENDPATH**/ ?>