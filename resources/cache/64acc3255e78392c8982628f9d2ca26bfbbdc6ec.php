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


    <table class="table table-bordered table-hover table-dark">
        <thead>
        <tr>
            <td colspan="3" style="text-align: center;"><a href="../" style="font-size: 20px; color: #ffc107">&#11152;
                    back</a></td>
            <td colspan="7" style="text-align: center;"><a href="/categories/create"
                                                           style="font-size: 20px; color: #ffc107"> Create Category</a>
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
        <?php $__currentLoopData = $categories;
        $__env->addLoop($__currentLoopData);
        foreach ($__currentLoopData as $category): $__env->incrementLoopIndices();
            $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($category->id); ?></th>
                <td><?php echo e($category->title); ?></td>
                <td><?php echo e($category->slug); ?></td>
                <td>          <?php $__currentLoopData = $category->post;
                    $__env->addLoop($__currentLoopData);
                    foreach ($__currentLoopData as $post): $__env->incrementLoopIndices();
                        $loop = $__env->getLastLoop(); ?>
                        <?php echo $post->title . '<br>'; ?>
                    <?php endforeach;
                    $__env->popLoop();
                    $loop = $__env->getLastLoop(); ?>   </td>

                <td><?php echo e($category->created_at); ?></td>
                <td><?php echo e($category->updated_at); ?></td>
                <td><a class="btn btn-success btn-sm" href="categories/<?php echo e($category->id); ?>/edit">&#9999;<i
                                class="fa fa-edit"></i></a></td>
                <td><a class="btn btn-light btn-sm" href="categories/<?php echo e($category->id); ?>/delete">&#10060;<i
                                class="fa fa-trash"></i></a></td>
                <td><a class="btn btn-light btn-sm" href="categories/<?php echo e($category->id); ?>">show<i
                                class="fa fa-eye"></i></a></td>
            </tr>
        <?php endforeach;
        $__env->popLoop();
        $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/test/lesson-9/resources/views/categories/index.blade.php ENDPATH**/ ?>
