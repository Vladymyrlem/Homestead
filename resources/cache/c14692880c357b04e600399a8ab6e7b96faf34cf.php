<?php $__env->startSection('content'); ?>
    <form action="/tags/store" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title"
                   value="<?php echo e($_SESSION['data']['title'] ?? ''); ?>">

            <?php if (isset($_SESSION['errors']['title'])): ?>
                <?php $__currentLoopData = $_SESSION['errors']['title'];
                $__env->addLoop($__currentLoopData);
                foreach ($__currentLoopData as $title): $__env->incrementLoopIndices();
                    $loop = $__env->getLastLoop(); ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo e($title); ?>

                    </div>
                <?php endforeach;
                $__env->popLoop();
                $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug"
                   value="<?php echo e($_SESSION['data']['slug'] ?? ''); ?>">

            <?php if (isset($_SESSION['errors']['slug'])): ?>
                <?php $__currentLoopData = $_SESSION['errors']['slug'];
                $__env->addLoop($__currentLoopData);
                foreach ($__currentLoopData as $slug): $__env->incrementLoopIndices();
                    $loop = $__env->getLastLoop(); ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo e($slug); ?>

                    </div>
                <?php endforeach;
                $__env->popLoop();
                $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label for="posts" class="form-label">Posts</label>
            <select multiple aria-label="multiple select example" name="posts[]" id="posts">
                <?php $__currentLoopData = $posts;
                $__env->addLoop($__currentLoopData);
                foreach ($__currentLoopData as $post): $__env->incrementLoopIndices();
                    $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($post->id); ?>"><?php echo e($post->title); ?></option>
                <?php endforeach;
                $__env->popLoop();
                $loop = $__env->getLastLoop(); ?>
            </select>
            <?php if (isset($_SESSION['errors']['$post'])): ?>
                <?php $__currentLoopData = $_SESSION['errors']['post'];
                $__env->addLoop($__currentLoopData);
                foreach ($__currentLoopData as $error): $__env->incrementLoopIndices();
                    $loop = $__env->getLastLoop(); ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo e($error); ?>

                    </div>
                <?php endforeach;
                $__env->popLoop();
                $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php
unset($_SESSION['errors']);
unset($_SESSION['data']);
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/test/homework10/resources/views/tags/form.blade.php ENDPATH**/ ?>
