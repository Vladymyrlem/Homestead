

<?php $__env->startSection('title'); ?>
    list categories
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <table class="table table-bordered table-hover table-dark">
        <thead>
        <tr>
            <td colspan="1"  style="text-align: center;"><a href="../" style="font-size: 20px; color: #ffc107">&#11152; back</a></td>
            <td colspan="6"  style="text-align: center;"><a href="create-category.php" style="font-size: 20px; color: #ffc107"> Create Category</a></td>
        </tr>
        </thead>
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">slug</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
            <th scope="col">update</th>
            <th scope="col">delete</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($category->id); ?></th>
                <td><?php echo e($category->title); ?></td>
                <td><?php echo e($category->slug); ?></td>
                <td><?php echo e($category->created_at); ?></td>
                <td><?php echo e($category->updated_at); ?></td>
                <td><a class="btn btn-success btn-sm" href="update-category.php?id=<?php echo e($category->id); ?>">&#9999;<i class="fa fa-edit"></i></a></td>
                <td><a class="btn btn-light btn-sm" href="delete-category.php?id=<?php echo e($category->id); ?>">&#10060;<i class="fa fa-trash"></i></a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/test/lesson-8/resources/views/categories/list.blade.php ENDPATH**/ ?>