<?php $__env->startSection('content'); ?>
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="mb-4">Màn hình chi tiết</h3>
                        <table class="table table-borderless">
                            <tr>
                                <td><strong>Username</strong></td>
                                <td><?php echo e($messi->name); ?></td>
                            </tr>
                            <tr>
                                <td><strong>Email</strong></td>
                                <td><?php echo e($messi->email); ?></td>
                            </tr>
                            <!-- Các trường khác có thể thêm ở đây nếu cần -->
                        </table>
                        <a href="<?php echo e(route('user.updateUser', ['id' => $messi->id])); ?>" class="btn btn-primary">
                            Chỉnh sửa
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Admin\Downloads\CRUD-Role_24_4\crud\resources\views/crud_user/read.blade.php ENDPATH**/ ?>