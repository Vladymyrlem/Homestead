<?php $__env->startSection('content'); ?>
    <table class="table table-bordered table-hover table-dark" id="post-content-table">
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
        </tr>
        </thead>
        <tbody>
        <tr>
            <td scope="col"><?php echo e($post->id); ?></td>
            <td scope="col"><?php echo e($post->title); ?></td>
            <td scope="col"><?php echo e($post->slug); ?></td>
            <td scope="col"><?php echo e($post->body); ?></td>
            <td scope="col">
                <?php echo $post->category->title.'<br>'; ?>
            </td>
            <td scope="col"><?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $tag->title . '<br>'; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </td>
            <td scope="col"><?php echo e($post->created_at); ?></td>
            <td scope="col"><?php echo e($post->updated_at); ?></td>
        </tr>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/test/lesson-9/resources/views/posts/show.blade.php ENDPATH**/ ?>