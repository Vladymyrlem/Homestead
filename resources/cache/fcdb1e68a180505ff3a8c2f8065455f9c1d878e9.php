<?php $__env->startSection('title', 'Posts'); ?>

<?php $__env->startSection('breadcrumbs'); ?>
<?php echo $__env->make('particials.breadcrumbs', [
    'links' => [
        [
            'link' => '/category',
            'name' => 'Category List'
        ], [
            'link' => '/tag',
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
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Body</th>
            <th scope="col">Category</th>
            <th scope="col">Tags</th>
            <th scope="col">Actions</th>
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
                <td><?php echo e($post->category_id); ?></td>
                <td><?php echo e($post->tags->pluck('title')->join(', ')); ?></td>
                <td><a href="/posts/<?php echo e($post->id); ?>/restore">RESTORE</a></td>

            </tr>
        <?php endforeach;
        $__env->popLoop();
        $loop = $__env->getLastLoop();
        if ($__empty_1): ?>
            <p>Empty</p>
        <?php endif; ?>
        </tbody>
    </table>
    <a class="btn btn-secondary mt-3" href="/post"> Back </a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/test/lesson-10/resources/views/posts/trash.blade.php ENDPATH**/ ?>
