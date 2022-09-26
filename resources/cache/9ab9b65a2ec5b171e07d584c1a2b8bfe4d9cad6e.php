<?php $__env->startSection('title'); ?>
List Tag
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<table class="table table-bordered table-hover table-dark">
    <thead>
    <tr>
        <td colspan="1" style="text-align: center;"><a href="../" style="font-size: 20px; color: #ffc107"><- back</a>
        </td>
        <td colspan="6" style="text-align: center;"><a href="create-tag.php" style="font-size: 20px; color: #ffc107">
                Create tag </a></td>
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
    <?php $__currentLoopData = $tags;
    $__env->addLoop($__currentLoopData);
    foreach ($__currentLoopData as $tag): $__env->incrementLoopIndices();
        $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($tag->id); ?></th>
            <td><?php echo e($tag->title); ?></td>
            <td><?php echo e($tag->slug); ?></td>
            <td><?php echo e($tag->created_at); ?></td>
            <td><?php echo e($tag->updated_at); ?></td>
            <td><a class="btn btn-success btn-sm" href="update-tag.php?id=<?php echo e($tag->id); ?>">&#9999;<i
                            class="fa fa-edit"></i></a></td>
            <td><a class="btn btn-light btn-sm" href="delete-tag.php?id=<?php echo e($tag->id); ?>">&#10060;<i
                            class="fa fa-trash"></i></a></td>
        </tr>
    <?php endforeach;
    $__env->popLoop();
    $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/test/lesson-7/resources/views/tags/index.blade.php ENDPATH**/ ?>
