<?php $__env->startSection('content'); ?>
    <h1><?php echo e($post->title); ?></h1>
    <ul>
        <li>
            Slug: <?php echo e($post->slug); ?>

            created: <?php echo e($post->created_at); ?>

            update: <?php echo e($post->updated_at); ?>

        </li>
        <li>
            Body: <?php echo e($post->slug); ?>

        </li>
        <li>
            Category: <?php echo e($post->category_id); ?>

        </li>
    </ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/test/lesson-10/resources/views/posts/show.blade.php ENDPATH**/ ?>