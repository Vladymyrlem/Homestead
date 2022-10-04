<?php $__env->startSection('title', 'Categories'); ?>

<?php $__env->startSection('breadcrumbs'); ?>
<?php echo $__env->make('particials.breadcrumbs', [
    'links' => [
        [
            'link' => '/',
            'name' => 'Category List'
        ], [
            'link' => '/tags',
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
    <h1>Category List</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Posts</th>
        </tr>
        </thead>
        <tbody>
        <?php $__empty_1 = true;
        $__currentLoopData = $categories;
        $__env->addLoop($__currentLoopData);
        foreach ($__currentLoopData as $category): $__env->incrementLoopIndices();
            $loop = $__env->getLastLoop();
            $__empty_1 = false; ?>
            <tr>
                <th scope="row"><?php echo e($category->id); ?></th>
                <td><?php echo e($category->title); ?></td>
                <td><?php echo e($category->slug); ?></td>
                <td><?php echo e($category->post->pluck('title')->join(', ')); ?></td>
                <td><a href="/categories/<?php echo e($category->id); ?>/restore">RESTORE</a></td>

            </tr>
        <?php endforeach;
        $__env->popLoop();
        $loop = $__env->getLastLoop();
        if ($__empty_1): ?>
            <p>Empty</p>
        <?php endif; ?>
        </tbody>
    </table>
    <a class="btn btn-secondary mt-3" href="/categories"> Back </a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/test/lesson-10/resources/views/categories/trash.blade.php ENDPATH**/ ?>
