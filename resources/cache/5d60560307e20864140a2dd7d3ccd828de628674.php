<?php $__env->startSection('title', 'Posts'); ?>

<?php $__env->startSection('breadcrumbs'); ?>
<?php echo $__env->make('particials.breadcrumbs', [
    'links' => [
        [
            'link' => '/categories',
            'name' => 'Category List'
        ], [
            'link' => '/tags',
            'name' => 'Tag List'
        ], [
            'link' => '/',
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
    <h1>Post List</h1>
    <table class="table table-bordered table-hover table-dark">
        <thead>
        <tr>
            <th colspan="2" style="text-align: center;"><a href="../" style="font-size: 20px; color: #ffc107">&#11152;
                    back</a></th>
            <th colspan="9" style="text-align: center;"><a href="posts/create"
                                                           style="font-size: 20px; color: #ffc107"> Create Post</a></th>
        </tr>
        </thead>
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">slug</th>
            <th scope="col">body</th>
            <th scope="col">category</th>
            <th scope="col">tags</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
            <th scope="col">update</th>
            <th scope="col">delete</th>
            <th scope="col">show</th>
        </tr>
        </thead>
        <tbody>
        <?php $__empty_1 = true;
        $__currentLoopData = $posts;
        $__env->addLoop($__currentLoopData);
        foreach ($__currentLoopData as $post): $__env->incrementLoopIndices();
            $loop = $__env->getLastLoop();
            $__empty_1 = false; ?>
            <tr>
                <th scope="row"><?php echo e($post->id); ?></th>
                <td><?php echo e($post->title); ?></td>
                <td><?php echo e($post->slug); ?></td>
                <td><?php echo e($post->body); ?></td>
                <td>


                    <?php echo e($post->category->title); ?>

                </td>
                <td>


                    <?php echo e($post->tags->pluck('title')->join(',')); ?>

                </td>
                <td><?php echo e($post->created_at); ?></td>
                <td><?php echo e($post->updated_at); ?></td>
                <td><a class="btn btn-success btn-sm" href="posts/<?php echo e($post->id); ?>/edit">&#9999;<i
                                class="fa fa-edit"></i></a></td>
                <td><a class="btn btn-light btn-sm" href="posts/<?php echo e($post->id); ?>/delete">&#10060;<i
                                class="fa fa-trash"></i></a></td>

                <td><a class="btn btn-light btn-sm" href="posts/<?php echo e($post->id); ?>">Show</a></td>
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

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/test/homework10/resources/views/posts/index.blade.php ENDPATH**/ ?>
