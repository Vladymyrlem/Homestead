<?php $__env->startSection('content'); ?>
    <table class="table table-bordered table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">slug</th>
            <th scope="col">Posts</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="col"><?php echo e($category->id); ?></th>
            <th scope="col"><?php echo e($category->title); ?></th>
            <th scope="col"><?php echo e($category->slug); ?></th>
            <th scope="col">
                <?php $__currentLoopData = $category->post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $post->title.'<br>'; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </th>
            <th scope="col"><?php echo e($category->created_at); ?></th>
            <th scope="col"><?php echo e($category->updated_at); ?></th>
        </tr>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/test/lesson-9/resources/views/categories/show.blade.php ENDPATH**/ ?>