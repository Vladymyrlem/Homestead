<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <?php $__currentLoopData = $links;
        $__env->addLoop($__currentLoopData);
        foreach ($__currentLoopData as $link): $__env->incrementLoopIndices();
            $loop = $__env->getLastLoop(); ?>
            <?php if ($link['link'] == '/'): ?>
                <li class="breadcrumb-item"><?php echo e($link['name']); ?></li>
            <?php else: ?>
                <li class="breadcrumb-item"><a
                            href="<?php echo e($link['link']); ?>"><?php echo e($link['name']); ?></a></li>
            <?php endif; ?>
        <?php endforeach;
        $__env->popLoop();
        $loop = $__env->getLastLoop(); ?>
    </ol>
</nav>
<?php /**PATH /home/vagrant/code/test/lesson-10/resources/views/particials/breadcrumbs.blade.php ENDPATH**/ ?>
