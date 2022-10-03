<?php $__env->startSection('content'); ?>
    <table class="table table-bordered table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
            <th scope="col">Posts</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="col"><?php echo e($tag->id); ?></th>
            <th scope="col"><?php echo e($tag->title); ?></th>
            <th scope="col"><?php echo e($tag->slug); ?></th>
            <th scope="col"><?php echo e($tag->created_at); ?></th>
            <th scope="col"><?php echo e($tag->updated_at); ?></th>
            <th scope="col">
                <?php $__currentLoopData = $tag->post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $post->title.'<br>'; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </th>
        </tr>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/test/lesson-9/resources/views/tags/show.blade.php ENDPATH**/ ?>