<?php $__env->startSection('title', 'Tags'); ?>

<?php $__env->startSection('breadcrumbs'); ?>
<?php echo $__env->make('particials.breadcrumbs', [
    'links' => [
        [
            'link' => '/categories',
            'name' => 'Category List'
        ], [
            'link' => '/',
            'name' => 'Tag List'
        ], [
            'link' => '/posts',
            'name' => 'Post List'
        ]
    ]
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if (isset($_SESSION['success'])): ?>
    <div class="alert alert-success" role="alert">
        <?php echo e($_SESSION['success']); ?>

    </div>
<?php endif; ?>
<?php
unset($_SESSION['success']);
?>
    <h1>Tag List</h1>
    <table class="table table-bordered table-hover table-dark">
        <thead>
        <tr>
            <td colspan="3" style="text-align: center;"><a href="../" style="font-size: 20px; color: #ffc107">&#11152;
                    back</a></td>
            <td colspan="7" style="text-align: center;"><a href="/tags/create"
                                                           style="font-size: 20px; color: #ffc107"> Create Tag</a>
            </td>
        </tr>
        </thead>
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">slug</th>
            <th scope="col">posts</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
            <th scope="col">update</th>
            <th scope="col">delete</th>
            <th scope="col">show</th>
        </tr>
        </thead>
        <tbody>
        <?php $__empty_1 = true;
        $__currentLoopData = $tags;
        $__env->addLoop($__currentLoopData);
        foreach ($__currentLoopData as $tag): $__env->incrementLoopIndices();
            $loop = $__env->getLastLoop();
            $__empty_1 = false; ?>
            <tr>
                <th scope="row"><?php echo e($tag->id); ?></th>
                <td><?php echo e($tag->title); ?></td>
                <td><?php echo e($tag->slug); ?></td>
                <td>  <?php $__currentLoopData = $tag->post;
                    $__env->addLoop($__currentLoopData);
                    foreach ($__currentLoopData as $post): $__env->incrementLoopIndices();
                        $loop = $__env->getLastLoop(); ?>
                        <?php echo $post->title . '<br>'; ?>
                    <?php endforeach;
                    $__env->popLoop();
                    $loop = $__env->getLastLoop(); ?> </td>
                <td><?php echo e($tag->created_at); ?></td>
                <td><?php echo e($tag->updated_at); ?></td>
                <td><a class="btn btn-success btn-sm" href="tags/<?php echo e($tag->id); ?>/edit">&#9999;<i
                                class="fa fa-edit"></i></a></td>
                <td><a class="btn btn-light btn-sm" href="tags/<?php echo e($tag->id); ?>/delete">&#10060;<i
                                class="fa fa-trash"></i></a></td>
                <td><a class="btn btn-light btn-sm" href="tags/<?php echo e($tag->id); ?>">show<i
                                class="fa fa-eye"></i></a></td>
            </tr>
        <?php endforeach;
        $__env->popLoop();
        $loop = $__env->getLastLoop();
        if ($__empty_1): ?>
            <p>Empty</p>
        <?php endif; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/test/lesson-9/resources/views/tags/index.blade.php ENDPATH**/ ?>
