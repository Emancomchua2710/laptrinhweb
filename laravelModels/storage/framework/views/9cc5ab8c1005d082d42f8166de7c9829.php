<?php $__env->startSection('content'); ?>
<main class="login-form">
    <div class="container mt-4">
        <div class="row justify-content-center">
            <h3 class="text-center mb-4">Danh sách User</h3>
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>STT</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($users->firstItem() + $index); ?></td>
                            <td><?php echo e($user->name); ?></td>
                            <td><?php echo e($user->email); ?></td>
                            <td>
                                <?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="<?php echo e(route('user.role', ['id' => $role->id])); ?>">
                                        <?php echo e($role->name . ' '); ?>

                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td>
                                <a href="<?php echo e(route('user.updateUser', ['id' => $user->id])); ?>" class="text-primary">Edit</a> |
                                <a href="<?php echo e(route('user.readUser', ['id' => $user->id])); ?>" class="text-info">View</a> |
                                <a href="<?php echo e(route('user.deleteUser', ['id' => $user->id])); ?>" 
                                   class="text-danger" onclick="return confirm('Bạn có chắc muốn xóa user này không?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            
            <!-- Phân trang -->
            <div class="d-flex justify-content-center mt-3">
                <?php echo e($users->links()); ?>

            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Admin\Downloads\CRUD-Role_24_4\crud\resources\views\crud_user\list.blade.php ENDPATH**/ ?>