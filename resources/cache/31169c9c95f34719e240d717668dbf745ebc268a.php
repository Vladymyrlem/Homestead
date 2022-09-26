<?php $__env->startSection('title'); ?>
list categories
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<table class="table table-bordered table-hover table-dark">
    <thead>
    <tr>
        <td colspan="2" style="text-align: center;"><a href="../" style="font-size: 20px; color: #ffc107">&#11152;
                back</a></td>
        <td colspan="7" style="text-align: center;"><a href="create-post.php" style="font-size: 20px; color: #ffc107">
                Create Post</a></td>
    </tr>
    </thead>
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">title</th>
        <th scope="col">slug</th>
        <th scope="col">body</th>
        <th scope="col">category</th>
        <th scope="col">created_at</th>
        <th scope="col">updated_at</th>
        <th scope="col">update</th>
        <th scope="col">delete</th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $posts;
    $__env->addLoop($__currentLoopData);
    foreach ($__currentLoopData as $post): $__env->incrementLoopIndices();
        $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($post->id); ?></th>
            <td><?php echo e($post->title); ?></td>
            <td><?php echo e($post->slug); ?></td>
            <td><?php echo e($post->body); ?></td>
            <td><?php echo e($post->category_id); ?></td>
            <td><?php echo e($post->created_at); ?></td>
            <td><?php echo e($post->updated_at); ?></td>
            <td><a class="btn btn-success btn-sm" href="update-post.php?id=<?php echo e($post->id); ?>">&#9999;<i
                            class="fa fa-edit"></i></a></td>
            <td><a class="btn btn-light btn-sm" href="delete-post.php?id=<?php echo e($post->id); ?>">&#10060;<i
                            class="fa fa-trash"></i></a></td>
        </tr>
    <?php endforeach;
    $__env->popLoop();
    $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/test/lesson-7/resources/views/posts/index.blade.php ENDPATH**/ ?>
